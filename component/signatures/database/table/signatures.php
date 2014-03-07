<?php
/**
 * Belgian Police Web Platform - Signatures Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

namespace Nooku\Component\Signatures;
use Nooku\Library;

class DatabaseTableSignatures extends Library\DatabaseTableAbstract
{
    public function  _initialize(Library\ObjectConfig $config)
    {        
        $config->append(array(
            'name'         => 'signatures',
            'behaviors'    =>  array(
                'com:attachments.database.behavior.attachable',
            ),
          	'filters' => array(
          	    'text'   => array('html', 'tidy')
          	)
        ));
     
        parent::_initialize($config);
     }
}