<?php

function writeln($line_in) 
{
  echo $line_in."<br/>";
}


//$GLOBALS - References all variables available in global scope. 
function test()
{
	$var = 'local variable';

	writeln('$var global scope: ' . $GLOBALS["var"]);
	writeln('$var in current scope: ' . $var);
}

$var = 'Global variable';
test();

//$_SERVER - Array containing info such as headers, paths, and script 
//Locations.The entries are creates by the web server, and there is no 
//guarantee that every web server will provide any of these. 

writeln($_SERVER['SERVER_NAME']);


//$_GET - An associative array of variables passed to the current script 
//via the URL parameters.

writeln('Hello ' . htmlspecialchars($_GET["name"]));

//$_POST - An associative array of variables passed to the current script 
//via the HTTP POST method when using application/x-www-form-urlencoded 
//or multipart/form-data as the HTTP Content-Type in the request.

writeln('Hello ' . htmlspecialchars($_POST["name"]));

//$_FILES - An associative array of items uploaded to the current script 
//via the HTTP POST method.

writeln($_FILES);

//$_COOKIE - An associative array of variables passed to the current script 
//via HTTP Cookies.

writeln('Hello ' . htmlspecialchars($_COOKIE["name"]));
//The "name" cookie would have to be set earlier for this to work!

//$_SESSION - An associative array containing session variables available to 
//the current script.

writeln($_SESSION);

//$_REQUEST - An associative array that by default contains the contents of 
//$_GET, $_POST and $_COOKIE.

writeln($_REQUEST);

//$_ENV - An associative array of variables passed to the current script via 
//the environment method.

writeln('My username is ' . $_ENV["USER"]);



?>