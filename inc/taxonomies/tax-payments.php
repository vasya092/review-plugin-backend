<?php

namespace customReviews;

if ( ! class_exists( 'TaxonomyPayments' ) ) {
    class TaxonomyPayments extends TaxonomyBase{
        
        public function __construct() {
            $this->taxName = 'Платежные системы';
            $this->singularName = 'Платежная система';
            $this->taxSlug = 'cr_tax-payments';
            parent::RegisterTaxonomy();
              
        } 
        
    }  

    $taxonomyPayments = new TaxonomyPayments();

}