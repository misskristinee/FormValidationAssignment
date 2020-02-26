<?php
    // include("templates/header.php");
    // include("templates/navigation.php");
    
    // include("templates/footer.php");
    include("utilities/functions.php");

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $middlename = $_POST["middlename"];
    $address = $_POST["address"];
    $dob= $_POST["dob"];
    $pob= $_POST["pob"];
    $gender = $_POST['gender'];
    $guardian = $_POST['guardian'];
    $contact = $_POST["contact"];
    $status = $_POST["status"];
    $year = $_POST["year"];
    $course = $_POST["course"];
    $sy = $_POST["sy"];
    $email = $_POST["email"];

    include("utilities/validation.php");

    echo "<br><br><br><br><br><br>";
    echo "Firstname: $firstname <br>";
    echo "Lastname: $lastname <br>";
    echo "Middlename: $middlename <br>";
    echo "Address: $address <br>";
    echo "Date of Birth: $dob <br>";
    echo "Place of Birth: $pob <br>";
    echo "Gender: $gender <br>";
    echo "Guardian: $guardian <br>";
    echo "Contact Number: $contact <br>";
    echo "Civil Status: $status <br>";
    echo "Year Level: $year <br>";
    echo "Course: $course <br>";
    echo "School Year: $sy <br>";
    echo "Email: $email <br>";
    
    

?>