<?
/**
 * Belgian Police Web Platform - Weblinks Component
 *
 * @copyright	Copyright (C) 2012 - 2013 Timble CVBA. (http://www.timble.net)
 * @license		GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link		https://github.com/belgianpolice/internet-platform
 */
?>

<? $email = str_replace("@", "&#64;", $zone->email) ?>
<? $email = str_replace(".", "&#46;", $email) ?>

<? $phone = $zone->phone_information ? $zone->phone_information : $zone->phone_emergency ?>

