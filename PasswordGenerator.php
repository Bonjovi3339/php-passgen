Example Usage:
1 <?php
2 require_once('PasswordGenerator.php');
3 $ascii = PasswordGenerator::getASCIIPassword(64);
4 $hex = PasswordGenerator::getHexPassword(64);
5 $alpha = PasswordGenerator::getAlphaNumericPassword(64);
6 $custom = PasswordGenerator::getCustomPassword(array('a', 'b'), 64);
7 echo $ascii, "\n", $hex, "\n", $alpha, "\n", $custom, "\n";
8 ?>
