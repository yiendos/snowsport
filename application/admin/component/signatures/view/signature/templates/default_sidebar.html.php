<? if(!$signature->categories_category_id) : ?>
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
            <input type="checkbox" name="published" value="1" <?= $signature->published ? 'checked="checked"' : '' ?> />
        </div>
    </div>
</fieldset>

<fieldset>
    <legend><?= translate('Category') ?></legend>
    <?= helper('com:categories.radiolist.categories', array('row' => $signature, 'uncategorised' => false)) ?>
</fieldset>

<? if($signature->isAttachable()) : ?>
<fieldset>
    <legend><?= translate('Attachments') ?></legend>
    <? if (!$signature->isNew()) : ?>
        <?= import('com:attachments.view.attachments.list.html', array('attachments' => $signature->getAttachments(), 'attachments_attachment_id' => $signature->attachments_attachment_id)) ?>
    <? endif ?>
    <?= import('com:attachments.view.attachments.upload.html') ?>
</fieldset>
<? endif ?>