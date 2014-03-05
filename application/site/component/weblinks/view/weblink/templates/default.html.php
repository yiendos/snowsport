<?
/**
 * Belgian Police Web Platform - Weblinks Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */
?>

<ktml:module position="left">
    <?= import('com:categories.view.categories.list.html') ?>
</ktml:module>

<title content="replace"><?= $weblink->title ?></title>

<article class="article">
    <h1 class="article__header"><?= escape($weblink->title); ?></h1>

    <?= helper('com:attachments.image.thumbnail', array(
        'attachment' => $weblink->attachments_attachment_id,
        'attribs' => array('width' => '200', 'height' => '150', 'class' => 'article__thumbnail'))) ?>

    <?= $weblink->text ?>
</article>

<?= import('com:weblinks.view.weblinks.default_contact.html') ?>
