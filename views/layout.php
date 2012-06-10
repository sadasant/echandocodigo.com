<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title><?=$p[title]?></title>
    <link rel="shortcut icon" href="/img/ec.ico" />
    <link rel="stylesheet" type="text/css" href="/css/ec.css"/>
    <link rel="alternate" type="application/rss+xml" href="/rss" title="RSS feed for EchandoCodigo.com">
  </head>
  <body>

    <!-- Hidden Menu -->
    <div id="head">
      <ul id="menu">
        <li> <a href= "/"         > raíz     </a>  </li>
        <li> <a href= "/pods"     > pods     </a>  </li>
        <li> <a href= "/rss" type="application/rss+xml" > rss </a> </li>
        <li> <a href= "/contacto" > contacto </a>  </li>
      </ul>
    </div>

    <?=$content()?>


    <div class="clearfix"></div>
    <div id="foot">
      echandocodigo.com <br/>
      Copyright 2012    <br/>
      <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/">CC by-nc-sa 3.0</a>
    </div>
  </body>
</html>