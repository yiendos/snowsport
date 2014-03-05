<?php
/**
 * Belgian Police Web Platform - Weblinks Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Library;

class WeblinksTemplateHelperRoute extends PagesTemplateHelperRoute
{
    public function weblink($config = array())
    {
        $config   = new Library\ObjectConfig($config);
        $config->append(array(
            'layout'   => null,
            'category' => null
        ));

        $weblink = $config->row;

        $category = $this->getObject('com:categories.model.category')->id($weblink->categories_category_id)->getRow();

        $route = array(
            'view'     => 'weblink',
            'id'       => $weblink->getSlug(),
            'layout'   => $config->layout,
            'category' => $category->getSlug()
        );

        return $this->getTemplate()->getView()->getRoute($route);
    }

    public function category($config = array())
    {
        $config   = new Library\ObjectConfig($config);
        $config->append(array(
            'layout' => null
        ));

        $category = $config->row;

        $route = array(
            'view'          => 'weblinks',
            'category'      => $category->getSlug(),
            'layout'        => $config->layout,
            'searchword'    => null
        );

        return $this->getTemplate()->getView()->getRoute($route);
    }
}