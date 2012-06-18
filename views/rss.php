<?='<?xml version="1.0" encoding="UTF-8"?>'?>

<rss version="2.0">
  <channel>
    <title>EchandoCodigo.com</title>
    <description>
      EchandoCodigo.com es un podcast por desarrolladores y para desarrolladores.
      Presentado por Osledy Bazó @uokesita y Daniel Rodríguez @sadasant
    </description>
    <link>http://echandocodigo.com</link>
    <language>es-ve</language>
    <copyright>Copyright 2012 EchandoCodigo.com http://echandocodigo.com/README</copyright>
    <webMaster>this@echandocodigo.com</webMaster>
<?
  foreach ($p as $k => $pod) {
    echo "
    <item>
      <title>$pod->title</title>
      <link>http://echandocodigo.com/pods/$pod->id</link>
      <guid>$pod->location</guid>
      <description>$pod->description</description>
      <enclosure url=\"$pod->location\" type=\"audio/mpeg\"/>
      <category>Podcasts</category>
      <pubDate>$pod->date</pubDate>
    </item>
";
  }
?>

  </channel>
</rss>
