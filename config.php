<?php
/*
 * This file is part of Totara LMS
 *
 * Copyright (C) 2016 onwards Totara Learning Solutions LTD
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright 2016 onwards Totara Learning Solutions LTD
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Joby Harding <joby.harding@totaralearning.com>
 * @package   theme_themebase
 */

defined('MOODLE_INTERNAL' || die());

$THEME->doctype = 'html5';
$THEME->name = 'themebase';
$THEME->parents = array('roots', 'base');
$THEME->yuicssmodules = array();
$THEME->enable_dock = false;
$THEME->enable_hide = true;
$THEME->sheets = array('totara');

$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_themebase_process_css';

// Use CSS preprocessing to facilitate style inheritance.
$THEME->parents_exclude_sheets = array(
    'roots' => array('totara', 'totara-rtl'),
    'base' => array('flexible-icons'),
);

// Register our favicon resolver.
$THEME->resolvefaviconcallback = 'theme_themebase_resolve_favicon';


$THEME->layouts = array(
    'pillar' => array(
        'file' => 'pillar.php',
        'regions' => array('top', 'bottom', 'side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // Most backwards compatible layout with blocks on the left - this is the layout used by default in Totara,
    // it is also the fallback when page layout is set too late when initialising page.
    // Standard Moodle themes have base layout without blocks.
    'base' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // Standard layout with blocks, this is recommended for most pages with general information.
    'standard' => array(
        'file' => 'default.php',
        'regions' => array('top', 'bottom', 'side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // Main course page.
    'course' => array(
        'file' => 'default.php',
        'regions' => array('top', 'bottom', 'side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => true),
    ),
    'coursecategory' => array(
        'file' => 'default.php',
        'regions' => array('top', 'bottom', 'side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // Part of course, typical for modules - default page layout if $cm specified in require_login().
    'incourse' => array(
        'file' => 'default.php',
        'regions' => array('top', 'bottom', 'side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // The site home page.
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array('datapoint-block', 'welcome-block', 'public-block', 'mom-block', 'admin-block'),
        'defaultregion' => 'admin-block',
    ),
    // Server administration scripts.
    'admin' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('fluid' => true),
    ),
    // This would be better described as "user profile" but we've left it as mydashboard
    // for backward compatibilty for existing themes. This layout is NOT used by Totara
    // dashboards but is used by user related pages such as the user profile, private files
    // and badges.
    'mydashboard' => array(
        'file' => 'default.php',
        'regions' => array('top', 'bottom', 'side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    // The dashboard layout differs from the one above in that it includes a central block region.
    // It is used by Totara dashboards.
    'dashboard' => array(
        'file' => 'dashboard.php',
        'regions' => array('datapoint-block', 'top', 'bottom', 'main', 'side-pre', 'side-post'),
        'defaultregion' => 'main',
        'options' => array('langmenu' => true),
    ),
    // My public page.
    'mypublic' => array(
        'file' => 'default.php',
        'regions' => array('top', 'bottom', 'side-pre', 'side-post'),
        'defaultregion' => 'side-pre',
    ),
    'login' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('langmenu' => true, 'nototaramenu' => true, 'nonavbar' => true),
    ),

    // Pages that appear in pop-up windows - no navigation, no blocks, no header.
    'popup' => array(
        'file' => 'popup.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nonavbar' => true),
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nocoursefooter' => true),
    ),
    // Embeded pages, like iframe/object embeded in moodleform - it needs as much space as possible.
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array()
    ),
    // Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, links, or API calls that would lead to database or cache interaction.
    // Please be extremely careful if you are modifying this layout.
    'maintenance' => array(
        'file' => 'maintenance.php',
        'regions' => array(),
    ),
    // Should display the content and basic headers only.
    'print' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nonavbar' => false),
    ),
    // The pagelayout used when a redirection is occuring.
    'redirect' => array(
        'file' => 'embedded.php',
        'regions' => array(),
    ),
    // The pagelayout used for reports.
    'report' => array(
        'file' => 'default.php',
        'regions' => array('top', 'bottom', 'side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // The pagelayout used for safebrowser and securewindow.
    'secure' => array(
        'file' => 'secure.php',
        'regions' => array('top', 'bottom', 'side-pre', 'side-post'),
        'defaultregion' => 'side-pre'
    ),
    'noblocks' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('noblocks' => true, 'langmenu' => true),
    ),
);

$THEME->javascripts_footer = array(
    'custom'
);
