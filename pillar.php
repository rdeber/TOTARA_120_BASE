<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Custom Pillar Page.
 *
 * @package    core
 * @subpackage auth
 * @copyright  1999 onwards Martin Dougiamas  http://dougiamas.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../config.php');
$context = context_system::instance();
$PAGE->set_url("$CFG->httpswwwroot/pillar/index.php");
$PAGE->set_context($context);
//$PAGE->set_pagelayout('dashboard');
echo $OUTPUT->header();

?>

    <!-- Data point block -->
    <section class="data-block">
        <div class="container-fluid">
            <div>
                <h5>Your Path</h5>
                <h4>15 Lessons Completed</h4>
            </div>
            <a href="/totara/dashboard/index.php">Dashboard <i class="fa fa-arrow-right"></i></a>
        </div>
    </section>

    <!-- Pillar Block Region 1 -->
    <section class="pillar-block-one">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1>Grit</h1>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                    <a href="/" class="btn btn-primary">Learn More <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="col-md-6">
                    <a class="panel panel-default" href="https://www.google.com">
                        <div class="panel-body">
                            <img src="https://via.placeholder.com/500x300.jpg" />
                        </div>
                        <div class="panel-footer">
                            Lesson Title
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <?php echo $OUTPUT->blocks('pillar-block-one', ''); ?>

    </section>

    <!-- Pillar Block Region 2 -->
    <section class="pillar-block-two">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h1>More Grit</h1>
                    <!-- AddToAny BEGIN -->
                    <a class="a2a_dd" href="https://www.addtoany.com/share">Share</a>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                    <!-- AddToAny END -->
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                    <a href="/" class="btn btn-primary">Learn More <i class="fa fa-arrow-right"></i></a>
                </div>
                <div class="col-md-6">
                    <a class="panel panel-default" href="/">
                        <div class="panel-body">
                            <img src="https://via.placeholder.com/500x300.jpg" />
                        </div>
                        <div class="panel-footer">
                            Component Title
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <?php echo $OUTPUT->blocks('pillar-block-one', ''); ?>

    </section>

    <!-- Pillar Paths Block -->
    <section class="pillar-paths">
        <div class="container-fluid">
            <h1>Popular Grit Paths</h1>
            <div class="panel-group">
                <a class="panel panel-default" href="/">
                    <div class="panel-body">
                        <img src="https://via.placeholder.com/500x300.jpg" />
                    </div>
                    <div class="panel-footer">
                        <h3 class="list-group-item-heading">Path Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </a>
                <a class="panel panel-default" href="/">
                    <div class="panel-body">
                        <img src="https://via.placeholder.com/500x300.jpg" />
                    </div>
                    <div class="panel-footer">
                        <h3 class="list-group-item-heading">Path Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </a>
                <a class="panel panel-default" href="/">
                    <div class="panel-body">
                        <img src="https://via.placeholder.com/500x300.jpg" />
                    </div>
                    <div class="panel-footer">
                        <h3 class="list-group-item-heading">Path Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </a>
                <a class="panel panel-default" href="/">
                    <div class="panel-body">
                        <img src="https://via.placeholder.com/500x300.jpg" />
                    </div>
                    <div class="panel-footer">
                        <h3 class="list-group-item-heading">Path Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </a>
                <a class="panel panel-default" href="/">
                    <div class="panel-body">
                        <img src="https://via.placeholder.com/500x300.jpg" />
                    </div>
                    <div class="panel-footer">
                        <h3 class="list-group-item-heading">Path Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <!-- Pillar Lessons Block -->
    <section class="pillar-lessons">
        <div class="container-fluid">
            <h1>Popular Grit Lessons</h1>
            <div class="panel-group">
                <a class="panel panel-default" href="/">
                    <div class="panel-body">
                        <img src="https://via.placeholder.com/500x300.jpg" />
                    </div>
                    <div class="panel-footer">
                        <h3 class="list-group-item-heading">Lesson Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </a>
                <a class="panel panel-default" href="/">
                    <div class="panel-body">
                        <img src="https://via.placeholder.com/500x300.jpg" />
                    </div>
                    <div class="panel-footer">
                        <h3 class="list-group-item-heading">Lesson Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </a>
                <a class="panel panel-default" href="/">
                    <div class="panel-body">
                        <img src="https://via.placeholder.com/500x300.jpg" />
                    </div>
                    <div class="panel-footer">
                        <h3 class="list-group-item-heading">Lesson Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </a>
                <a class="panel panel-default" href="/">
                    <div class="panel-body">
                        <img src="https://via.placeholder.com/500x300.jpg" />
                    </div>
                    <div class="panel-footer">
                        <h3 class="list-group-item-heading">Lesson Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>






