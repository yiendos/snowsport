<?
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2011 - 2013 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		git://git.assembla.com/nooku-framework.git for the canonical source repository
 */
?>

<!DOCTYPE HTML>
<html lang="<?= $language; ?>" dir="<?= $direction; ?>">
<?= import('page_head.html') ?>

<body>
<header class="container">
    <div class="navbar">
        <nav class="navbar-inner">
            <div class="hidden-desktop hidden-tablet">
                <a class="brand" href="/"><?= escape(object('application')->getCfg('sitename')) ?></a>
            </div>
            <div class="hidden-phone">
                <a class="brand" href="/"><?= escape(object('application')->getCfg('strap_line' )) ?></a>
            </div>
            <div class="hidden-phone">
                <ktml:modules position="user4">
            </div>
            <div class="hidden-desktop hidden-tablet">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-th-list"></span></a>
                <div class="nav-collapse collapse">
                    <ktml:modules position="left" chrome="wrapped">
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="container">
    <div class="row-fluid hidden-phone">
        <aside class="sidebar span3">
            <div class="well" style="padding: 8px 0;">
                <ktml:modules position="left" chrome="wrapped">
            </div>
        </aside>
        <div class="span9 header-banner"></div>
    </div>
    <div class="row-fluid">
        <aside class="sidebar">
            <div class="span3 hidden-phone">
                <ktml:modules position="user3">
            </div>
        </aside>
        <div class="span9">
                <?= import('page_message.html') ?>
                <section>
                    <ktml:content>
                </section>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="footer hidden-phone">
            <div class="span4 snow-logo"></div>
            <div class="span3 nav1">
                <ktml:modules position="left">
            </div>
            <div class="span2 nav2">
                <ktml:modules position="left">
            </div>
            <div class="span3">
                <div class="span1 facebook"></div>
                <div class="span1 twitter"></div>
            </div>
            <div class="span3">
                <div class="span12 email-address">
                    <a href="mailto:snowsportforsheffield@gmail.com">snowsportforsheffield@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</div>

<? if(object('application')->getCfg('debug')) : ?>
    <?= object('com:debug.controller.debug')->render(); ?>
<? endif; ?>
<script src="/theme/bootstrap/js/jquery.js"></script>
<script src="/theme/bootstrap/js/bootstrap.js"></script>
<style src="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" />
</body>
</html>