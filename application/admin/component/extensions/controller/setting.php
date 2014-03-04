<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2013 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		git://git.assembla.com/nooku-framework.git for the canonical source repository
 */

use Nooku\Library;

/**
 * Setting Controller
 *
 * @author  Johan Janssens <http://nooku.assembla.com/profile/johanjanssens>
 * @package Component\Extensions
 */
class ExtensionsControllerSetting extends Library\ControllerModel
{
    protected function _initialize(Library\ObjectConfig $config)
    {
        $config->append(array(
            'behaviors' => array('editable'),
            'request'   => array('view' => 'settings')
        ));

        parent::_initialize($config);
    }

    protected function _actionRead(Library\CommandContext $context)
    {
        $name = ucfirst($this->getView()->getName());

        if(!$this->getModel()->getState()->isUnique()) {
            throw new Library\ControllerExceptionNotFound($name.' Not Found');
        }

        return parent::_actionRead($context);
    }
}