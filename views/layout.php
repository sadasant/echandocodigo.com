<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title><?=$p[title]?></title>
    <link rel="shortcut icon" href="/img/ec.ico" />
    <link rel="stylesheet" type="text/css" href="/css/ec.css"/>
  </head>
  <body>

    <!-- Hidden Menu -->
    <div id="head">
      <ul id="menu">
        <li> <a href= "/"         > ra&iacute;z </a>  </li>
        <li> <a href= "/pods"     > pods        </a>  </li>
        <li> <a href= "/eventos"  > eventos     </a>  </li>
        <li> <a href= "/contacto" > contacto    </a>  </li>
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