<?php
/**
 * Belgian Police Web Platform - Signatures Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */

use Nooku\Library;

class SignaturesTemplateHelperRoute extends PagesTemplateHelperRoute
{
    public function signature($config = array())
    {
        $config   = new Library\ObjectConfig($config);
        $config->append(array(
            'layout'   => null,
            'category' => null
        ));

        $signature = $config->row;

        $category = $this->getObject('com:categories.model.category')->id($signature->categories_category_id)->getRow();

        $route = array(
            'view'     => 'signature',
            'id'       => $signature->getSlug(),
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
            'view'          => 'signatures',
            'category'      => $category->getSlug(),
            'layout'        => $config->layout,
            'searchword'    => null
        );

        return $this->getTemplate()->getView()->getRoute($route);
    }
}