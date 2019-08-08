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
 */

defined('MOODLE_INTERNAL') || die();

$PAGE->set_popup_notification_allowed(false);

$themerenderer = $PAGE->get_renderer('theme_roots');

$full_header = $OUTPUT->full_header();
if (isset($PAGE->layout_options['nonavbar']) && $PAGE->layout_options['nonavbar'] && strpos($full_header, '<input') === false) {
    $full_header = '';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $themerenderer->htmlattributes(); ?>>
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

<!-- Data point section -->
<section class="datapoint-section">
    <div class="datapoint-number">
        <h2>127</h2>
        <h3>Data Point Title</h3>
    </div>
    <div class="datapoint-progress">
        <h1>Progress Description Here</h1>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                60%
            </div>
        </div>
    </div>
    <a class="datapoint-link" href="/totara/dashboard">Section Link</a>
    <?php //echo $OUTPUT->blocks('datapoint-block', ''); ?>
</section>

<!-- Welcome back section -->
<section class="welcomeback-section">
    <div class="container-fluid">

        <div class="row welcomeback-message">
            <div class="col-md-8">
                <h4>Welcome back,</h4>
                <h1>Samantha, so far you've completed 70% of all academy lessons.</h1>
            </div>
            <div class="col-md-4">
                <div class="progress-circle c100 p50 big">
                    <span>75%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row welcomeback-status">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Paths</h3>
                    <div>11</div>
                    <div>Completed</div>
                    <a href="/" class="btn btn-primary">See All</a>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Lessons</h3>
                    <div>127</div>
                    <div>Completed</div>
                    <a href="/" class="btn btn-primary">See All</a>
                </div>
            </div>
        </div>

    </div>
    <?php echo $OUTPUT->blocks('welcome-block', ''); ?>
</section>

<!-- Badges section -->
<section class="badges-section">
    <div class="container-fluid">
        <div class="badges-achieved row">
            <h1>My Badges</h1>
            <a class="see-more-link" href="/">See More</a>
            <div class="col-xs-12">
                <h2>Achieved</h2>
                <div class="badges-wrap">
                    <div class="badge-element">
                        <img src="https://via.placeholder.com/200.jpg" class="img-responsive" alt="Badge Example">
                        <h3>Badge Title</h3>
                    </div>
                    <div class="badge-element">
                        <img src="https://via.placeholder.com/200.jpg" class="img-responsive" alt="Badge Example">
                        <h3>Badge Title</h3>
                    </div>
                    <div class="badge-element">
                        <img src="https://via.placeholder.com/200.jpg" class="img-responsive" alt="Badge Example">
                        <h3>Badge Title</h3>
                    </div>
                    <div class="badge-element">
                        <img src="https://via.placeholder.com/200.jpg" class="img-responsive" alt="Badge Example">
                        <h3>Badge Title</h3>
                    </div>
                    <div class="badge-element">
                        <img src="https://via.placeholder.com/200.jpg" class="img-responsive" alt="Badge Example">
                        <h3>Badge Title</h3>
                    </div>
                    <div class="badge-element">
                        <img src="https://via.placeholder.com/200.jpg" class="img-responsive" alt="Badge Example">
                        <h3>Badge Title</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="badges-inprogress row">
            <div class="col-xs-12">
                <h2>In Progress</h2>
                <div class="badges-wrap">
                    <div class="badge-element">
                        <img src="https://via.placeholder.com/200.jpg" class="img-responsive" alt="Badge Example">
                        <h3>Badge Title</h3>
                    </div>
                    <div class="badge-element">
                        <img src="https://via.placeholder.com/200.jpg" class="img-responsive" alt="Badge Example">
                        <h3>Badge Title</h3>
                    </div>
                    <div class="badge-element">
                        <img src="https://via.placeholder.com/200.jpg" class="img-responsive" alt="Badge Example">
                        <h3>Badge Title</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pillar progress section -->
<section class="pillar-progress-section">
    <div class="container-fluid">
        <div class="row">
            <h1>Pillar Progress</h1>
            <a class="see-more-link btn btn-primary" href="/">See All</a>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="progress-circle c100 p50">
                            <span>75%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="panel-title">
                            <h3>Pillar Title</h3>
                            <div>23 Lessons</div>
                            <div>4 Paths</div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="progress-circle c100 p50">
                            <span>75%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="panel-title">
                            <h3>Pillar Title</h3>
                            <div>23 Lessons</div>
                            <div>4 Paths</div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="progress-circle c100 p50">
                            <span>75%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="panel-title">
                            <h3>Pillar Title</h3>
                            <div>23 Lessons</div>
                            <div>4 Paths</div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="progress-circle c100 p50">
                            <span>75%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="panel-title">
                            <h3>Pillar Title</h3>
                            <div>23 Lessons</div>
                            <div>4 Paths</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
      <div class="swiper-slide">Slide 10</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

<!-- Recommended paths section -->
<section class="recommended-paths-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h2>Recommended Paths</h2>
                <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, nullam elementum augue vitae vestibulum gravida.</h1>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="panel-title">
                                        <h4>12 Lessons</h4>
                                        <h3>Path Title</h3>
                                    </div>
                                    <div class="panel-pillars">
                                        <ul>
                                            <li>Pillar One</li>
                                            <li>Pillar Two</li>
                                            <li>Pillar Three</li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="panel-title">
                                        <h4>12 Lessons</h4>
                                        <h3>Path Title</h3>
                                    </div>
                                    <div class="panel-pillars">
                                        <ul>
                                            <li>Pillar One</li>
                                            <li>Pillar Two</li>
                                            <li>Pillar Three</li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="panel-title">
                                        <h4>12 Lessons</h4>
                                        <h3>Path Title</h3>
                                    </div>
                                    <div class="panel-pillars">
                                        <ul>
                                            <li>Pillar One</li>
                                            <li>Pillar Two</li>
                                            <li>Pillar Three</li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($full_header !== '') { ?>
<!-- Breadcrumb and edit buttons -->
<div class="container-fluid breadcrumb-container">
    <div class="row">
        <div class="col-sm-12">
            <?php echo $full_header; ?>
        </div>
    </div>
</div>
<?php } ?>

<!-- Content -->
<div id="page" class="container-fluid">
    <div id="page-content">

        <div class="row">
            <div id="region-main" class="<?php echo $themerenderer->main_content_classes(); ?>">
                <?php echo $themerenderer->course_content_header(); ?>
                <?php echo $themerenderer->blocks_main(); ?>
                <?php echo $themerenderer->main_content(); ?>
                <?php echo $themerenderer->course_content_footer(); ?>
            </div>
            <?php echo $themerenderer->blocks_pre(); ?>
            <?php echo $themerenderer->blocks_post(); ?>
        </div>
        <?php echo $themerenderer->blocks_bottom(); ?>

    </div>
</div>

<!-- Footer -->
<?php require("{$CFG->dirroot}/theme/themebase/layout/partials/footer.php"); ?>

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
