<?php

require('../../config.php');
require_once('../../lib/moodlelib.php');

require_login();

//get our config
$def_config = get_config('block_superblock3');

$usercontext = context_user::instance($USER->id);
$PAGE->set_course($COURSE);
$PAGE->set_url('/blocks/superblock3/view.php');
$PAGE->set_heading($SITE->fullname);

$PAGE->set_pagelayout($def_config->pagelayout);

$PAGE->set_title(get_string('pluginname', 'block_superblock3'));
$PAGE->navbar->add(get_string('pluginname', 'block_superblock3'));


// start output to browser
echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname', 'block_superblock3'),5);

// Some content goes here
echo '<br>' . fullname($USER);
echo '<br>' . $OUTPUT->user_picture($USER);

$src = $def_config->url;

$height = $def_config->height;
$width = $def_config->width;

echo '<br>' ."<iframe src='$src' 
height='$height' width='$width' style='float:right; border:1;'></iframe>";


//send footer out to browser
echo $OUTPUT->footer();
return;