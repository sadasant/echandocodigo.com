<?PHP

// Index, or /
function index() {
  function content() {
    $GLOBALS[ec]->view('views/home');
  }
  // Layout
  $GLOBALS[ec]->view('views/layout', array(
    title => 'EchandoCodigo.com'
  ), content);
}



// Podcasts, or /pods/
function pods($params) {
  if ($params[0]) return pod($params, 1);

  // Load the json of posts
  // then render pod's view with the json content.
  function pods_content() {
    $podsJSON  = 'json/pods.json';
    $cacheTime = '518400'; // 6 days
    $podsDir   = 'podcasts/*';
    $podsGlob  = null;

    // Regenerating json/pods.json
    //
    // if pods/?regenerate=1, or
    // if the file doesn't exists, or
    // if the file is 6 days old, or
    // if the number of pods inside the json file is under the number of pods inside the podcasts folder.
    //
    // What it does is:
    //   Append to a new strin all the info.json inside the files that /podcasts/ has.
    
    if ($_GET[regenerate]
    || !file_exists($podsJSON)
    || (time() - filemtime($podsJSON)) >= $cacheTime
    || ($pods = json_decode(file_get_contents($podsJSON)) && count($pods) > count($podsGlob = glob($podsDir)))
    ) {
      if (!$podsGlob) $podsGlob = glob($podsDir);
      $newJSON = '[';

      foreach ($podsGlob as $k => $v) {
        $info = file_get_contents($v.'/info.json');
        $newJSON .= $info . ',';
      }
      $newJSON[strlen($newJSON) - 1] = ']';

      // Writing pods.json
      $file = fopen($podsJSON, 'w');
      fwrite($file, $newJSON);
      fclose($file);

      echo '<div class="info">JSONs Regenerated</div><div class="clearfix"></div>';
    }

    $pods = array_reverse(json_decode(file_get_contents($podsJSON)));

    // Separating in columns
    // For a pinterest-like concept
    //$flags = array(true, false);
    //echo "<table><tr>";
    //for ($i = 0; $i < 2; $i++) {
    //  echo "<td valign='top'>";
      foreach ($pods as $k => $v) {
    //    if (($k+1)%2 == $flags[$i]) {
          $GLOBALS[ec]->view('views/pods_pod', $v);
    //    }
      }
    //  echo "</td>";
    //}
    //echo "</tr></table>";
  }

  // Render the pods' view, and fill it with pods_content()
  function content() {
    $GLOBALS[ec]->view('views/pods', null, pods_content);
  }

  // Layout, filled with content()
  $GLOBALS[ec]->view('views/layout', array(
    title => 'Pods :: EchandoCodigo.com'
  ), content);

}



// A single podcast, /pod/? or /pods/? (check the first line of pods())
function pod($params, $frompods = null) {
  $pod  = $params[0];
  $json = $GLOBALS[json] = json_decode(file_get_contents('podcasts/'.$pod.'/info.json'));

  // Not exists? Show forbidden alert.
  if (!($pod && file_exists('podcasts/'.$pod))) return forbidden();

  // If the url is /pod/? let's return the info.json :) let's say.. like an API ;)
  if (!$frompods) {
    echo file_get_contents('podcasts/'.$pod.'/info.json');
    return;
  }

  // Podcast view.
  function content() {
    $GLOBALS['ec']->view('views/pod', array(
      id   => $GLOBALS[req][params][0]
    , info => $GLOBALS[json]
    ));
  }

  // Layout
  $GLOBALS[ec]->view('views/layout', array(
    title    => 'Podcast '.$pod.' :: EchandoCodigo.com'
  , keywords => $json->tags
  ), content);
}


// Contacto
function contacto() {

  // Contact view.
  function content() {
    $GLOBALS['ec']->view('views/contact');
  }

  // Layout
  $GLOBALS[ec]->view('views/layout', array(
    title    => 'Contacto :: EchandoCodigo.com'
  ), content);
}


// RSS
function rss() {
  $json = json_decode(file_get_contents('json/pods.json'));
  $GLOBALS[ec]->view('views/rss', $json);
}


// Forbidden
function forbidden() {
  $GLOBALS[ec]->view('views/404');
}

?>