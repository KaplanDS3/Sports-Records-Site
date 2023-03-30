<!-- Add functionality -->
<html><title>Contact</title></html>

<?php
include 'connect.php';
include 'header.php';
?>

<form method="post" action="contact.php">

<h1><b>Contact</b></h1>
<div class="heading-contact">If you experience any issues with the website or you want to provide suggestions, please do not hesistate to contact us!</div>
<div class="flex-column" id="text-box">
    <div class="heading-subject"><b>Subject:</b></div>
    <textarea class="subject" name="subject"></textarea>
    <div class="heading-body"><b>Body:</b></div>
    <textarea class="body" name="body"></textarea>
  <input class="submit" type="submit">
</div>



</form>



<?php
include 'footer.php';
?>