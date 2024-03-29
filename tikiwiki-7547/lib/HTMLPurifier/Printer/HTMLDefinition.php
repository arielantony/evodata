<?php

require_once 'HTMLPurifier/Printer.php';

class HTMLPurifier_Printer_HTMLDefinition extends HTMLPurifier_Printer
{
    
    /**
     * Instance of HTMLPurifier_HTMLDefinition, for easy access
     */
    var $def;
    
    function render(&$config) {
        $ret = '';
        $this->config =& $config;
        $this->def =& $config->getHTMLDefinition();
        $def =& $this->def;
        
        $ret .= $this->start('div', array('class' => 'HTMLPurifier_Printer'));
        $ret .= $this->start('table');
        $ret .= $this->element('caption', 'Environment');
        
        $ret .= $this->row('Parent of fragment', $def->info_parent);
        $ret .= $this->row('Strict mode', $def->strict);
        if ($def->strict) $ret .= $this->row('Block wrap name', $def->info_block_wrapper);
        
        $ret .= $this->start('tr');
            $ret .= $this->element('th', 'Global attributes');
            $ret .= $this->element('td', $this->listifyAttr($def->info_global_attr),0,0);
        $ret .= $this->end('tr');
        
        $ret .= $this->renderChildren($def->info_parent_def->child);
        
        $ret .= $this->start('tr');
            $ret .= $this->element('th', 'Tag transforms');
            $list = array();
            foreach ($def->info_tag_transform as $old => $new) {
                $new = $this->getClass($new, 'TagTransform_');
                $list[] = "<$old> with $new";
            }
            $ret .= $this->element('td', $this->listify($list));
        $ret .= $this->end('tr');
        
        $ret .= $this->start('tr');
            $ret .= $this->element('th', 'Pre-AttrTransform');
            $ret .= $this->element('td', $this->listifyObjectList($def->info_attr_transform_pre));
        $ret .= $this->end('tr');
        
        $ret .= $this->start('tr');
            $ret .= $this->element('th', 'Post-AttrTransform');
            $ret .= $this->element('td', $this->listifyObjectList($def->info_attr_transform_post));
        $ret .= $this->end('tr');
        
        $ret .= $this->end('table');
        
        
        $ret .= $this->renderInfo();
        
        
        $ret .= $this->end('div');
        
        return $ret;
    }
    
    /**
     * Renders the Elements ($info) table
     */
    function renderInfo() {
        $ret = '';
        $ret .= $this->start('table');
        $ret .= $this->element('caption', 'Elements ($info)');
        ksort($this->def->info);
        $ret .= $this->start('tr');
        $ret .= $this->element('th', 'Allowed tags', array('colspan' => 2, 'class' => 'heavy'));
        $ret .= $this->end('tr');
        $ret .= $this->start('tr');
        $ret .= $this->element('td', $this->listifyTagLookup($this->def->info), array('colspan' => 2));
        $ret .= $this->end('tr');
        foreach ($this->def->info as $name => $def) {
            $ret .= $this->start('tr');
                $ret .= $this->element('th', "<$name>", array('class'=>'heavy', 'colspan' => 2));
            $ret .= $this->end('tr');
            $ret .= $this->start('tr');
                $ret .= $this->element('th', 'Type');
                $ret .= $this->element('td', ucfirst($def->type));
            $ret .= $this->end('tr');
            if (!empty($def->excludes)) {
                $ret .= $this->start('tr');
                    $ret .= $this->element('th', 'Excludes');
                    $ret .= $this->element('td', $this->listifyTagLookup($def->excludes));
                $ret .= $this->end('tr');
            }
            if (!empty($def->attr_transform_pre)) {
                $ret .= $this->start('tr');
                    $ret .= $this->element('th', 'Pre-AttrTransform');
                    $ret .= $this->element('td', $this->listifyObjectList($def->attr_transform_pre));
                $ret .= $this->end('tr');
            }
            if (!empty($def->attr_transform_post)) {
                $ret .= $this->start('tr');
                    $ret .= $this->element('th', 'Post-AttrTransform');
                    $ret .= $this->element('td', $this->listifyObjectList($def->attr_transform_post));
                $ret .= $this->end('tr');
            }
            if (!empty($def->auto_close)) {
                $ret .= $this->start('tr');
                    $ret .= $this->element('th', 'Auto closed by');
                    $ret .= $this->element('td', $this->listifyTagLookup($def->auto_close));
                $ret .= $this->end('tr');
            }
            $ret .= $this->start('tr');
                $ret .= $this->element('th', 'Allowed attributes');
                $ret .= $this->element('td',$this->listifyAttr($def->attr),0,0);
            $ret .= $this->end('tr');
            
            $ret .= $this->renderChildren($def->child);
        }
        $ret .= $this->end('table');
        return $ret;
    }
    
    /** 
     * Renders a row describing the allowed children of an element
     * @param $def HTMLPurifier_ChildDef of pertinent element
     */
    function renderChildren($def) {
        $context = new HTMLPurifier_Context();
        $ret = '';
        $ret .= $this->start('tr');
            $elements = array();
            $attr = array();
            if (isset($def->elements)) {
                if ($def->type == 'strictblockquote') $def->validateChildren(array(), $this->config, $context);
                $elements = $def->elements;
            } elseif ($def->type == 'chameleon') {
                $attr['rowspan'] = 2;
            } elseif ($def->type == 'empty') {
                $elements = array();
            } elseif ($def->type == 'table') {
                $elements = array('col', 'caption', 'colgroup', 'thead',
                    'tfoot', 'tbody', 'tr');
            }
            $ret .= $this->element('th', 'Allowed children', $attr);
            
            if ($def->type == 'chameleon') {
                
                $ret .= $this->element('td',
                    '<em>Block</em>: ' .
                    $this->escape($this->listifyTagLookup($def->block->elements)),0,0);
                $ret .= $this->end('tr');
                $ret .= $this->start('tr');
                $ret .= $this->element('td',
                    '<em>Inline</em>: ' .
                    $this->escape($this->listifyTagLookup($def->inline->elements)),0,0);
                
            } else {
                $ret .= $this->element('td',
                    '<em>'.ucfirst($def->type).'</em>: ' .
                    $this->escape($this->listifyTagLookup($elements)),0,0);
            }
        $ret .= $this->end('tr');
        return $ret;
    }
    
    /** 
     * Listifies a tag lookup table.
     * @param $array Tag lookup array in form of array('tagname' => true)
     */
    function listifyTagLookup($array) {
        $list = array();
        foreach ($array as $name => $discard) {
            if ($name !== '#PCDATA' && !isset($this->def->info[$name])) continue;
            $list[] = $name;
        }
        return $this->listify($list);
    }
    
    /**
     * Listifies a list of objects by retrieving class names and internal state
     * @param $array List of objects
     * @todo Also add information about internal state
     */
    function listifyObjectList($array) {
        $list = array();
        foreach ($array as $discard => $obj) {
            $list[] = $this->getClass($obj, 'AttrTransform_');
        }
        return $this->listify($list);
    }
    
    /**
     * Listifies a hash of attributes to AttrDef classes
     * @param $array Array hash in form of array('attrname' => HTMLPurifier_AttrDef)
     */
    function listifyAttr($array) {
        $list = array();
        foreach ($array as $name => $obj) {
            if ($obj === false) continue;
            $list[] = "$name&nbsp;=&nbsp;<i>" . $this->getClass($obj, 'AttrDef_') . '</i>';
        }
        return $this->listify($list);
    }
    
}

?>