<?PHP

// Echando Código main class.
class EC {
  // What to do if the url is empty.
  public $ifEmpty = 'index';

  // View method, it renders a view.
  // It's good becuase each view is loaded
  // inside the scope of this method.
  function view($path, $p = null, $content = null) {
    include($path.'.php');
  }

  // parseURL
  // Getting the url appendix: /?
  // and all the sub-directories as params: /?/?/?/?
  function parseURL() {
    $page = ($page = explode('.php/', strtolower($_SERVER['PHP_SELF']))) ? $page[1] : '';
    $page = explode('/', $page);
    return array(
      'params' => array_slice($page, 1)
    , 'page'   => $page[0] ? $page[0] : 'index'
    );
  }

  // Regenerate JSON
  function regenerate() {
    $podsJSON  = 'json/pods.json';
    $cacheTime = '518400'; // 6 days
    $podsDir   = 'podcasts/*';
    $podsGlob  = null;

    // Regenerating json/pods.json
    //
    // if /?regenerate=1, or
    // if the file doesn't exists, or
    // if the file is 6 days old, or
    // if the number of pods inside the json file is under the number of pods inside the podcasts folder.
    //
    // What it does is:
    //   Append to a new strin all the info.json inside the files that /podcasts/ has.

    if ($_GET['regenerate']
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
      $_SESSION['pods'] = json_decode(file_get_contents($podsJSON));
    }
  }

}

// Using the class...
$ec = new EC();

?>
