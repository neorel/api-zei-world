<?php

if(!defined('_PS_VERSION_')) exit;

class Order extends OrderCore {

    /** @var int ZEI token */
    public $zei_token = null;

    public function __construct($id = null, $id_lang = null) {
        self::$definition['fields']['zei_token'] = array('type' => self::TYPE_STRING, 'validate' => 'isMessage');
        parent::__construct($id, $id_lang);
    }

}