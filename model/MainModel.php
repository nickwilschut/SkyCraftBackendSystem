<?php

//Get all function, to get all row's in given table.
function getAll() {
    try {
        $conn=openDatabaseConnection();
        //Prepare query.
        $stmt = $conn->prepare("SELECT * FROM :table");

        //Execute query
        $stmt->execute();

        $result = $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
    return $result;
}

//Get function, to get requested row in the given table.
function get($id) {
    try {
        $conn=openDatabaseConnection();
        //Prepare query.
        $stmt = $conn->prepare("SELECT * FROM :table WHERE id = :id");
        $stmt->bindParam(":id", $_POST["id"]);

        //Execute query
        $stmt->execute();

        $result = $stmt->fetch();
 
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
  
    $conn = null;
    return $result;
}

//Create function, to create new row in the given table.
function create($data) {
    try {
        $conn=openDatabaseConnection();
        //Prepare query.
        $sql = "INSERT INTO :table (Name, Age) VALUES (:name, :age)";

        $query = $conn->prepare($sql);
        $query->bindParam(':name', $_POST["name"]);
        $query->bindParam(':age', $_POST["age"]);

        //Execute query
        $query->execute();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();        
    }

    $conn = null;
    return $result;
}

//Update function to update the given cells in the given table.
function update($data) {
    try {
        $conn=openDatabaseConnection();
        //Prepare query.
        $sql = "UPDATE :table SET Name=:name, Age=:age WHERE id=:id";

        $query = $conn->prepare($sql);
        $query->bindParam(':name', $_POST["name"]);
        $query->bindParam(':age', $_POST["age"]);
        $query->bindParam(':id', $_POST["id"]);

        //Execute query
        $query->execute();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
    return $result;
}

//Delete function to delete the given row in the given table.
function delete($id) {
    try {
        $conn=openDatabaseConnection();
        //Prepare query.
        $sql = "DELETE FROM :table WHERE id=:id";

        $query = $conn->prepare($sql);
        $query->bindParam(':id', $_POST["id"]);

        //Execute query
        $query->execute();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
    return $result;
}

//Delete all row's in given table.
function deleteAll() {
    try {
        $conn=openDatabaseConnection();
        //Prepare query.
        $stmt = $conn->prepare("DELETE * FROM :table");

        //Execute query
        $stmt->execute();

        $result = $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
    return $result;
}







//  <==--SkyCraft Productions - All Right's reserved--==>

?>