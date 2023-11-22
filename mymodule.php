<?php

class Mymodule extends Module
{
    public function __construct() {

        $this->name = 'mymodule';
        $this->author = 'Lindsay Chognon';
        $this->tab = 'fornt_office_features'
        $this->version = '1.0.0';
        $this->need_instance = 0;

        $this->ps_versions_compliancy = [
            'min' => '1.7.0.0',
            'max' => _PS_VERSION_,
        ];

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = "Commentaires";
        $this->description = "Boostez vos ventes grâce aux commentaires produits !";

        //$this->templateFile = 'module:mymodule/views/templates/hook/mymodule.tpl';

    }

}
