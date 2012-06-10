<?='<?xml version="1.0"?>'?>

<rss version="2.0">
  <channel>
    <title>EchandoCodigo.com</title>
    <link>http://echandocodigo.com</link>
    <description>
      EchandoCodigo.com es un podcast por desarrolladores y para desarrolladores.
      Presentado por Osledy Bazó @uokesita y Daniel Rodríguez @sadasant
    </description>
<?
  foreach ($p as $k => $pod) {
    echo "
    <item>
      <title>$pod->title</title>
      <link>http://echandocodigo.com/pods/$pod->id</link>
      <description>$pod->description</description>
    </item>
";
  }
?>

  </channel>
</rss>