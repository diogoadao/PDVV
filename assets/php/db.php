<?php
/**
 * Database Handler
 *
 * Database Connection Configuration
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Support
 * @package    TimeTracker
 * @author     Diogo Adão <diogoadao@miguelcaldas.com>
 * @author     Another Author <another@example.com>
 * @copyright  2018-2018 Visual Thinking
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: 1.0.0
 * @link       http://thmc.ddns,net
 * @see        https://miguelcaldas.pt
 * @since      File available since Release 1.0.0
 * @deprecated File deprecated in Release 2.0.0
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$hostname = "192.168.2.252";
$username = "Time";
$password = "Time?";
$database = "TimeTracker";
$connection = mysqli_connect($hostname, $username, $password, $database);
mysqli_set_charset($connection, "utf8");
if (mysqli_connect_errno()) {
    echo "Error: " . mysqli_connect_error();
    die("Database Error.");
}
