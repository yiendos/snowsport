<?
/**
 * Belgian Police Web Platform - Signatures Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */
?>

<div class="well">
    <form action="<?=route('option=com_signatures&view=signatures&Itemid=36')?>" method="get">
        <div class="form__right">
            <button type="submit" class="button button--primary" tabindex="2"><?= translate('Search') ?></button>
        </div>
        <div class="form__left">
            <input name="searchword" type="search" value="<?=escape($state->searchword)?>" placeholder="<?=translate('Search')?> ..." tabindex="1"/>
        </div>
    </form>
</div>