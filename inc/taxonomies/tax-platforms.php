<?php

namespace customReviews;

if ( ! class_exists( 'TaxonomyPlatforms' ) ) {
    class TaxonomyPlatforms extends TaxonomyBase{
        
        public function __construct() {
            $this->taxName = 'Платформы';
            $this->singularName = 'Платформа';
            $this->taxSlug = 'cr_tax-platforms';
            parent::RegisterTaxonomy();
              
        } 
        
    }  

    $taxonomyPlatforms = new TaxonomyPlatforms();

}