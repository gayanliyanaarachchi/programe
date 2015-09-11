<?php
/**
 * Web Service
 *
 * Web service which gives the relevant output for a given input based on the
 * @author Ramindu Deshapriya
 * @copyright 2002
 * @version 0.0.8
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @package Interpreter
 * @subpackage Responder
 */

/**
 * Include the guts of the program.
 */
include_once "respond.php";

$input = urldecode($_GET['input']);
$botname = urldecode($_GET['botname']);

// Start the session or get the existing session.
session_start();
$myuniqueid = session_id();

$botresponse = replybotname($input, $myuniqueid, $botname);

echo json_encode($botresponse);


