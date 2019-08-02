<?php
// This file is part of The Bootstrap Moodle theme
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
 * @package     theme_themebase
 * @copyright   2014 Bas Brands, www.basbrands.nl
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author      Bas Brands
 * @author      David Scotson
 * @author      Joby Harding <joby.harding@totaralearning.com>
 * @author      Petr Skoda <petr.skoda@totaralms.com>
 *
 * @var core_renderer $OUTPUT
 */

defined('MOODLE_INTERNAL') || die();

$PAGE->set_popup_notification_allowed(false);

$themerenderer = $PAGE->get_renderer('theme_roots');

$full_header = $themerenderer->full_header();
if (isset($PAGE->layout_options['nonavbar']) && $PAGE->layout_options['nonavbar'] && strpos($full_header, '<input') === false) {
    $full_header = '';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<!-- Main navigation -->
<?php require("{$CFG->dirroot}/theme/themebase/layout/partials/header.php"); ?>

<!-- Content -->
<div id="page">

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

    <!-- Welcome back block (only visible when logged in) -->
    <section class="welcome-block">

        <div class="container-fluid">
            <h1>Welcome back Samantha!</h1>
            <h2>Continue this path:</h2>
            <div class="row">
                <div class="col-md-6">
                    <a href="/"><img src="https://via.placeholder.com/500x300.jpg?text=This+is+your+previous+lesson" /></a>
                </div>
                <div class="col-md-6">
                    <h3>Path/Lesson Title Here</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="/" class="btn btn-primary">View Path <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <?php echo $OUTPUT->blocks('welcome-block', ''); ?>

    </section>

    <!-- Navigation to pillar pages -->
    <nav class="pillar-nav">
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li role="presentation">
                    <a href="<?php echo get_string('pillar-link-one-url', 'theme_themebase')?>">
                        <?php echo get_string('pillar-link-one-text', 'theme_themebase')?>
                    </a>
                </li>
                <li role="presentation">
                    <a href="<?php echo get_string('pillar-link-two-url', 'theme_themebase')?>">
                        <?php echo get_string('pillar-link-two-text', 'theme_themebase')?>
                    </a>
                </li>
                <li role="presentation">
                    <a href="<?php echo get_string('pillar-link-three-url', 'theme_themebase')?>">
                        <?php echo get_string('pillar-link-three-text', 'theme_themebase')?>
                    </a>
                </li>
                <li role="presentation">
                    <a href="<?php echo get_string('pillar-link-four-url', 'theme_themebase')?>">
                        <?php echo get_string('pillar-link-four-text', 'theme_themebase')?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Public welcome block -->
    <section class="public-block">

        <div class="public-message">
            <div class="container-fluid">
                <h1>Start Your Education</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</h2>
                <a href="/"><img src="https://via.placeholder.com/500x300.jpg?text=This+is+a+featured+lesson" /></a>
            </div>
        </div>

        <?php echo $OUTPUT->blocks('public-block', ''); ?>

    </section>

    <!-- Things your mom likes block -->
    <section class="mom-block">

        <div class="container-fluid">
            <h2>Featured Collection</h2>
            <h1>Stuff your mom would want you to learn</h1>
            <h3>2 Lessons | 3 Articles</h3>

            <div class="row">
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="lesson-wrap">
                                <a href="/">
                                    <img src="https://via.placeholder.com/150.jpg" />
                                    <h4>Lesson Title</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="lesson-wrap">
                                <a href="/">
                                    <img src="https://via.placeholder.com/150.jpg" />
                                    <h4>Lesson Title</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="media">
                    <div class="media-left">
                        <a href="/">
                            <img class="media-object" src="https://via.placeholder.com/75.jpg" alt="test">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Lesson Title</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>

            <div class="row video-wrap">
                <a href="/">
                    <img src="https://via.placeholder.com/500x300.jpg" />
                    <h4>Video Title</h4>
                </a>
            </div>

        </div>

        <?php echo $OUTPUT->blocks('mom-block', ''); ?>

    </section>

    <!-- Popular lessons block -->
    <section class="popular-block">
        <div class="container-fluid">
            <h1>Popular Lessons</h1>
            <div class="list-group">
                <a href="/" class="list-group-item">
                    <img src="https://via.placeholder.com/80x60" />
                    <div>
                        <h3 class="list-group-item-heading">Lesson Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>    
                </a>
                <a href="/" class="list-group-item">
                    <img src="https://via.placeholder.com/80x60" />
                    <div>
                        <h3 class="list-group-item-heading">Lesson Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>    
                </a>
                <a href="/" class="list-group-item">
                    <img src="https://via.placeholder.com/80x60" />
                    <div>
                        <h3 class="list-group-item-heading">Lesson Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>    
                </a>
            </div>
        </div>
    </section>

    <!-- Upcoming events block -->
    <section class="events-block">
        <div class="container-fluid">
            <h1>Upcoming Events</h1>
            <div class="list-group">
                <a href="/" class="list-group-item">
                    <i class="fa fa-calendar"></i>
                    <div>
                        <h3 class="list-group-item-heading">Event Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>    
                </a>
                <a href="/" class="list-group-item">
                    <i class="fa fa-calendar"></i>
                    <div>
                        <h3 class="list-group-item-heading">Event Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>    
                </a>
                <a href="/" class="list-group-item">
                    <i class="fa fa-calendar"></i>
                    <div>
                        <h3 class="list-group-item-heading">Event Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>    
                </a>
                <a href="/" class="list-group-item">
                    <i class="fa fa-calendar"></i>
                    <div>
                        <h3 class="list-group-item-heading">Event Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>    
                </a>
                <a href="/" class="list-group-item">
                    <i class="fa fa-calendar"></i>
                    <div>
                        <h3 class="list-group-item-heading">Event Title</h3>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>    
                </a>
            </div>
        </div>
    </section>

    <!-- Standard page content -->
    <div id="page-content" class=" container-fluid">
        <div class="row">
            <div id="region-main" class="<?php echo $themerenderer->main_content_classes(); ?>">
                <?php echo $OUTPUT->blocks('admin-block', ''); ?>
                <?php echo $themerenderer->course_content_header(); ?>
                <?php echo $themerenderer->main_content(); ?>
                <?php echo $themerenderer->blocks_main(); ?>
                <?php echo $themerenderer->course_content_footer(); ?>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<?php require("{$CFG->dirroot}/theme/roots/layout/partials/footer.php"); ?>

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
