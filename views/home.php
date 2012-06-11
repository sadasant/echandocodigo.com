<div class="section text">
  <h2>¡Bienvenido!</h2>
  EchandoCodigo.com es un <em>podcast</em> por <em>desarrolladores</em> y para desarrolladores.
  Dos veces al mes podrán escuchar noticias sobre <em>tendencias tecnológicas</em>,
  <em>innovación y desarrollo</em>, desde el punto de <em>geeks</em> <em>venezolanos</em>,
  quienes además les llevarán a sus oidos las perspectivas de otros desarrolladores
  de habla hispana con <em>experiencia</em> en toda clase de <em>proyectos</em>, dentro y fuera de <em>Venezuela</em>.
</div>

<div class="section">
  <a href="/pod/<?=end($_SESSION[pods])->id?>"><div class="play">&#9654; Dale Play a nuestro último Podcast &#9654;</div></a>
</div>

<div class="section">
  <h2>Temas</h2>
  <?
    $temas = array(
      'JavaScript','Ruby','Rails','Node.js','Git','VIM','Programación Funcional'
    , 'OOP','MVC','REST','Cookies','Remote Debugging','Mobile','Touch','Linux'
    , 'OSX','FOSS','Freelance','Venezuela');
    foreach ($temas as $k => $v) {
      echo "<a href='https://twitter.com/#!/search/%40echandocodigo%20%23$v'><div class='tema'>$v</div></a>";
    }
  ?>
</div>

<div class="section avatars">
  <h2>Presentado Por</h2>
  <div class="avatar">
    <img src="/img/os.png"  alt="Osledy Bazó" />
    <h2>
      <a href="http://osledybazo.com/">Osledy Bazó</a>
      <a href="http://twitter.com/uokesita">@uokesita</a>
    </h2>
  </div>
  <div class="avatar">
    <img src="/img/dan.png" alt="Daniel Rodríguez" />
    <h2>
      <a href="http://sadasant.com/">Daniel Rodríguez</a>
      <a href="http://twitter.com/sadasant">@sadasant</a>
    </h2>
  </div>
</div>
