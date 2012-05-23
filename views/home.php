<!-- EchandoCodigo.com -->
<style>
  .content {
    font-family : sans-serif;
    color       : #999;
    text-align  : justify;
  }
  .content a {
    color : #A91DA4;
  }
  .content h1 {
    color         : #250520;
    font-size     : 42px;
    margin-bottom : 40px;
    margin-top    : 10px;
    text-align    : center;
    text-shadow   : 0px 0px 1px #740B2A, 0px 0px 2px #740B2A;
  }
  .center-text {
    text-align            : center;
    margin                : 30px 0;
  }
  .center-text img {
    border-radius         : 5px;
    -moz-border-radius    : 5px;
    -webkit-border-radius : 5px;
    -o-border-radius      : 5px;
    -ms-border-radius     : 5px;
    margin-bottom         : -110px;
  }
</style>
<div class="center">

  <div id="main-title">
    <div id="location">
      <a href="/">EchandoCodigo.com</a>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="content">
    <h1>
    <?
    $titles = array(
      '(> code sleep)'
    , 's/play/hack/g'
    , "$('*').has('code')"
    , "WARNING! GEEK CONTENT"
    , "Por devs y para devs."
    , '{ "hola" : "mundo" }'
    , 'F5 F5 F5 F5 F5'
    , '#F5F5F5'
    , "COMMIT ALL THE THINGS"
    , 'Vim FTW'
    );
    echo $titles[rand(0, count($titles) - 1)];
    ?>
    </h1>
    EchandoCodigo.com es un podcast por desarrolladores y para desarrolladores.
    Presentado por <a href="http://twitter.com/uokesita">Osledy Bazó</a>
    y <a href="http://twitter.com/sadasant">Daniel Rodríguez</a>,
    programadores experimentados en el desarrollo web, mediante el uso de tecnologías como
    HTML5, CSS3, AJAX, Backbone.js, Ruby On Rails y Node.js
    <br>
    <br>
    Dos veces al mes podrán escuchar noticias sobre tendencias tecnológicas, innovación y desarrollo,
    vista desde el punto de vista de un par de geeks venezolanos, quienes además les llevarán
    a sus oidos las perspectivas de otros desarrolladores de habla hispana con experiencia
    en toda clase de proyectos, dentro y fuera de Venezuela.
  </div>

  <div class="center-text">
    <img src="/img/laptop_ray.png"/>
  </div>

</div>