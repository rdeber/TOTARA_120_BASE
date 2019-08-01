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

    <section class="welcome-back-block">
        <?php echo $OUTPUT->blocks('frontpage-one', ''); ?>
        <div>
            <h1>Welcome back Samantha!</h1>
            <h2>Continue this lesson:</h2>
            <a href="/"><img src="https://via.placeholder.com/300x200.jpg?text=This+is+a+previous+lesson" /></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </section>

    <ul class="nav nav-tabs">
        <li role="presentation"><a href="#"><?php echo get_string('pillar-link-one', 'theme_themebase')?></a></li>
        <li role="presentation"><a href="#"><?php echo get_string('pillar-link-two', 'theme_themebase')?></a></li>
        <li role="presentation"><a href="#"><?php echo get_string('pillar-link-three', 'theme_themebase')?></a></li>
        <li role="presentation"><a href="#"><?php echo get_string('pillar-link-four', 'theme_themebase')?></a></li>
    </ul>

    <section class="welcome-block">
        <?php echo $OUTPUT->blocks('frontpage-two', ''); ?>
        <div>
            <h2>Secondary descriptive text here</h2>
            <h1>This is an HTML block</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="/"><img src="https://via.placeholder.com/300x200.jpg?text=This+is+a+single+lesson" /></a>
        </div>
    </section>

    <section class="mom-block">
        <?php echo $OUTPUT->blocks('frontpage-three', ''); ?>
        <div>
            <h2>Featured Collection</h2>
            <h1>Stuff your mom would want you to learn</h1>
            <h3>2 Lessons | 3 Articles</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="lesson-wrap">
                <a href="/">
                    <img src="https://via.placeholder.com/150.jpg" />
                    <h4>Lesson Title</h4>
                </a>
            </div>
            <div class="lesson-wrap">
                <a href="/">
                    <img src="https://via.placeholder.com/150.jpg" />
                    <h4>Lesson Title</h4>
                </a>
            </div>
            <div class="path-wrap">
                <a href="/">
                    <img src="https://via.placeholder.com/75.jpg" />
                    <h5>Grit</h5>
                    <h4>Path Name</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </a>
            </div>
            <div class="video-wrap">
                <a href="/">
                    <img src="https://via.placeholder.com/300x200.jpg" />
                    <h4>Video Title</h4>
                </a>
            </div>
        </div>
    </section>

    <div id="page-content" class=" container-fluid">
        <div class="row">
            <div id="region-main" class="<?php echo $themerenderer->main_content_classes(); ?>">
                <?php echo $themerenderer->course_content_header(); ?>
                <?php echo $themerenderer->main_content(); ?>
                <?php echo $themerenderer->blocks_main(); ?>
                <?php echo $themerenderer->course_content_footer(); ?>
            </div>
            <?php echo $themerenderer->blocks_pre(); ?>
        </div>
    </div>

</div>

<!-- Footer -->
<?php require("{$CFG->dirroot}/theme/roots/layout/partials/footer.php"); ?>

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
