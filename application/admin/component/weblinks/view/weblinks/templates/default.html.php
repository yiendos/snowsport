<?
/**
 * Belgian Police Web Platform - Weblinks Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */
?>

<!--
<script src="assets://js/koowa.js" />
<style src="assets://css/koowa.css" />
-->

<?= helper('behavior.sortable') ?>

<ktml:module position="actionbar">
    <ktml:toolbar type="actionbar">
</ktml:module>

<ktml:module position="sidebar">
    <?= import('default_sidebar.html'); ?>
</ktml:module>

<form action="" method="get" class="-koowa-grid">
	<?= import('default_scopebar.html'); ?>
	<table>
	<thead>
		<tr>
            <? if($sortable) : ?>
                <th class="handle"></th>
            <? endif ?>
            <th width="10">
				<?= helper( 'grid.checkall'); ?>
			</th>
            <th width="1"></th>
			<th>
				<?= helper('grid.sort', array('column' => 'title')) ?>
			</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="7">
				<?= helper('com:application.paginator.pagination', array('total' => $total)) ?>
			</td>
		</tr>
	</tfoot>
	<tbody<?= $sortable ? ' class="sortable"' : '' ?>>
		<? foreach ($weblinks as $weblink) : ?>
		<tr>
            <? if($sortable) : ?>
                <td class="handle">
                    <span class="text-small data-order"><?= $weblink->ordering ?></span>
                </td>
            <? endif ?>
            <td align="center">
				<?= helper('grid.checkbox', array('row' => $weblink))?>
			</td>
            <td align="center">
                <?= helper('grid.enable', array('row' => $weblink, 'field' => 'published')) ?>
            </td>
            <td class="ellipsis">
				<a href="<?= route( 'view=weblink&task=edit&id='.$weblink->id ); ?>">
					<?= $weblink->title ?>
				</a>
			</td>
		</tr>
		<? endforeach; ?>
	</tbody>
	</table>
</form>