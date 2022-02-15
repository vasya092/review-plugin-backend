<?php
// Класс родитель, для того что бы не повторять определенные свойства 
namespace customReviews;

if ( ! class_exists( 'TaxonomyBase' ) ) {
    class TaxonomyBase {

        public $taxName;
        public $singularName;
        public $taxSlug;

        public function __construct() {
            $this->taxName = 'Языки';
            $this->singularName = 'Язык';
            $this->taxSlug = 'cr_tax-languages';
            $this->RegisterTaxonomy();
              
        }  
        public function RegisterTaxonomy() {
            register_taxonomy( $this->taxSlug, ['cr_reviews'], array(
                'labels' => array(
                    'singular_name'      => __($this->singularName),
                    'all_items'          => __("Все".$this->taxName),
                    'add_new'            => __('Добавить'),
                    'add_new_item'       => __('Добавить'),
                ),
                'label' => __($this->taxName),
                'meta_box_cb' => 'post_tags_meta_box',
                'hierarchical' => false,
                'rewrite' => ['slug' => 'lang'],
                'show_admin_column' => true,
                'show_in_rest' => true,
            ));

        }   
        
    }  

}