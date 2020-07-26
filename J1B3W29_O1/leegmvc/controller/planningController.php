    <?php
    require(ROOT . "model/planningModel.php");

    function addPlanning() {
        $games = getAllGames();
        render('planning/create', ['games' => $games]);
    }
    function insert() {
        $start = getTimes($_POST["start"]);
        $amount = countPersons();
        if ($start != NULL) {
            if ($amount["Aantal"] == 10) {
                echo "Maximaal aantal spellen ingeplanned.<br>";
                header('refresh:2;URL='.URL.'/planning/');
            }
            echo "Kies een andere tijd, deze tijd is al ingeplanned.";
            header('refresh:1;URL='.URL.'/planning/');
        } else {
            if ($amount["Aantal"] == 10) {
                echo "Maximaal aantal spellen ingeplanned.<br>";
                header('refresh:2;URL='.URL.'/planning/');
            } else {
                insertPlanning($_POST);
                header('Location: ' . URL . '/planning/index');
            }
        }
    }
    function index() {
        $planning = planningOphaal();
        foreach ($planning as $item) {
            $gameName = getGameName($item["id"]);
        }
        render('planning/index', ['planning' => $planning, 'gamename' => $gameName]);
    }
    function deletePlanning($id) {
        $delete = getPlanningId($id);
        render('planning/remove', $delete);
    }
    function destroyPlanning($id) {
        removePlanning($id);
        header('refresh:1;URL='.URL.'/planning/');
    }
    function editPlanning($id) {
        $edit = getSinglePlanning($id);
        $games = getAllgames();
        render('planning/update', ['edit' => $edit, "games" => $games]);
    }
    function updatePlanning() {
        bewerkPlanning($_POST);
        echo "Bewerking succesvol uitgevoerd!";
        header('refresh:1;URL='.URL.'/planning/');
    }
    function games() {
        $games = getAllGames();
        render('planning/games', ['games' => $games]);
    }


