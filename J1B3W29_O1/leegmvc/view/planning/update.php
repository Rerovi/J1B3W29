<div class="createTab">
    <div class="insideTab">
        <form method="POST" action="<?= URL ?>/planning/updatePlanning">
            <input type="hidden" name="id" value="<?= $edit["id"] ?>">
            <label>Game: </label>
            <select id="inputGame" name="game">
                <?
                foreach ($data["games"] as $game) {
                    echo "<option ";

                    if ($game["id"] === $data["edit"]["game"]) {
                        echo "selected";
                    }

                    echo " value=" . $game ["id"] . ">" . $game ["name"] . "</option>";
                }
                ?>
            </select><br>
            <label>Uitlegger: </label>
            <input type="text" id="inputName" name="explainer" value="<?= $edit["explainer"] ?>"><br>
            <label>Datum: </label>
            <input type="date" id="inputDate" name="date" value="<?= $edit["date"] ?>"><br>
            <label>Tijd: </label>
            <input type="time" id="inputTime" name="start" value="<?= $edit["start"] ?>"><br>
            <label>Spelers: </label>
            <textarea id="inputPlayers" name="players" rows="3" cols="26"><?= $edit["players"] ?></textarea><br>
            <input id="inputSubmit" type="submit" value="Pas aan!">
        </form>
    </div>
</div>


