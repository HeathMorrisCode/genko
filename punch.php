<?
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

require_once('classes/Database.php');
require_once('classes/Display.php');
require_once('classes/Time.php');

$db = new Database;
$pdo = $db->connect();


echo isset($_GET['type'],$_GET['client_id']) ? "aasd": '';
