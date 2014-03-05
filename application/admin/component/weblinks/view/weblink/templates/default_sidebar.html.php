<? if(!$weblink->categories_category_id) : ?>
<script>
    // Set default value for categories radiolist
    $jQuery(document).ready(
        function(){
            $jQuery('fieldset[name=categories_category_id] label:first-of-type input:radio').prop('checked', true);
        }
    );
</script>
<? endif ?>

<fieldset>
    <legend><?= translate('Publish') ?></legend>
    <div>
        <label for="published"><?= translate('Published') ?></label>
        <div>
            <input type="checkbox" name="published" value="1" <?= $weblink->published ? 'checked="checked"' : '' ?> />
        </div>
    </div>
</fieldset>

<fieldset>
    <legend><?= translate('Category') ?></legend>
    <?= helper('com:categories.radiolist.categories', array('row' => $weblink, 'uncategorised' => false)) ?>
</fieldset>

<? if($weblink->isAttachable()) : ?>
<fieldset>
    <legend><?= translate('Attachments') ?></legend>
    <? if (!$weblink->isNew()) : ?>
        <?= import('com:attachments.view.attachments.list.html', array('attachments' => $weblink->getAttachments(), 'attachments_attachment_id' => $weblink->attachments_attachment_id)) ?>
    <? endif ?>
    <?= import('com:attachments.view.attachments.upload.html') ?>
</fieldset>
<? endif ?>