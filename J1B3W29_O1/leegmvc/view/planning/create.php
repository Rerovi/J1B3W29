<div class="createTab">
<div class="insideTab">
<form  method="post" action="<?=URL?>planning/insert/">
<label>Game: </label>
        <select name="game">
            <?
            foreach ($games as $game) {
                echo "<option value='$game[id]'>$game[name](Spelers:$game[min_players]-$game[max_players])</option>";
            }
            ?>
        </select><br>
            <label>Uitlegger: </label>
        <input type="text" name="explainer" value="<? if(isset($_POST['explainer'])){echo $_POST['explainer'];}; ?>"><br>
            <label>Datum: </label>
        <input type="date" name="date" value="<? if(isset($_POST['date'])){echo $_POST['date'];}; ?>"><br>
            <label>Tijd: </label>
        <input type="time" name="start"  value="<? if(isset($_POST['start'])){echo $_POST['start'];}; ?>"><br>
            <label>Spelers: </label>
        <textarea name="players" rows="3" cols="26"><? if(isset($_POST['players'])){echo $_POST['players'];}; ?></textarea><br>
<input type="submit" value="Maak aan!">
</form>
</div>
</div>
