<?php
/**
 * Belgian Police Web Platform - Signatures Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Component\Signatures;
use Nooku\Library;

class SignaturesDatabaseTableSignatures extends Signatures\DatabaseTableSignatures
{
    public function  _initialize(Library\ObjectConfig $config)
    {
        $config->append(array(
            'name'         => 'signatures'
        ));

        parent::_initialize($config);
    }
}