<?php

add_filter( 'rwmb_meta_boxes', 'howlertravel_register_meta_boxes' );

function howlertravel_register_meta_boxes( $meta_boxes )
{

    $prefix = 'rw_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'additional_information',
        'title'    => 'Información Adicional',
        'pages'    => array('tour'),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            
    
             array(
                'name'  => 'Photos',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'tour_thumb',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
            
            
             array(
                'name'  => 'Features',
                'id'    => $prefix . 'features',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'features',
                'rows' => 6
                
                
            ),
              array(
                'name'  => 'What to wear',
                'id'    => $prefix . 'whattowear',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'whattowear',
                'rows' => 6
                
                
            ),
               array(
                'name'  => 'What to bring',
                'id'    => $prefix . 'whattobring',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'whattobring',
                'size' => 6
                
                
            ),
                 array(
                'name'  => 'Prices',
                'id'    => $prefix . 'prices',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'prices',
                'rows' => 6
                
                
            )
          
          
             

        )
    );


    return $meta_boxes;
}
