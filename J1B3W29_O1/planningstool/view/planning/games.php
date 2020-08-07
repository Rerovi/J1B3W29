<div class="gamePage">
        <?
        foreach ($games as $game) {
            echo "<div class='gameTab'><div class='insideTab'>";
            echo "<h2>".$game["name"] . "</h2><br>";
            ?>
            <a href="<? echo $game['url'];?>" title="Link naar <? echo $game['name'];?> info pagina">
            <img src="<?php echo URL ?>/images/<?php echo $game['image']; ?>" alt="Game Image" width="200" height="200">
            </a>
            <?
            echo $game["description"];
            echo "</div></div>";
        }
        ?>
    </div>
