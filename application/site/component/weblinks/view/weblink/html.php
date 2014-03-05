<?php
/**
 * Belgian Police Web Platform - Weblinks Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Library;

class WeblinksViewWeblinkHtml extends WeblinksViewHtml
{
    public function render()
    {
        //Get the article
        $weblink = $this->getModel()->getData();

        $category = $this->getCategory();

        //Set the pathway
        $this->getObject('application')->getPathway()->addItem($category->title, $this->getTemplate()->getHelper('route')->category(array('row' => $category)));
        $this->getObject('application')->getPathway()->addItem($weblink->title, '');

        // Get the zone
        $this->zone = $this->getObject('com:police.model.zone')->id($this->getObject('application')->getCfg('site' ))->getRow();

        //Get the attachments
        if ($weblink->id && $weblink->isAttachable()) {
            $this->attachments($weblink->getAttachments());
        }

        return parent::render();
    }

    public function getCategory()
    {
        //Get the category
        $category = $this->getObject('com:weblinks.model.categories')
            ->table('weblinks')
            ->slug($this->getModel()->getState()->category)
            ->getRow();

        return $category;
    }
}