<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?=$p['title'] ? $p['title'] : "EchandoCodigo.com"?></title>
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="/img/ec.ico" />
  <link rel="alternate" type="application/rss+xml" href="/rss" title="RSS feed for EchandoCodigo.com">
  <link rel="stylesheet" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" />
  <link rel="stylesheet" type="text/css" href="/css/ec.css"/>
</head>
<body>

  <div id="top">
    <a id="logo" href="#"><img src="/img/logo_66x66.png" alt="EchandoCodigo" /></a>
    <div id="menu">
      <a href="/"         class="<?=$p['active'] == '/'         ? 'active' : '' ?>">EchandoCodigo</a>
      <a href="/pods"     class="<?=$p['active'] == '/pods'     ? 'active' : '' ?>">pods</a>
      <a href="/rss"      class="<?=$p['active'] == '/rss'      ? 'active' : '' ?>" type="application/rss+xml" >rss</a>
      <a href="/contacto" class="<?=$p['active'] == '/contacto' ? 'active' : '' ?>">contacto</a>
    </div>
  </div>

  <div class="content">
    <?=$content()?>
  </div>

  <div id="btm">
    <a href="/README">
      EchandoCodigo.com <br/>
      Copyright <?=date('Y')?> <br/>
      README
    </a>
  </div>

</body>
</html>
