<?php

class AdminOrdersController extends AdminOrdersControllerCore {
    public function __construct() {
        parent::__construct();
        $this->_join .= 'LEFT JOIN `'._DB_PREFIX_.'carrier` cr ON (cr.`id_carrier` = a.`id_carrier`)';
        $this->_select .= ', cr.name as carrier';
        $this->fields_list['carrier'] = array(
            'title' => $this->l('Carrier'),
            'align' => 'text-center'
        );
    }
}
