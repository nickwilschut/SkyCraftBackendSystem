<?php
require(ROOT . "model/EmployeeModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $employees = getAllEmployees();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('employee/index', ['employees' => $employees]);
}

function create(){

    createEmployee($_POST);
    render('employee/create');
}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    $newEmployee = createEmployee($data);
    //2. Bouw een url op en redirect hierheen
    header("Location: index");



}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('employee/update', ['employee' => getEmployee($id)]);
}

function update(){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $updateEmployee = updateEmployee($data);
    //2. Bouw een url en redirect hierheen
    header("Location: index");
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $getEmployee = getEmployee($id);
    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('employee/delete', ['employee' => $getEmployee]);

}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteEmployee($id);
	//2. Bouw een url en redirect hierheen
    header("Location: index");
    
}
?>