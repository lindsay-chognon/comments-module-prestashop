<?php

class MymodComments extends Module {

    public function __construct() {

        $this->name = 'mymodcomments';
        $this->displayName = 'Module de commentaires produits';
        $this->tab = 'front_office_features';
        $this->version = '0.1.0';
        $this->author = 'Lindsay Chognon';
        $this->description = 'Boostez vos ventes grâce à vos avis clients.';

        $this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];

        parent::__construct();

    }

}
