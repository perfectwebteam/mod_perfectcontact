<?php
/**
 * @package     mod_perfectcontact
 *
 * @copyright   Copyright (C) 2015 Perfect Web Team, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<ul>
    <?php if ($params->get('show_name', true)) : ?>
        <li><?php echo $item->name; ?></li>
    <?php endif; ?>

    <?php if ($params->get('show_email', true)) : ?>
        <li><?php echo JHtml::_('email.cloak', $item->email_to); ?></li>
    <?php endif; ?>

    <?php if ($params->get('show_phone', true)) : ?>
        <li><?php echo $item->telephone; ?></li>
    <?php endif; ?>

    <?php if ($params->get('show_address', true)) : ?>
        <li><address><?php echo $item->address; ?></address></li>
    <?php endif; ?>

    <?php foreach (range("a", "e") as $char) :
        if ($item->{"link" . $char . "_name"} != '' && $params->get('show_link' . $char, true)) : ?>
            <li>
                <a href="<?php echo $item->{"link" . $char}; ?>"><?php echo $item->{"link" . $char . "_name"}; ?></a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
