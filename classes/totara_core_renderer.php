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
 * @package   theme_basis
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;

require_once("{$CFG->dirroot}/totara/core/renderer.php");

class theme_themebase_totara_core_renderer extends totara_core_renderer {

    /**
     * Render the masthead.
     *
     * @return string the html output
     */

    public function masthead(bool $hasguestlangmenu = true, bool $nocustommenu = false)
    {
        if ($nocustommenu || !empty($this->page->layout_options['nototaramenu']) || !empty($this->page->layout_options['nocustommenu'])) {
            // No totara menu, or the old legacy no custom menu, in which case DO NOT generate the totara menu, its costly.
            $mastheadmenudata = new stdClass;
        } else {
            $menudata = totara_build_menu();
            $mastheadmenu = new totara_core\output\masthead_menu($menudata);
            $mastheadmenudata = $mastheadmenu->export_for_template($this->output);
        }

        $mastheaddata = new stdClass();
        $mastheaddata->masthead_lang = $hasguestlangmenu && (!isloggedin() || isguestuser()) ? $this->output->lang_menu() : '';
        $mastheaddata->masthead_menu = $mastheadmenudata;
        $mastheaddata->masthead_search = $this->output->search_box();
        // Even if we don't have a "navbar" we need this option, due to the poor design of the nonavbar option in the past.
        $mastheaddata->masthead_toggle = $this->output->navbar_button();

        return $this->render_from_template('totara_core/masthead', $mastheaddata);
    }

    /**
     * Render quick access menu
     *
     * @return string the html output
     */
    public function quick_access_menu_render(){
        global $USER;

        if (totara_core\quickaccessmenu\factory::can_current_user_have_quickaccessmenu()) {
            $menuinstance = totara_core\quickaccessmenu\factory::instance($USER->id);

            if (!empty($menuinstance->get_possible_items())) {
                $adminmenu = $menuinstance->get_menu();
                $quickaccessmenu = totara_core\output\quickaccessmenu::create_from_menu($adminmenu);
                return $this->render_from_template('totara_core/quickaccessmenu', $quickaccessmenu->get_template_data());
            }
        }
        return null;
    }

    /**
     * Builds Totara menu, returns an array of objects that
     * represent the structure of the menu
     *
     * The parents must be defined before the children so we
     * can correctly figure out which items should be selected
     *
     * @return array tree of menu item objects
     */
    function totara_build_menu() {
        global $SESSION, $USER, $CFG, $DB;

        $rev = \totara_core\totara\menu\helper::get_cache_revision();
        $lang = current_language();
        if (!empty($CFG->menulifetime) and !empty($SESSION->mymenu['lang']) and isset($SESSION->mymenu['rev'])) {
            if ($SESSION->mymenu['id'] == $USER->id and $SESSION->mymenu['lang'] === $lang and $SESSION->mymenu['rev'] == $rev) {
                if ($SESSION->mymenu['c'] + $CFG->menulifetime > time()) {
                    $tree = $SESSION->mymenu['tree'];
                    foreach ($tree as $k => $node) {
                        $node = clone($node);
                        $node->url = \totara_core\totara\menu\item::replace_url_parameter_placeholders($node->url);
                        $tree[$k] = $node;
                    }
                    return $tree;
                }
            }
        }
        unset($SESSION->mymenu);

        $allnodes = $DB->get_records('totara_navigation', array(), 'parentid ASC, sortorder ASC, id ASC');
        $tree = totara_build_menu_descendants(0, $allnodes);

        if (!empty($CFG->menulifetime)) {
            $SESSION->mymenu = array(
                'id' => $USER->id,
                'lang' => $lang,
                'c' => time(),
                'tree' => $tree,
                'rev' => $rev,
            );
        }

        foreach ($tree as $k => $node) {
            $node = clone($node);
            $node->url = \totara_core\totara\menu\item::replace_url_parameter_placeholders($node->url);
            $tree[$k] = $node;
        }

        return $tree;
    }
}
