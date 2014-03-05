<?php
/**
 * Belgian Police Web Platform - Weblinks Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Library;

class WeblinksViewHtml extends Library\ViewHtml
{
    public function render()
    {
        $this->categories = $this->getObject('com:weblinks.model.categories')->table('weblinks')->published(true)->sort('title')->getRowset();

        return parent::render();
    }
}