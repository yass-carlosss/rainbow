<html>
<body align="center">
<p>Ticket:</p>
<?php
$genre = $_POST['genre'];
$name = $_POST['name'];
$email = $_POST['email'];
$time = time();
?>
<p><?php echo 'Votre nom :' . "\r\n" . $name . "\r\n" ; ?> </p>
<p><?php echo 'Votre email :' . "\r\n" . $email . "\r\n" ; ?> </p>
<p><?php echo 'Date d\' arrivée : '. date('Y-m-d H:i:s', $time) . "\n" ; ?> </p>
<p><?php if ($genre == '1 jours') {
   echo 'Date limite de sortie : '. date('Y-m-d H:i:s', strtotime('+1 days')) ."\n";
} elseif ($genre == '2 jours') {
  echo 'Date limite de sortie : '. date('Y-m-d H:i:s', strtotime('+2 days')) ."\n";
} elseif ($genre == '3 jours') {
  echo 'Date limite de sortie : '. date('Y-m-d H:i:s', strtotime('+3 days')) ."\n";
} elseif ($genre == '4 jours') {
  echo 'Date limite de sortie : '. date('Y-m-d H:i:s', strtotime('+4 days')) ."\n";
} elseif ($genre == '5 jours') {
  echo 'Date limite de sortie : '. date('Y-m-d H:i:s', strtotime('+5 days')) ."\n";
} elseif ($genre == '6 jours') {
  echo 'Date limite de sortie : '. date('Y-m-d H:i:s', strtotime('+6 days')) ."\n";
} elseif ($genre == '7 jours') {
  echo 'Date limite de sortie : '. date('Y-m-d H:i:s', strtotime('+7 days')) ."\n";
} else {
   echo 'Date limite de sortie : '. date('Y-m-d H:i:s', strtotime('+60 days')) ."\n";
}
?> 
</p>
</body>
</html>