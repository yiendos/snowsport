<?php
/**
 * Belgian Police Web Platform - Weblinks Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Component\Weblinks;
use Nooku\Library;

class WeblinksDatabaseTableWeblinks extends Weblinks\DatabaseTableWeblinks
{
    public function  _initialize(Library\ObjectConfig $config)
    {
        $config->append(array(
            'name'         => 'weblinks'
        ));

        parent::_initialize($config);
    }
}