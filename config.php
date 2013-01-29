<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db-master.moodle.cloudoman.com';
$CFG->dbname    = 'moodledemo';
$CFG->dbuser    = 'admin';
$CFG->dbpass    = 'admin';
$CFG->prefix    = 'moodledb';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbsocket' => false,
);

$CFG->wwwroot   = 'http://www.moodle.cloudoman.com';
$CFG->dataroot  = '/home/webapps/moodlerepository';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02777;

$CFG->passwordsaltmain = 'ygE^1`ckbf-b_LgRwj0:EI/EfY';

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
~
