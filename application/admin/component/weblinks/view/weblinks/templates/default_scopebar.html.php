<?
/**
 * Belgian Police Web Platform - Weblinks Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */
?>

<div class="scopebar">
    <div class="scopebar__group">
        <a class="<?= is_null($state->search) && is_null($state->published) ? 'active' : ''; ?>" href="<?= route('search=&published=' ) ?>">
            <?= translate('All') ?>
        </a>
    </div>
    <div class="scopebar__group">
    	<a class="<?= $state->published === 1 ? 'active' : ''; ?>" href="<?= route($state->published === 1 ? 'published=' : 'published=1' ) ?>">
    	    <?= 'Published' ?>
    	</a>
    	<a class="<?= $state->published === 0 ? 'active' : ''; ?>" href="<?= route($state->published === 0 ? 'published=' : 'published=0' ) ?>">
    	    <?= 'Unpublished' ?>
    	</a>
    </div>
    <div class="scopebar__search">
        <?= helper('grid.search') ?>
    </div>
</div>