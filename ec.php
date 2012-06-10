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
    $page = ($page = explode('.php/', strtolower($_SERVER[PHP_SELF]))) ? $page[1] : '';
    $page = explode('/', $page);
    return array(
      params => array_slice($page, 1)
    , page   => $page[0] ? $page[0] : 'index'
    );
  }

}

// Using the class...
$ec = new EC();

?>