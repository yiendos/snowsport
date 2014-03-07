<?php
/**
 * Belgian Police Web Platform - Signatures Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Library;

class SignaturesViewSignatureHtml extends Library\ViewHtml
{
    public function render()
    {
        $article = $this->getModel()->getRow();

        if ($article->id && $article->isAttachable()) {
            $this->attachments($article->getAttachments());
        }
        
        return parent::render();
    }
}