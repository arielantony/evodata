<?php

require_once 'HTMLPurifier/AttrTransform.php';

// must be called POST validation

HTMLPurifier_ConfigSchema::define(
    'Attr', 'DefaultInvalidImage', '', 'string',
    'This is the default image an img tag will be pointed to if it does '.
    'not have a valid src attribute.  In future versions, we may allow the '.
    'image tag to be removed completely, but due to design issues, this is '.
    'not possible right now.'
);

HTMLPurifier_ConfigSchema::define(
    'Attr', 'DefaultInvalidImageAlt', 'Invalid image', 'string',
    'This is the content of the alt tag of an invalid image if the user '.
    'had not previously specified an alt attribute.  It has no effect when the '.
    'image is valid but there was no alt attribute present.'
);

/**
 * Post-transform that ensures the required attrs of img (alt and src) are set
 */
class HTMLPurifier_AttrTransform_ImgRequired extends HTMLPurifier_AttrTransform
{
    
    function transform($attr, $config, $context) {
        
        $src = true;
        if (!isset($attr['src'])) {
            $attr['src'] = $config->get('Attr', 'DefaultInvalidImage');
            $src = false;
        }
        
        if (!isset($attr['alt'])) {
            if ($src) {
                $attr['alt'] = basename($attr['src']);
            } else {
                $attr['alt'] = $config->get('Attr', 'DefaultInvalidImageAlt');
            }
        }
        
        return $attr;
        
    }
    
}

?>