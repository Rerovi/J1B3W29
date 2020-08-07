<?php
function checkConnection()
{
    try {
        $conn = openDatabaseConnection();
        $stmt = $conn->prepare("SHOW TABLES");
        $stmt->execute();
        $stmt->fetchAll();

    } catch (Exception $e) {
        return false;
    }
    return true;
}

function getAllGames()
{
    $conn = openDatabaseConnection();
    $sql = "select * from games";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $games = $stmt->fetchAll();
    return $games;
}

function getSinglePlanning($id)
{
    $conn = openDatabaseConnection();
    $sql = "select * from persons  where id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $singlePlanning = $stmt->fetch();
    return $singlePlanning;
}

function insertPlanning($data)
{
    $conn = openDatabaseConnection();
    $start = $data['hour'] . ':' . $data['minute'];
    $stmt = $conn->prepare(" INSERT INTO persons (date,start,explainer,players,game) VALUES (:date, :start, :explainer, :players, :game) ");
    $stmt->bindParam(':game', $data["game"]);
    $stmt->bindParam(':explainer', $data["explainer"]);
    $stmt->bindParam(':start', $data["start"]);
    $stmt->bindParam(':date', $data["date"]);
    $stmt->bindParam(':players', $data["players"]);
    $stmt->execute();
}

function planningOphaal()
{
    $conn = openDatabaseConnection();
    $stmt = $conn->prepare("SELECT games.*,persons.* FROM games INNER JOIN persons ON persons.game = games.id WHERE persons.game = games.id ORDER BY persons.start DESC");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $planning = $stmt->fetchAll();
    return $planning;
}

function getPlanningId($id)
{
    $conn = openDatabaseConnection();
    $sql = "select id from persons  where id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $singlePlanningId = $stmt->fetch();
    return $singlePlanningId;
}

function removePlanning($id)
{
    $conn = openDatabaseConnection();
    $sql = "DELETE FROM `persons` WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

function bewerkPlanning($data)
{
    $conn = openDatabaseConnection();
    $sql = "UPDATE `persons` SET `start`= :start,`explainer`= :explainer,`players`= :players,`game`= :game, `date`= :date WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':start', $data["start"]);
    $stmt->bindParam(':date', $data["date"]);
    $stmt->bindParam(':explainer', $data["explainer"]);
    $stmt->bindParam(':players', $data["players"]);
    $stmt->bindParam(':game', $data["game"]);
    $stmt->bindParam(':id', $data["id"]);
    $stmt->execute();
}

function getTimes($data)
{
    try {
        $conn = openDatabaseConnection();
        $stmt = $conn->prepare("SELECT start FROM persons WHERE start = :start");
        $stmt->bindParam(':start', $data);
        $stmt->execute();
        $result = $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
}

function countPersons()
{
    try {
        $conn = openDatabaseConnection();
        $sql = "SELECT count(id) AS 'Aantal' FROM persons";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
}

function getGameName($id)
{
    try {
        $conn = openDatabaseConnection();
        $sql = "SELECT name FROM games WHERE id = (SELECT game FROM persons WHERE id = :id)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $data["id"]);
        $stmt->execute();
        $result = $stmt->fetch();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
}