<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title><?=$p[title]?></title>
    <link rel="stylesheet" type="text/css" href="/css/ec.css"/>
    <style>
      .center-text {
        text-align    : center;
        padding-top   : 30px;
        margin-bottom : 10px;
      }
      .center-text h1 {
        font-size     : 72px;
        font-family   : sans;
        color         : #250520;
        text-shadow   : 0px 0px 1px #740B2A, 0px 0px 2px #740B2A;
        margin-bottom : 10px;
      }
      .center-text a {
        color           : #740B2A;
        text-decoration : underline;
      }
      #foot {
        text-align : center;
        margin-top : 30%;
      }
      #foot img {
        margin-top : -155px;
      }
    </style>
  </head>
  <body>

    <div class="center-text">
      <h1>404</h1>
      <small> <a href="/"> Go back. </a> </small>
    </div>

    <div id="foot">
      <img id="error" src="img/error.png"/>
    </div>
  </body>
  <script>
    (function() {
      var img  = document.getElementById('error')
        , imgs = ['img/error.png','img/error2.png']
        , n    = 0
      setInterval(function(){
        img.src = imgs[(n ^= 1)]
      }, 300)
    })()
  </script>
</html>
