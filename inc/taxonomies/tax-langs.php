<?php

namespace customReviews;

if ( ! class_exists( 'TaxonomyLanguages' ) ) {
    class TaxonomyLanguages extends TaxonomyBase{
        
        public function __construct() {
            $this->taxName = 'Языки';
            $this->singularName = 'Язык';
            $this->taxSlug = 'cr_tax-languages';
            parent::RegisterTaxonomy();
              
        } 
        
    }  

    $taxonomyLanguages = new TaxonomyLanguages();

}