<?php
/**
 * Belgian Police Web Platform - Weblinks Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

namespace Nooku\Component\Weblinks;
use Nooku\Library;

class DatabaseTableWeblinks extends Library\DatabaseTableAbstract
{
    public function  _initialize(Library\ObjectConfig $config)
    {        
        $config->append(array(
            'name'         => 'weblinks',
            'behaviors'    =>  array(
                'sluggable', 'lockable', 'creatable', 'modifiable',
                'com:attachments.database.behavior.attachable',
            ),
          	'filters' => array(
          	    'text'   => array('html', 'tidy')
          	)
        ));
     
        parent::_initialize($config);
     }
}