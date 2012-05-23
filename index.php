<?PHP
// By Daniel Rodríguez (sadasant.com)
// http://www.json.org/license.html or whatever :P

// Including the master object or something like.
include('ec.php');

// Function routes.
include('routes.php');

$req  = $ec->parseURL();

// If we have that route, render the page.
// else, show the forbidden announce.
if (function_exists($req[page])) {
  $req[page]($req[params]);
} else {
  forbidden();
}

?>