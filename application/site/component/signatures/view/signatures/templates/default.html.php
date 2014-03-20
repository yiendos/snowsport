<?
/**
* Belgian Police Web Platform - Signatures Component
*
* @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
* @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
* @link		https://github.com/belgianpolice/internet-platform
*/
?>

<title content="replace"><?= escape(translate($params->get('page_title'))); ?></title>

<h1 class="article__header"><?= escape(translate($params->get('page_title'))); ?></h1>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td><?= translate('Name') ?></td>
            <td><?= translate('Comments') ?></td>
        </tr>
    </thead>
    <? foreach($signatures as $signature) : ?>
    <tr>
        <td><?= $signature->name ?></td>
        <td><i class="icon-quote-left"></i>
                <?= $signature->comment ?>
            <i class="icon-quote-right"></i>
        </td>
    </tr>
    <? endforeach ?>
    <tfoot>
        <tr>
            <td colspan="2">
                <?= helper('com:application.paginator.pagination', array('total' => $total, 'show_count' => false, 'show_limit' => false)) ?>
            </td>
        </tr>
    </tfoot>
</table>



