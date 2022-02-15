<?php

if ( ! class_exists( 'CustomReviewType' ) ) {
    class CustomReviewType {

        public function __construct() {
            $typeName = 'Обзоры';
            $singularName = 'Обзор';
            register_post_type( 'cr_reviews', array(
                'labels' => array(
                    'name'               => __($typeName),
                    'singular_name'      => __($singularName),
                    'menu_name'          => __($typeName),
                    'add_new'            => __('Добавить '.$singularName),
                    'add_new_item'       => __('Добавить '.$singularName),
                ),
                'public'             => true,
                'has_archive'        => strtolower($taxonomy_name),
                'hierarchical'       => false,
                'rewrite'            => array( 'slug' => $name ),
                'menu_icon'          => 'dashicons-format-quote'
            ));
        }  
        
    }  

    $customReviewType = new CustomReviewType();

}