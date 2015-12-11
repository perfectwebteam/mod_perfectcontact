<?php
/**
 * @package     mod_perfectcontact
 *
 * @copyright   Copyright (C) 2015 Perfect Web Team, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class ModPerfectContactHelper
{
    public static function getContactDetails($contactid)
    {
        // Get connection.
        $db    = JFactory::getDbo();
        $query = $db->getQuery(true);

        // Make query
        $query->select("*");
        $query->from("#__contact_details");
        $query->where("id = '" . $contactid . "'");

        // Set query
        $db->setQuery($query);

        return $db->loadObject();
    }

    public static function addContactDetails($item)
    {
        // Get component parameters
        $links = json_decode($item->params, true);

        // Add link parameters to $item attribute
        foreach (range("a", "e") as $char)
        {
            if ($links["link" . $char] != '')
            {
                $item->{"link" . $char} = $links["link" . $char];
            }
            else
            {
                $item->{"link" . $char} = "";
            }

            if ($links["link" . $char . "_name"] != '')
            {
                $item->{"link" . $char . "_name"} = $links["link" . $char . "_name"];
            }
            else
            {
                $item->{"link" . $char . "_name"} = "";
            }
        }
    }
}
