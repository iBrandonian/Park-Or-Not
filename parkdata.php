<?php
              
if(isset($_POST['parkdata']))
{
   $data=$_POST['parkdata'];
   $fp = fopen('parkdata.txt', 'w');
   fwrite($fp, $data);
   fclose($fp);
}
?>

<!DOCTYPE html>
<html>
<body>
  <form method="post">
    <input type="text" style="display: none" name="parkdata"><br>
    <input type="submit" style="display: none">
  </form>
</body>
</html>
