<?php
use MyPhpmig\Police\Migration;

class TemplateChanges extends Migration
{
    public function up()
    {
        $this->_queries = "UPDATE `pages_modules` SET `title` = 'Navigation' WHERE `pages_module_id` = '1';";
        $this->_queries = "UPDATE `snowsportforsheffield`.`pages` SET `snowsportforsheffield`.`pages`.`title` = 'About us' WHERE (`pages_page_id`='30') LIMIT 1;";
        $this->_update  = "UPDATE `snowsportforsheffield`.`pages` SET `snowsportforsheffield`.`pages`.`slug` = 'about-us' WHERE (`pages_page_id`='30') LIMIT 1;";
        $this->_update = "UPDATE `snowsportforsheffield`.`pages` SET `snowsportforsheffield`.`pages`.`title` = 'How you can help' WHERE (`pages_page_id`='31') LIMIT 1;";
        $this->_update = "UPDATE `snowsportforsheffield`.`pages` SET `snowsportforsheffield`.`pages`.`slug` = 'how-you-can-help' WHERE (`pages_page_id`='31') LIMIT 1;";
        $this->_update = "UPDATE `snowsportforsheffield`.`pages` SET `snowsportforsheffield`.`pages`.`title` = 'Our sponsors' WHERE (`pages_page_id`='37') LIMIT 1;";
        $this->_update = "UPDATE `snowsportforsheffield`.`pages` SET `snowsportforsheffield`.`pages`.`slug` = 'our-sponsors' WHERE (`pages_page_id`='37') LIMIT 1;";
        $this->_update = "UPDATE `snowsportforsheffield`.`pages` SET `snowsportforsheffield`.`pages`.`title` = 'Media' WHERE (`pages_page_id`='38') LIMIT 1;";
        $this->_update = "UPDATE `snowsportforsheffield`.`pages` SET `snowsportforsheffield`.`pages`.`slug` = 'media' WHERE (`pages_page_id`='38') LIMIT 1;";
        $this->_update = "UPDATE `snowsportforsheffield`.`pages` SET `snowsportforsheffield`.`pages`.`title` = 'Contact us' WHERE (`pages_page_id`='41') LIMIT 1;";


        parent::up();
    }

    public function down()
    {
        $this->_queries = "UPDATE `pages_modules` SET `title` = 'Main Menu' WHERE `pages_module_id` = '1';";
        parent::down();
    }
}