<?php
    // include("validation.php")
    include_once("functions.php");

    //1.inputs should not be empty and not null
    if  (empty($firstname) || isEmpty($firstname)){
        echo "First name should be not empty and not null <br> <br>";
    }
    if (empty($lastname) || isEmpty($lastname)) {
        echo "Last name should be not empty and not null <br> <br>";
    }
    if (empty($middlename) || isEmpty($middlename)) {
        echo "Middle name should be not empty and not null <br> <br>";
    }
    if (empty($address) || isEmpty($address)) {
        echo "Address should be not empty and not null <br> <br>";
    }
    if (empty($dob) || isEmpty($dob)) {
        echo "Date of birth should be not empty and not null <br> <br>";
    }
    if (empty($pob) || isEmpty($pob)) {
        echo "Place of birth should be not empty and not null <br> <br>";
    }
    if (empty($gender) || isEmpty($gender)) {
        echo "Gender should be not empty and not null <br> <br>";
    }
    if (empty($guardian) || isEmpty($guardian)) {
        echo "Guardian should be not empty and not null <br> <br>";
    }
    if (empty($contact) || isEmpty($contact)) {
        echo "Contact number should be not empty and not null <br> <br>";
    }
    if (empty($status) || isEmpty($status)) {
        echo "Civil status should be not empty and not null <br> <br>";
    }
    if (empty($year) || isEmpty($year)) {
        echo "Year level should be not empty and not null <br> <br>";
    }
    if (empty($course) || isEmpty($course)) {
        echo "Course should be not empty and not null <br> <br>";
    }
    if (empty($sy) || isEmpty($sy)) {
        echo "School year should be not empty and not null <br> <br>";
    }
    if (empty($email) || isEmpty($email)) {
        echo "Email should be not empty and not null <br> <br>";
    }


    //3.contact number should only be a number and not a string
    if (isContactNumber($contact)){
        echo "Contact number must be number. <br> <br>";
    }

    //4.contact number should follow the following pattern
    if (isValidContact($contact)){
        echo "Invalid contact number format <br> <br>";
    }
    
    //5.
    if (isNameLenght($firstname) || isNameLenght($lastname)) {
        echo "First/Last name is too short. <br> <br>";
    }

    //6 and 7
    if  (isStartWithSpecialChar($firstname) || isStartWithNumber($firstname)){
        echo "First name should not start with a special character, number or spaces.<br> <br>";
    }
    if (isStartWithSpecialChar($lastname) || isStartWithNumber($lastname)) {
        echo "Last name should not start with a special character, number or spaces.<br> <br>";
    }
    if (isStartWithSpecialChar($middlename) || isStartWithNumber($middlename)) {
        echo "Middle name should not start with a special character, number or spaces.<br> <br>";
    }
    if (isStartWithSpecialChar($address) || isStartWithNumber($address)) {
        echo "Address should not start with a special character, number or spaces.<br> <br>";
    }
    if (isStartWithSpecialChar($pob)) {
        echo "Place of birth should not start with a special character or spaces<br> <br>";
    }
    if (isStartWithSpecialChar($gender) || isStartWithNumber($gender)) {
        echo "Gender should not start with a special character, number or spaces.<br> <br>";
    }
    if (isStartWithSpecialChar($guardian) || isStartWithNumber($guardian)) {
        echo "Guardian should not start with a special character, number or spaces.<br> <br>";
    }
    if (isStartWithSpecialChar($status) || isStartWithNumber($status)) {
        echo "Civil status should not start with a special character, number or spaces.<br> <br>";
    }
    if (isStartWithSpecialChar($year) || isStartWithNumber($year)) {
        echo "Year level should not start with a special character, number or spaces.<br> <br>";
    }
    if (isStartWithSpecialChar($course) || isStartWithNumber($course)) {
        echo "Course should not start with a special character, number or spaces.<br> <br>";
    }
    if (isStartWithSpecialChar($sy)) {
        echo "School year should not start with a special character <br> <br>";
    }
    if (isStartWithSpecialChar($email) || isStartWithNumber($email)) {
        echo "Email should not start with a special character, number or spaces.<br> <br>";
    }
    //8.
    if (isContainHtmlTags($firstname) || isContainHtmlTags($lastname) || isContainHtmlTags($middlename)|| isContainHtmlTags($address) 
    || isContainHtmlTags($contact) || isContainHtmlTags($pob) || isContainHtmlTags($guardian)|| isContainHtmlTags($status) 
    || isContainHtmlTags($year)|| isContainHtmlTags($email)){
        echo "HTML Tags are not allowed. <br> <br>";
    }

    //9.
    if (isEmailValid($email)){
        echo "Invalid email format. <br> <br>";
    }
?>