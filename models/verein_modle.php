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
        'link': 'verein?team=<?= $teamname ?>',
      }, {
        'teamname': 'Borussia Dortmund',
        'link': 'verein?team=BorussiaDortmund'
      }, {
        'teamname': 'Bayer Leverkusen',
        'link': 'verein?team=BayerLeverkusen'
      }, {
        'teamname': 'Eintracht Frankfurt',
        'link': 'verein?team=EintrachtFrankfurt'
      }, {
        'teamname': 'RB Leipzig',
        'link': 'verein?team=RBLeipzig'
      },{
        'teamname': 'SC Freiburg',
        'link': 'verein?team=SCFreiburg'
      },{
        'teamname': 'VfB Stuttgart',
        'link': 'verein?team=VfBStuttgart'
      },{
        'teamname': '1. FSV Mainz 05',
        'link': 'verein?team=1.FSVMainz05'
      },{
        'teamname': 'Werder Bremen',
        'link': 'verein?team=WerderBremen'
      },{
        'teamname': 'VfL Wolfsburg',
        'link': 'verein?team=VfLWolfsburg'
      },{
        'teamname': 'Mönchengla',
        'link': 'verein?team=BorussiaMönchengladbach'
      },{
        'teamname': '1. FC Union Berlin',
        'link': 'verein?team=1.FCUnionBerlin'
      },{
        'teamname': 'FC Augsburg',
        'link': 'verein?team=FCAugsburg'
      },{
        'teamname': 'TSG 1899 Hoffenheim',
        'link': 'verein?team=TSG1899Hoffenheim'
      },{
        'teamname': 'FC St. Pauli',
        'link': 'verein?team=FCSt.Pauli'
      },{
        'teamname': '1. FC Heidenheim',
        'link': 'verein?team=1.FCHeidenheim'
      },{
        'teamname': 'Holstein Kiel',
        'link': 'verein?team=HolsteinKiel'
      },{
        'teamname': 'VfL Bochum',
        'link': 'verein?team=VfLBochum'
      }]
  };
</script>

</body>
</html>