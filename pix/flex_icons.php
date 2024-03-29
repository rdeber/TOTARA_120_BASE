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
 * @author  Petr Skoda <petr.skoda@totaralms.com>
 * @package theme_themebase
 */

/* Developer documentation is in /pix/flex_icons.php file. */

/* Pix only images are not supposed to be converted to flex icons. */
$pixonlyimages = array(
    'screenshot',
);

$icons = array(
    'home' => array(
        'data' => array(
            'classes' => 'fa-home ft-size-200'
        ),
    ),
    'notification-info' => array(
        'data' => array(
            'classes' => 'fa-info-circle ft-size-200',
        ),
    ),
    'notification-success' => array(
        'data' => array(
            'classes' => 'fa-check ft-size-200 ft-flip-rtl',
        ),
    ),
    'notification-warning' => array(
        'data' => array(
            'classes' => 'fa-exclamation-triangle ft-size-200',
        ),
    ),
    'notification-error' => array(
        'data' => array(
            'classes' => 'fa-bolt ft-size-200 ft-flip-rtl',
        ),
    ),
);