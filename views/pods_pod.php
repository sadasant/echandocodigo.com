<?
$date = explode(' ', $p->date)
?>
<a class="pod" href="/pods/<?=$p->id?>">
  <div class="title">P<?=$p->id.": ".$p->title?></div>
  <div class="data">
    <table>
      <tr>
        <td>Fecha: <?=$date[2].' '.$date[1].' '.$date[3]?></td>
        <td>Duraci&oacute;n: <?=$p->duration?></td>
      </tr>
    </table>
    <b>Participantes:</b>
    <ul>
      <?
        if ($p->people) {
          foreach ($p->people as $k => $v) {
            echo "<li>$v</li>";
          }
        }
      ?>
    </ul>
  </div>
</a>
