<?php
              
if(isset($_POST['lotID']))
{
   $data=$_POST['lotID'];
   $fp = fopen('lotID.txt', 'w');
   fwrite($fp, $data);
   fclose($fp);
}
?>

<!DOCTYPE html>
<html>
<body>
  <form method="post">
    <input type="text" style="display: none" name="lotID"><br>
    <input type="submit" style="display: none">
  </form>
</body>
</html>
