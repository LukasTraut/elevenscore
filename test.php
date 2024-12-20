<?php 
    $team = isset($_GET['team']) ? $_GET['team'] : 'Eintracht Frankfurt';
    $past = isset($_GET['past']) ? $_GET['past'] : 25;
    $future = isset($_GET['future']) ? $_GET['future'] : 38;
?>

<div id="fblwidget_teammatches"></div>
<script src="//bundesliga-widgets.de/js/teammatches.js" type="text/javascript"></script>


<script type="text/javascript">

  var fblWidgetSettings = {
    // season: 2022, 
    // league: 'bl2',
    teamMatchesTeam: '<?php echo  $team ?>',   // das Team, dessen Spiele in das TeamMatches-Widgets geladen werden:
    weekCountPast: <?php echo $past ?>,       // wieviele Wochen rückwirkend sollen die Spiele angezeigt werden?
    weekCountFuture: <?php echo $future ?>,  // wieviele Wochen vorrausschauend sollen die Spiele angezeigt werden?

    // generiert aus den angegebenen Teams Links zu der angegebenen Url:
    teamLinks: [{
        'teamname': 'Bayern',
        'link': 'http://localhost/elevenscore/test.php?team=Bayern%20München'
            }, {
        'teamname': 'Dortmund',
        'link': 'http://localhost/elevenscore/test.php?team=Borussia%20Dortmund'
      }, {
        'teamname': 'Bayer Leverkusen',
        'link': 'http://localhost/elevenscore/test.php?team=Bayer%20Leverkusen'
      }, {
        'teamname': 'Eintracht Frankfurt',
        'link': 'http://localhost/elevenscore/test.php?team=Eintracht%20Frankfurt'
      }, {
        'teamname': 'RB Leipzig',
        'link': 'http://localhost/elevenscore/test.php?team=RB%20Leipzig'
      },{
        'teamname': 'SC Freiburg',
        'link': 'http://localhost/elevenscore/test.php?team=SC%20Freiburg'
      },{
        'teamname': 'VfB Stuttgart',
        'link': 'http://localhost/elevenscore/test.php?team=VfB%20Stuttgart'
      },{
        'teamname': '1. FSV Mainz 05',
        'link': 'http://localhost/elevenscore/test.php?team=1.%20FSV%20Mainz%2005'
      },{
        'teamname': 'Werder Bremen',
        'link': 'http://localhost/elevenscore/test.php?team=Werder%20Bremen'
      },{
        'teamname': 'VfL Wolfsburg',
        'link': 'http://localhost/elevenscore/test.php?team=VfL%20Wolfsburg'
      },{
        'teamname': 'Mönchengla',
        'link': 'http://localhost/elevenscore/test.php?team=Borussia%20Mönchengla'
      },{
        'teamname': '1. FC Union Berlin',
        'link': 'http://localhost/elevenscore/test.php?team=1.%20FC%20Union%20Berlin'
      },{
        'teamname': 'FC Augsburg',
        'link': 'http://localhost/elevenscore/test.php?team=FC%20Augsburg'
      },{
        'teamname': 'TSG 1899 Hoffenheim',
        'link': 'http://localhost/elevenscore/test.php?team=TSG%201899%20Hoffenheim'
      },{
        'teamname': 'FC St. Pauli',
        'link': 'http://localhost/elevenscore/test.php?team=FC%20St.%20Pauli'
      },{
        'teamname': '1. FC Heidenheim',
        'link': 'http://localhost/elevenscore/test.php?team=1.%20FC%20Heidenheim'
      },{
        'teamname': 'Holstein Kiel',
        'link': 'http://localhost/elevenscore/test.php?team=Holstein%20Kiel'
      },
      {
        'teamname': 'VfL Bochum',
        'link': 'http://localhost/elevenscore/test.php?team=VfL%20Bochum'
      },
]
  };
</script>


