<?

// Tell PHP that we're using UTF-8 strings until the end of the script
mb_internal_encoding('UTF-8');
 
// Tell PHP that we'll be outputting UTF-8 to the browser
mb_http_output('UTF-8');

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

require_once('classes/PHPMailerAutoload.php');

function dude_wheres_my_loader($class)
{ 
	$file = __DIR__ . "/classes/{$class}.php"; 
	if (is_file($file)) 
		{
			include $file;
		}
}

spl_autoload_register("dude_wheres_my_loader");


