<?php

// Get all function.
function getAllUsers() {
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM users");

        $stmt->execute();
        $result = $stmt->fetchAll();
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
};


// Get 1 function.
function getUsers($id) {
    try {
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");

        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $result = $stmt->fetch();
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
};

// Create function
function createUsers($data) {
    $table = $_POST['table'];
    $message = Null;

    // Check if all required fields are send trough.
    if ($_POST["id"] || $_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();

            // Insert Query.
            $sql = "INSERT INTO $table (Name, Age) VALUES (:name, :age)";
            $query = $conn->prepare($sql);
            $query->bindParam(':name', $_POST["name"]);
            $query->bindParam(':age', $_POST["age"]);

            $query->execute();
        }
        catch(PDOException $e){   
            echo "Connection failed: " . $e->getMessage();
        }
    }
};

// Update function.
function updateUsers($data) {
    $table = $_POST['table'];
    $message = Null;

    // Check if all required fields are send trough.
    if ($_POST["id"] || $_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();
           
            // Update Query.
            $sql = "UPDATE $table SET Name=:name, Age=:age WHERE id=:id";
            $query = $conn->prepare($sql);
            $query->bindParam(':name', $_POST["name"]);
            $query->bindParam(':age', $_POST["age"]);
            $query->bindParam(':id', $_POST["id"]);

            $query->execute();
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    } else {
        // Set error message.
        $message = "Failed to update";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
};

// Delete function.
function deleteUsers($id){
    $table = $_POST['table'];
    $message = Null;

    // Check if all required fields are send trough.
    if ($_POST["id"] || $_POST["table"] != '') {
        try {
            $conn=openDatabaseConnection();
       
            // Delete Query.
            $sql = "DELETE FROM $table WHERE id=:id";
            $query = $conn->prepare($sql);
            $query->bindParam(':id', $_POST["id"]);

            $query->execute();
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }  
    } else {
        // Set error message.
        $message = "Failed to delete";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
};

?>