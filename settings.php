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
 * superblock3 block caps.
 *
 * @package    block_superblock3
 * @copyright  Daniel Neis <danielneis@gmail.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$settings->add(new admin_setting_heading('sampleheader',
										get_string('headerconfig', 'block_superblock3'),
										get_string('descconfig', 'block_superblock3')));

$settings->add(new admin_setting_configtext('block_superblock3/url',
                              			get_string('url', 'block_superblock3'),
										get_string('url_details', 'block_superblock3'),
										'https://quizlet.com/132695231/scatter/embed', PARAM_RAW));
										
$settings->add(new admin_setting_configtext('block_superblock3/width',
                              			get_string('width', 'block_superblock3'),
										get_string('width_details', 'block_superblock3'),
                              			500, PARAM_INT));
										
$settings->add(new admin_setting_configtext('block_superblock3/height',
                              			get_string('height', 'block_superblock3'),
										get_string('height_details', 'block_superblock3'),
                              			400, PARAM_INT));
										
$options= array(
'course' => get_string('config_course', 'block_superblock3'),
'popup' => get_string('config_popup', 'block_superblock3'),
);

$settings->add(new admin_setting_configselect('block_superblock3/pagelayout', 
										get_string('pagelayout', 'block_superblock3'),
        								get_string('pagelayout_details', 'block_superblock3'), 
										'course', $options));