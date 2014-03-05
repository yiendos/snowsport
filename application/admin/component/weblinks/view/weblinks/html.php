<?php
/**
 * @package     Nooku_Server
 * @subpackage  Articles
 * @copyright	Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		http://www.nooku.org
 */

use Nooku\Library;

class WeblinksViewWeblinksHtml extends Library\ViewHtml
{
    public function render()
    {
        $state = $this->getModel()->getState();

        // Enable sortable
        $this->sortable = $state->category && $state->sort == 'ordering' && $state->direction == 'asc';

        return parent::render();
    }
}