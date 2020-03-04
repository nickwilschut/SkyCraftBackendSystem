<?php

function getAllEmployees(){
  // Met het try statement kunnen we code proberen uit te voeren. Wanneer deze
  // mislukt kunnen we de foutmelding afvangen en eventueel de gebruiker een
  // nette foutmelding laten zien. In het catch statement wordt de fout afgevangen
   try {
       // Open de verbinding met de database
       $conn=openDatabaseConnection();
   
       // Zet de query klaar door middel van de prepare method
       $stmt = $conn->prepare("SELECT * FROM employees");

       // Voer de query uit
       $stmt->execute();

       // Haal alle resultaten op en maak deze op in een array
       // In dit geval is het mogelijk dat we meedere medewerkers ophalen, daarom gebruiken we
       // hier de fetchAll functie.
       $result = $stmt->fetchAll();

   }
   // Vang de foutmelding af
   catch(PDOException $e){
       // Zet de foutmelding op het scherm
       echo "Connection failed: " . $e->getMessage();
   }

   // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
   // van de server opgeschoond blijft
   $conn = null;

   // Geef het resultaat terug aan de controller
   return $result;
}

function getEmployee($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
 
        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
        // WHERE clause toe (WHERE id = :id. Deze vullen we later in de code
        $stmt = $conn->prepare("SELECT * FROM employees WHERE id = :id");
        // Met bindParam kunnen we een parameter binden. Dit vult de waarde op de plaats in
        // We vervangen :id in de query voor het id wat de functie binnen is gekomen.
        $stmt->bindParam(":id", $id);

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;
 
    // Geef het resultaat terug aan de controller
    return $result;
 }

function createEmployee($data){
  //var_dump($data);
    // Maak hier de code om een medewerker toe te voegen
    try {
    $conn=openDatabaseConnection();
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO employees (Name, Age) VALUES (:name, :age)";
    // use exec() because no results are returned
    $query = $conn->prepare($sql);
   $query->bindParam(':name', $_POST["name"]);
   $query->bindParam(':age', $_POST["age"]);

   $query->execute();
 }
 catch(PDOException $e){

        
    }
   // getAllEmployees();
}


 function updateEmployee($data){
    // Maak hier de code om een medewerker te bewerken

  try {
  $conn=openDatabaseConnection();
 
  $sql = "UPDATE employees SET Name=:name, Age=:age WHERE id=:id";

 $query = $conn->prepare($sql);
   $query->bindParam(':name', $_POST["name"]);
   $query->bindParam(':age', $_POST["age"]);
   $query->bindParam(':id', $_POST["id"]);

   $query->execute();
 }
    catch(PDOException $e){


        
    }
}


 function deleteEmployee($id){
    // Maak hier de code om een medewerker te verwijderen
  
  try {
  $conn=openDatabaseConnection();
 
  $sql = "DELETE FROM employees WHERE id=:id";

 $query = $conn->prepare($sql);
   $query->bindParam(':id', $_POST["id"]);

   $query->execute();
 }
    catch(PDOException $e){
 


    }
}

?>