<?
/**
 * Belgian Police Web Platform - Signatures Component
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

<form action="" method="get" class="-koowa-grid">
    <?= import('default_scopebar.html'); ?>
	<table style="font-size: 18px;">
	<thead>
		<tr>
            <th width="10">
				<?= helper( 'grid.checkall'); ?>
			</th>
            <th width="1"></th>
			<th width="10">
				<?= helper('grid.sort', array('column' => 'name')) ?>
			</th>
            <th>
                <?= helper('grid.sort', array('column' => 'date')) ?>
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
	<tbody
		<? foreach ($signatures as $signature) : ?>
		<tr>
            <td align="center">
				<?= helper('grid.checkbox', array('row' => $signature))?>
			</td>
            <td align="center">
                <?= helper('grid.enable', array('row' => $signature, 'field' => 'published')) ?>
            </td>
            <td class="">
				<a href="<?= route( 'view=signature&task=edit&id='.$signature->id ); ?>">
					<?= $signature->name ?>
				</a>
			</td>
            <td>
                <?= $signature->date ?>
            </td>
		</tr>
        <tr>
            <td class="ellipsis" colspan="4">
                <p class="lead"><?= $signature->comment ?></p>
            </td>
        </tr>
		<? endforeach; ?>
	</tbody>
	</table>
</form>