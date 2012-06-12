<?PHP

// Index, or /
function index() {
  function content() {

    $GLOBALS['ec']->view('views/home');
  }
  // Layout
  $GLOBALS['ec']->view('views/layout', array(
    'active' => '/'
  ), content);
}



// Podcasts, or /pods/
function pods($params) {
  if ($params[0]) return pod($params, 1);

  // Load the json of posts
  // then render pod's view with the json content.
  function pods_content() {
    $pods = array_reverse($_SESSION['pods']);

    foreach ($pods as $k => $v) {
      $GLOBALS['ec']->view('views/pods_pod', $v);
    }
  }

  // Render the pods' view, and fill it with pods_content()
  function content() {
    $GLOBALS['ec']->view('views/pods', null, pods_content);
  }

  // Layout, filled with content()
  $GLOBALS[ec]->view('views/layout', array(
    'title'  => 'Pods :: EchandoCodigo.com'
  , 'active' => '/pods'
  ), content);

}



// A single podcast, /pod/? or /pods/? (check the first line of pods())
function pod($params, $frompods = null) {
  $pod  = $params[0];
  $json = $GLOBALS['json'] = json_decode(file_get_contents('podcasts/'.$pod.'/info.json'));

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
      'id'   => $GLOBALS['req']['params'][0]
    , 'info' => $GLOBALS['json']
    ));
  }

  // Layout
  $GLOBALS[ec]->view('views/layout', array(
    'title'    => 'Podcast '.$pod.' :: EchandoCodigo.com'
  , 'keywords' => $json->tags
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
    'title'  => 'Contacto :: EchandoCodigo.com'
  , 'active' => '/contacto'
  ), content);
}


// RSS
function rss() {
  $GLOBALS['ec']->view('views/rss', $_SESSION['pods']);
}

// README
function README() {
  function content() {

    $GLOBALS['ec']->view('views/README');
  }
  // Layout
  $GLOBALS['ec']->view('views/layout', array(
    'active' => '/'
  ), content);
}

// Forbidden
function forbidden() {
  $GLOBALS['ec']->view('views/404');
}

?>
