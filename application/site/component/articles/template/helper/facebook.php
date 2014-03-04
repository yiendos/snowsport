<?php
/**
 * Nooku Framework - http://www.nooku.org
 *
 * @copyright	Copyright (C) 2007 - 2013 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		git://git.assembla.com/nooku-framework.git for the canonical source repository
 */

namespace Nooku\Library;

/**
 * Tabs Template Helper
 *
 * @author  Johan Janssens <http://nooku.assembla.com/profile/johanjanssens>
 * @package Nooku\Library\Template
 */
class TemplateHelperFacebook extends TemplateHelperBehavior
{

    public function load($config = array())
    {
        $html = '';

        $facebook_api = $this->getObject('application')->getCfg('facebook_api');

        // Only load once
        if (!isset(self::$_loaded['facebook']))
        {
            $config = new ObjectConfig($config);

            $html = <<<EOL
	        <div id="fb-root"></div>
            <script>
                    window.fbAsyncInit = function() {
                        FB.init({
                        appId      : '$facebook_api',
                        status     : true,
                        xfbml      : true
                    });
                };

                (function(d, s, id){
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {return;}
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_US/all.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=$facebook_api";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
EOL;

            self::$_loaded['facebook'] = true;
        }

        return $html;
    }

    public function comments($config = array())
    {
        $config = new ObjectConfig($config);

        $this->load();

        if(!isset(self::$_loaded['comments']))
        {
            $html = '<div class="fb-comments" data-href="'. $config['url'] .'" data-numposts="5" data-colorscheme="light" data-width="659"></div>';

            self::$_loaded['comments'] = true;
        }

        return $html;
    }
}