<?
/**
* Belgian Police Web Platform - Signatures Component
*
* @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
* @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
* @link		https://github.com/belgianpolice/internet-platform
*/
?>

<ktml:module position="left">
    <?= import('com:categories.view.categories.list.html') ?>
</ktml:module>

<title content="replace"><?= escape(translate($params->get('page_title'))); ?></title>

<h1 class="article__header"><?= escape(translate($params->get('page_title'))); ?></h1>

<? if(!$state->category) : ?>
    <?= import('default_search.html') ?>
<? endif ?>

<? if($state->category OR $state->searchword) : ?>
<ul class="nav nav--pills nav--visited">
<? foreach ($signatures as $signature) : ?>
    <li>
        <a href="<?= helper('route.signature', array('row' => $signature)) ?>">
            <?= $signature->title ?>
        </a>
    </li>
<? endforeach; ?>
</ul>
<? else : ?>
   <ul class="nav nav--pills column--double">
        <? foreach ($categories as $category): ?>
            <li>
                <a href="<?= helper('route.category', array('row' => $category)) ?>">
                    <?= $category->title ?>
                </a>
            </li>
        <? endforeach ?>
    </ul>
<? endif ?>

<? if($state->category OR $state->searchword) : ?>
<?= helper('com:application.paginator.pagination', array('total' => $total, 'show_count' => false, 'show_limit' => false)) ?>
<? endif ?>

<?= import('default_contact.html') ?>
