<?php 
    // Überprüfen, ob das Team über die URL übergeben wurde, andernfalls Standardwert setzen
    $teamname = isset($_GET['team']) ? $_GET['team'] : 'Eintracht Frankfurt';
    $past = isset($_GET['past']) ? $_GET['past'] : 25; // Anzahl der vergangenen Wochen
    $future = isset($_GET['future']) ? $_GET['future'] : 38; // Anzahl der zukünftigen Wochen

?>


<div id="fblwidget_teammatches"></div>
<script src="//bundesliga-widgets.de/js/teammatches.js" type="text/javascript"></script>

<script type="text/javascript">
  var fblWidgetSettings = {
    teamMatchesTeam: '<?php echo htmlspecialchars($teamname); ?>',   // Das Team, dessen Spiele angezeigt werden
    weekCountPast: <?php echo intval($past); ?>,       // Anzahl der Wochen rückblickend
    weekCountFuture: <?php echo intval($future); ?>,   // Anzahl der Wochen vorausschauend

    teamLinks: [{
        'teamname': 'FC Bayern München',
        'link': 'verein?team=Bayern München',
      }, {
        'teamname': 'Borussia Dortmund',
        'link': 'verein?team=Borussia Dortmund'
      }, {
        'teamname': 'Bayer Leverkusen',
        'link': 'verein?team=Bayer Leverkusen'
      }, {
        'teamname': 'Eintracht Frankfurt',
        'link': 'verein?team=Eintracht Frankfurt'
      }, {
        'teamname': 'RB Leipzig',
        'link': 'verein?team=RB Leipzig'
      },{
        'teamname': 'SC Freiburg',
        'link': 'verein?team=SC Freiburg'
      },{
        'teamname': 'VfB Stuttgart',
        'link': 'verein?team=VfB Stuttgart'
      },{
        'teamname': '1. FSV Mainz 05',
        'link': 'verein?team=1. FSV Mainz 05'
      },{
        'teamname': 'Werder Bremen',
        'link': 'verein?team=Werder Bremen'
      },{
        'teamname': 'VfL Wolfsburg',
        'link': 'verein?team=VfL Wolfsburg'
      },{
        'teamname': 'Mönchengla',
        'link': 'verein?team=Borussia Mönchengladbach'
      },{
        'teamname': '1. FC Union Berlin',
        'link': 'verein?team=1. FC Union Berlin'
      },{
        'teamname': 'FC Augsburg',
        'link': 'verein?team=FC Augsburg'
      },{
        'teamname': 'TSG 1899 Hoffenheim',
        'link': 'verein?team=TSG 1899 Hoffenheim'
      },{
        'teamname': 'FC St. Pauli',
        'link': 'verein?team=FC St. Pauli'
      },{
        'teamname': '1. FC Heidenheim',
        'link': 'verein?team=1. FC Heidenheim'
      },{
        'teamname': 'Holstein Kiel',
        'link': 'verein?team=Holstein Kiel'
      },{
        'teamname': 'VfL Bochum',
        'link': 'verein?team=VfL Bochum'
      }]
  };
</script>

</body>
</html>