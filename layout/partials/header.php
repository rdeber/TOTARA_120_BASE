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
 * @package   theme_roots
 * @author    Joby Harding <joby.harding@totaralearning.com>
 */

 /**
  * @deprecated since 12.0
  */

defined('MOODLE_INTERNAL') || die();

global $OUTPUT;
?>

    <header id="totara-header-bar" canvas="">
        <div class="container-fluid">

            <div id="logo">
                <a href="<?php echo $CFG->wwwroot;?>">
                    <img src="<?php echo $OUTPUT->image_url('logo-1', 'theme'); ?>" alt="<?php echo get_string('logoalt', 'theme_themebase')?>" />
                </a>
            </div>

            <div id="totara-menu-header">
                <!-- Main navigation -->
                <?php
                $totara_core_renderer = $PAGE->get_renderer('totara_core');
                $hasguestlangmenu = (!isset($PAGE->layout_options['langmenu']) || $PAGE->layout_options['langmenu'] );
                $nocustommenu = !empty($PAGE->layout_options['nocustommenu']);
                echo $totara_core_renderer->masthead($hasguestlangmenu, $nocustommenu);
                ?>
            </div>

            <?php
                // Add profile menu (for logged in) or language menu (not logged in).
                $haslangmenu = (!isset($PAGE->layout_options['langmenu']) || $PAGE->layout_options['langmenu'] );
                echo ($haslangmenu && (!isloggedin() || isguestuser()) ? $OUTPUT->lang_menu() : '') . $OUTPUT->user_menu();
            ?>

            <div id="quick-access-menu">
                <?php echo $totara_core_renderer->quick_access_menu_render(); ?>
            </div>

        </div>
    </header>