<?
/**
 * Belgian Police Web Platform - Weblinks Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */
?>

<?= helper('behavior.validator'); ?>

<!--
<script src="assets://js/koowa.js" />
-->

<ktml:module position="actionbar">
    <ktml:toolbar type="actionbar">
</ktml:module>

<form action="" method="post" class="-koowa-form" enctype="multipart/form-data">
	<input type="hidden" name="published" value="0" />
	
	<div class="main">
		<div class="title">
			<input class="required" type="text" name="title" maxlength="255" value="<?= $weblink->title ?>" placeholder="<?= translate('Title') ?>" />
			<div class="slug">
			    <span class="add-on">Slug</span>
			    <input type="text" name="slug" maxlength="255" value="<?= $weblink->slug ?>" />
			</div>
            <div class="slug">
                <span class="add-on">URL</span>
                <input type="text" name="weblink_text" maxlength="255" value="<?= $weblink->weblink_text ?>" />
            </div>
		</div>
		
		<?= object('com:ckeditor.controller.editor')->render(array('name' => 'text', 'text' => $weblink->text, 'attribs' => array('class' => 'ckeditor'))) ?>
	</div>
	<div class="sidebar">
	    <?= import('default_sidebar.html') ?>
    </div>
</form>