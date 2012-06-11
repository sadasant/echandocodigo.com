<?PHP
// By Daniel Rodríguez (sadasant.com)
// http://www.json.org/license.html or whatever :P

session_start();

// Including the master object or something like.
include('ec.php');

// Function routes.
include('routes.php');

// Pods' JSON's cache
if (!$_SESSION[pods]) {
  $_SESSION[pods] = json_decode(file_get_contents('json/pods.json'));
}

// Regenerating Pods' JSON
// $ec->regenerate();

// Parsing the requested URL
$req  = $ec->parseURL();

// If we have that route, render the page.
// else, show the forbidden announce.
if (function_exists($req[page])) {
  $req[page]($req[params]);
} else {
  forbidden();
}

?>
