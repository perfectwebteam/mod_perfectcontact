<?php
/**
 * @package     mod_perfectcontact
 *
 * @copyright   Copyright (C) 2015 Perfect Web Team, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include helper file
require_once __DIR__ . '/helper.php';

// Get contact information
$contactid = $params->get('contactid');
$item      = ModPerfectContactHelper::getContactDetails($contactid);

// Set additional parameters
ModPerfectContactHelper::addContactDetails($item);

// Include layout file
require JModuleHelper::getLayoutPath('mod_perfectcontact', $params->get('layout', 'default'));
