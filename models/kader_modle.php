
<?php
echo "<table border='1' style='display: flex; justify-content: center;'>";
echo "<tr><th>Teamname</th></tr>";
?>
<link rel="stylesheet" href="/css/styles.css">
<?php
$teams = [
    ['teamname' => 'Eintracht Frankfurt', 'link' => 'mannschaft?team=Eintracht-Frankfurt&id=24'],
    ['teamname' => 'FC Bayern München', 'link' => 'mannschaft?team=Bayern-Munchen&id=27'],
    ['teamname' => 'Borussia Dortmund', 'link' => 'mannschaft?team=Borussia-Dortmund&id=16'],
    ['teamname' => 'Bayer Leverkusen', 'link' => 'mannschaft?team=Bayer-Leverkusen&id=15'],
    ['teamname' => 'RB Leipzig', 'link' => 'mannschaft?team=RB-Leipzig&id=23826'],
    ['teamname' => 'SC Freiburg', 'link' => 'mannschaft?team=SC-Freiburg&id=60'],
    ['teamname' => 'VfB Stuttgart', 'link' => 'mannschaft?team=VfB-Stuttgart&id=79'],
    ['teamname' => '1. FSV Mainz 05', 'link' => 'mannschaft?team=1-fsv-mainz-05&id=39'],
    ['teamname' => 'Werder Bremen', 'link' => 'mannschaft?team=Werder-Bremen&id=86'],
    ['teamname' => 'VfL Wolfsburg', 'link' => 'mannschaft?team=VfL-Wolfsburg&id=82'],
    ['teamname' => 'Borussia Mönchengladbach', 'link' => 'mannschaft?team=Borussia-Mönchengladbach&id=18'],
    ['teamname' => '1. FC Union Berlin', 'link' => 'mannschaft?team=1-fc-union-berlin&id=89'],
    ['teamname' => 'FC Augsburg', 'link' => 'mannschaft?team=FC-Augsburg&id=167'],
    ['teamname' => 'TSG 1899 Hoffenheim', 'link' => 'mannschaft?team=TSG-1899-Hoffenheim&id=533'],
    ['teamname' => 'FC St. Pauli', 'link' => 'mannschaft?team=fc-st-pauli&id=35'],
    ['teamname' => '1. FC Heidenheim', 'link' => 'mannschaft?team=1-fc-heidenheim-1846&id=2036'],
    ['teamname' => 'Holstein Kiel', 'link' => 'mannschaft?team=Holstein-Kiel&id=269'],
    ['teamname' => 'VfL Bochum', 'link' => 'mannschaft?team=VfL-Bochum&id=80']
];

foreach ($teams as $team) {
    echo "<tr><td><a href='" . $team['link'] . "' style='display: flex; justify-content: center; color: black; text-decoration: none;' onmouseover='this.style.color=\"red\"' onmouseout='this.style.color=\"black\"'>" . $team['teamname'] . "</a></td></tr>";
}
echo "</table>";

 