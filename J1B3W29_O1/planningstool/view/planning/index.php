<?
foreach ($planning as $item) {
    $timestamp = strtotime($item['start']) + 60 * $item['play_minutes'] + 60 * $item['explain_minutes'];
    $time = date('H:i', $timestamp);
    echo "<div class='planningTab'>";
    echo "<div class='insideTab'>"; ?>
    <img src="<? echo URL ?>/images/<? echo $item['image']; ?>" alt="images" width="200" height="200">
    <?
    echo "<p>Game: " . $item["name"] . "</p>";
    echo "<p>Uitlegger: " . $item["explainer"] . "</p>";
    echo "<p>Datum: " . $item["date"] . "</p>";
    echo "<p>Starttijd: " . date('G:i', strtotime($item["start"])) . "</p>";
    echo "<p>Eindtijd: " . $time . "</p>";
    echo "<p>Spelers: " . $item["players"] . "</p>";
    echo "<a href=\" " . URL . "planning/editPlanning/" . $item["id"] . "\">Edit!</a><br>";
    echo "<a href=\" " . URL . "planning/deletePlanning/" . $item["id"] . "\">Remove!</a><br><br><br>";
    echo "</div>";
    echo "</div>";
}
?>

