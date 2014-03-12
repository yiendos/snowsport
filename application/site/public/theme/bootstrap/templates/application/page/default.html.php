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
                <?//@todo make into module ?>
                <div style="display:block; clear:both; text-align: left; background: #000 url('http://cdn.ipetitions.com/rev/2716/assets/images/widgets/blue.png') no-repeat top left; width: 100%">
                    <iframe src="//www.ipetitions.com/widget/view/blue/635586" scrolling="no" marginheight="0" marginwidth="0" style="width: 200px; height:145px; border:0;"></iframe>
                    <div style="text-align:left; font-family:Arial;font-size: 10px; width: 100%; margin-top: -5px; padding: 5px 5px 4px 15px; color: #1697c7;">
                        <a style="color: #fff; text-decoration:none;" href="http://www.ipetitions.com/" target="_blank">Petition by iPetitions</a>
                    </div>
                </div>
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
    <div class="footer hidden-phone">
        <div class="span2">
            <a href="http://timble.net" target="_blank">
                <?= translate('Site powered by: ') ?>
                <img src="/theme/bootstrap/images/logo.png" />
            </a>
        </div>
        <div class="span3 facebook">
            <a href="https://www.facebook.com/snowsportforsheffield" target="_blank">
                <img src="theme/bootstrap/images/facebook-white.png" />
                Follow us on facebook
            </a>
        </div>
        <div class="span3 twitter">
            <a href="https://twitter.com/Snowsportsheff" target="_blank">
                <img src="theme/bootstrap/images/twitter-white.png" />
                Tweet with us
            </a>
        </div>
        <div class="span3 gmail">
            <a href="mailto:snowsportforsheffield@gmail.com">
                <img src="theme/bootstrap/images/gmail.png"/>
                Email us
            </a>
        </div>
    </div>
</div>

<? if(object('application')->getCfg('debug')) : ?>
    <?= object('com:debug.controller.debug')->render(); ?>
<? endif; ?>
<script src="/theme/bootstrap/js/jquery.js"></script>
<script src="/theme/bootstrap/js/bootstrap.js"></script>
<?//@todo remove cdn and deliver locally ?>
<style src="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" />
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48921009-1', 'snowsportforsheffield.co.uk');
    ga('send', 'pageview');

</script>
</body>
</html>