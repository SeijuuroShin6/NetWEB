<?php
// Requires
require_once '../model/contact_model.php';
require_once '../useful/regex.php';
require_once '../useful/Contact_formValidation.php';
require_once '../useful/function.php';



// Start of the Session
session_start();


// Checking form forms
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$Contact = new Contact();



    
    
    if (!empty($_POST['firstName'])) {
    if (preg_match($regex['firstName'], $_POST['firstName'])) {
    $Contact->firstName = clean($_POST['firstName']);
    } 
    else {
    $errors['firstName'] = CONTACT_FIRSTNAME_ERROR_INVALID;
    }
    } 
    else {
    $errors['firstName'] = CONTACT_FIRSTNAME_ERROR_EMPTY;
    }
    
    
    
    if (!empty($_POST['lastName'])) {
    if (preg_match($regex['lastName'], $_POST['lastName'])) {
    $Contact->lastName = clean($_POST['lastName']);
    } 
    else {
    $errors['lastName'] = CONTACT_LASTNAME_ERROR_INVALID;
    }
    } 
    else {
    $errors['lastName'] = CONTACT_LASTNAME_ERROR_EMPTY;
    }



    if (!empty($_POST['email'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $Contact->email = clean($_POST['email']);
    } 
    else {
    $errors['email'] = CONTACT_EMAIL_ERROR_INVALID;
    }
    } 
    else {
    $errors['email'] = CONTACT_EMAIL_ERROR_EMPTY;
    }



    if (!empty($_POST['subject'])) {
    $Contact->subject = clean($_POST['subject']);
    }
    else {
    $errors ['subject'] = CONTACT_SUBJECT_ERROR_EMPTY;
    }



    if (!empty($_POST['message'])) {
    $Contact->message = clean($_POST['message']);
    }
    else {
    $errors ['message'] = CONTACT_MESSAGE_ERROR_EMPTY;
    }



        

if (empty($errors)) {
    if($Contact->create()) {
    $success = CONTACT_ADD_SUCCESS;
    } else {
    $errors['add'] = CONTACT_ADD_ERROR;
    }
  }
}





require_once '../../NETWEB/views/contact.php';