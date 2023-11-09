<?php

class MymodComments extends Module {

    public function __construct() {

        $this->name = 'mymodcomments';
        $this->displayName = 'Module de commentaires produits';
        $this->tab = 'front_office_features';
        $this->version = '0.1.0';
        $this->author = 'Lindsay Chognon';
        $this->description = 'Boostez vos ventes grâce à vos avis clients.';

        parent::__construct();

    }

}