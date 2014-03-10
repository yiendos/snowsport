<div class="modSignatures">
    <i class="icon-4x icon-quote-left"></i>
    <div class="well quote">
       <div class="row">
            <div style="margin-left: 30px;">
            <?= $signature['comment'] ?>
            </div>
       </div>
        <div class="row person">
            <div class="span6" style="margin-left: 30px;">
                <?= $signature['name'] ?>
            </div>
            <div class="span4 pull-right">
                <?= helper('com:articles.date.format', array('date' => $signature['date'], 'format' => translate('DATE_FORMAT_LC3'))); ?>
            </div>
        </div>
    </div>
    <? //@todo make configurable link to the ipetition ?>
    <i class="icon-quote-right icon-4x pull-right"></i>
    <a href="<?= escape(object('application')->getCfg('petition_link')) ?>" class="petition" target="_blank"><?= translate('Add your voice to our petition') ?><br/>
    <?//= translate('total signatures: '). $total_signatures; ?></a>
</div>
