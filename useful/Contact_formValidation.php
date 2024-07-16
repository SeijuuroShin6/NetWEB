<?php
$errors = [];

// Contact Form Information

// firstName
define('CONTACT_FIRSTNAME_ERROR_EMPTY', 'Le nom est requis');
define('CONTACT_FIRSTNAME_ERROR_INVALID', 'Le nom est invalide. Il ne peut contenir que des lettres, des espaces, des tirets et des apostrophes');

// lastName
define('CONTACT_LASTNAME_ERROR_EMPTY', 'Le prénom est requis');
define('CONTACT_LASTNAME_ERROR_INVALID', 'Le prénom est invalide. Il ne peut contenir que des lettres, des espaces, des tirets et des apostrophes');

// Email
define('CONTACT_EMAIL_ERROR_EMPTY', 'L\'adresse mail est requise');
define('CONTACT_EMAIL_ERROR_INVALID', 'L\'adresse mail est invalide. Elle ne peut contenir que des lettres, des chiffres, des tirets, des underscores, des points et des arobases');

// Subject
define('CONTACT_SUBJECT_ERROR_EMPTY', 'Le sujet est requis');

// Message Content
define('CONTACT_MESSAGE_ERROR_EMPTY', 'Le message est requis');



// Contact Form
define('CONTACT_ADD_SUCCESS', 'Votre message a bien été envoyé');
define('CONTACT_ADD_ERROR', 'Une erreur est survenue lors de l\'envoie de votre message');