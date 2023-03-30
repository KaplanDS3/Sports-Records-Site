<!-- Add functionality -->
<html><title>Contact</title></html>

<?php
include 'connect.php';
include 'header.php';
?>
<h1><b>Contact</b></h1>
<div class="heading-contact">If you are experiencing any issues with the website or you want to provide suggestions, please do not hesistate to contact us!</div>

<form method="post" action="contact.php">

<div class="flex-column" id="text-box">
    <div class="heading-subject"><b>Subject:</b></div>
    <textarea class="subject" name="subject" placeholder="Subject"></textarea>
    <div class="heading-body"><b>Body:</b></div>
    <textarea class="body" name="body" placeholder="Type Your Message..."></textarea>
  <button type="submit" class="submit">Send</button>
</div>



</form>



<?php
include 'footer.php';
?>