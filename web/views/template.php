<!doctype html>

<html lang="fr" dir="ltr">
  <head>
    <title>Transvision</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/style/glossary.css" type="text/css" media="all" />
    <link rel="shortcut icon" type="image/x-icon" href="http://www.mozfr.org/favicon.ico" />
  </head>

<body id="<?=$page?>">
  <h1><?=$title?></h1>
  <?=$extra?>
  <?=$content?>

  <div id="links">
    <ul>
        <?php
            $check['repo'] = isset($check['repo']) ? $check['repo'] : 'central';
            $sourceLocale = isset($sourceLocal) ? $sourceLocale : 'en-US';
            $locale = isset($locale) ? $locale : 'fr';
            $initial_search = isset($initial_search) ? $initial_search : 'Bookmarks';
        ?>
      <li><a href="/?sourcelocale=<?=$sourceLocale?>&locale=<?=$locale?>&repo=<?=$check['repo']?>&t2t=t2t&recherche=<?=$initial_search?>" title="Search in the Glossary">Glossary</a></li>
      <li><a href="/accesskeys/" title="Check your access keys">Access Keys</a></li>
      <li><a href="/channelcomparison/" title="Compare strings from channel to channel">Channel Comparison</a></li>
      <li><a href="/stats/" title="Light usage statistics">Statistics</a></li>
      <li><a href="/credits/" title="Transvision Credits page">Credits</a></li>
    </ul>
  </div>
  <footer>Transvision is a tool provided by the French Mozilla community, <a href="http://www.mozfr.org" title="Home of MozFR, the French Mozilla Community" hreflang="fr">MozFR</a>.</footer>

</body>
</html>
