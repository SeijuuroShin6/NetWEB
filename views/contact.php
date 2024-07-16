<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/contact.css">
    <link rel="stylesheet" href="/assets/fonts/font.css">
    <link rel="stylesheet" href="/assets/media/mediactc.css">
    <a href="https://icons8.com/icon/62033/planète-mars"></a><a href="https://icons8.com"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title> Contact NetWEB</title>
</head>
<header>



<!--Nav Bar-->
<nav id="nav"> 
  <a href="/index.html"> 
    <h1>NetWEB</h1> 
  </a>
<ul id="ul">
    <li id="li"><a href="/index.html">Accueil</a></li>
    <li id="li"><a href="/views/wwa.html">Qui Sommes-Nous ?</a></li>
    <li id="li"><a id="on"href="/views/contact.php">Contact</a></li>
    <li id="li"><a href="https://anydesk.com/fr/downloads/mac-os">Support</a></li>
</ul>
<div id="burger"></div>
</nav>
<!--End Of Nav Bar-->



<!--Header-->
<div class="container-logs"> 
 
  <div data-aos="zoom-in-right" id="BG1">
  <img src="/assets/img/CTCB1.jpg" height="500" width="800">
  </div>
  
  <div data-aos="zoom-in-left" id="contact-container"> 
      <h2 id="first-title">Contactez-Nous</h2>
      <img id="msg-icon" src="/assets/icons/contact-edit-contact-svgrepo-com.svg" height="250" width="250">
  </div>
  
  </div>
  
</header>
<!--End Of Header-->



<!--Body-->
<body> 
  


<!--First Container-->
<div data-aos="zoom-in" class="content">
<h2 id="second-title">Contactez NetWEB</h2>  
N'hésitez pas à contacter NetWEB à Compiègne pour discuter des solutions que nous pouvons vous offrir pour vos projets actuels et à venir. Nous sommes enthousiastes à l'idée d'échanger avec vous et de trouver ensemble des solutions adaptées à vos besoins.</div>
<!--End Of First Container-->



<!--Contact Form-->



<?php if (isset($success)) { ?>
        <p id="success-messages"><?= $success ?></p>

    <?php } else if (isset($errors['add'])) { ?>
       <p id="success-messages"><?= $errors['add'] ?></p>
<?php } ?>



<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="form"> 

<form action="/controller/contactFormController.php" method="POST">


<?php if (isset($errors['firstName'])) { ?>
<p id="message-form"><?= $errors['firstName'] ?></p>
<?php } ?>
<label for="firstName">Nom</label>  
<input name="firstName" type="firstName" id="firstName" required placeholder="Jin">



<?php if (isset($errors['lastName'])) { ?>
<p id="message-form"><?= $errors['lastName'] ?></p>
<?php } ?>
<label for="lastName">Prénom</label>  
<input name="lastName" type="lastName" id="lastName" required placeholder="Sakai">



<?php if (isset($errors['email'])) { ?>
<p id="message-form"><?= $errors['email'] ?></p>
<?php } ?>
<label for="email">Adresse mail</label>  
<input name="email" type="email" id="email" required placeholder="example@example.com">



<?php if (isset($errors['subject'])) { ?>
<p id="message-form"><?= $errors['subject'] ?></p>
<?php } ?>
<label for="subject">Objet</label>  
<input name="subject" type="subject" id="subject" required>



<?php if (isset($errors['message'])) { ?>
<p id="message-form"><?= $errors['message'] ?></p>
<?php } ?>
<label for="message">Message</label>  
<textarea name="message" id="message" for="message" rows="8"></textarea>


<input type="submit" id="submit" value="Envoyer"></input>


</form>


</div>
<!--End Of Contact Form-->



<!--Maps-->
<div id="maps"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.795516693145!2d103.78826727447208!3d1.2973778617432927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1b25dd8c2d05%3A0xb537311169cedf5b!2sRazerStore%20Singapore!5e0!3m2!1sfr!2sfr!4v1710554567341!5m2!1sfr!2sfr" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--End Of Maps-->



<script src="/assets/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
<!--End Of Body-->



<!--Footer-->
<footer>


<div id="nav-footer"> 

<ul id="footer">
  <h4> Nos Services</h4>

  <li id="footer-list"> <img id="footer-icons" src="/assets/icons/vector-svgrepo-com.svg" height="20" width="20"> <a id="footer-link" href="#adsr-mpi">Administration de systèmes et réseaux informatiques</a> </li>
  <li id="footer-list"> <img id="footer-icons" src="/assets/icons/cloud-computing-computer-svgrepo-com.svg" height="20" width="20"> <a id="footer-link" href="#adsr-mpi">Maintenance de parcs informatiques</a> </li>
  <li id="footer-list"> <img id="footer-icons" src="/assets/icons/sitemap-svgrepo-com.svg" height="20" width="20"> <a id="footer-link" href="#fsi-dea">Fourniture de solutions informatiques</a> </li>
  <li id="footer-list"> <img id="footer-icons" src="/assets/icons/networking-connector-svgrepo-com.svg" height="20" width="20"> <a id="footer-link" href="#fsi-dea">Dépannage et assistance</a> </li>
  <li id="footer-list"> <img id="footer-icons" src="/assets/icons/coding-svgrepo-com.svg" height="20" width="20"> <a id="footer-link" href="#cdsi">Création de site internet</a> </li>

</ul>


<div id="contact">

<ul id="footer">   
  <h4>Contactez-nous</h4>

  <li id="footer-list"> <img id="footer-icons" src="/assets/icons/location-pin-alt-svgrepo-com.svg" height="20" width="20"> 1 One-north Cres</li>
  <li id="footer-list"> <img id="footer-icons" src="/assets/icons/map-svgrepo-com.svg" height="20" width="20"> 138538 SINGAPORE</li>
  <li id="footer-list"> <a id="footer-link-phone" href="tel:0940139921"> <img id="footer-icons-phone" src="/assets/icons/phone-svgrepo-com.svg" height="20" width="20"></a> 09 40 13 99 21</li>
  <li id="footer-list"> <a id="footer-link-phone" href="mailto:0940139921"> <img id="footer-icons-phone" src="/assets/icons/mail-arrow-up-svgrepo-com.svg" height="20" width="20"></a> netweb@gmail.com</li>
</ul>

</div>


<div id="social-media">
  <h4 id="sm-title">Réseaux Sociaux</h4>
 
  <div class="sm">
    <a id="footer-link" href="#"> <img class="sm-icons" id="footer-icons" src="/assets/icons/sm icons/facebook-svgrepo-com.svg" height="40" width="40"> </a>
    <a id="footer-link" href="#"> <img class="sm-icons" id="footer-icons" src="/assets/icons/sm icons/twitter-154-svgrepo-com.svg" height="40" width="40"> </a>
    <a id="footer-link" href="#"> <img class="sm-icons" id="footer-icons" src="/assets/icons/sm icons/linkedin-svgrepo-com.svg" height="40" width="40"> </a>
  </div>

</div>



</div>


<div id="copyright-ml">

 <div id="copyright">  
   <p class="copyright-ml">© 2024 Property Of NetWEB - All Rights Reserved</p>
 </div>

   <div id="m"> 
     <p class="copyright-m">Legal Terms</p>
     <p class="copyright-m">Privacy Policy</p>
     <p class="copyright-m">Cookies Settings</p>
   </div>


</div>

</footer>
<!--End Of Footer-->
</html>