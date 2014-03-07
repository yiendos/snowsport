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
 * Menu Module Html View
 *
 * @author  Gergo Erdosi <http://nooku.assembla.com/profile/gergoerdosi>
 * @package Component\Pages
 */
class PagesModuleSignaturesHtml extends PagesModuleDefaultHtml
{
    public function render()
    {
        //Get the category
        $signature = $this->getObject('com:signatures.model.signatures')
            ->empty(1)
            ->random(1)
            ->published(1)
            ->getRowSet();

        $random = array_shift($signature->toArray());

        $this->signature = $random;

        $this->show_title = true;

        return parent::render();
    }
}