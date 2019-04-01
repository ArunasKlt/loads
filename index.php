<?php

require "header.php";

?>

<main>
  <?php
if(isset($_SESSION['user'])){
  
  echo '<p style = "background-color: red;">You ar logged in !</p>';

}
  else {
  echo '<p style = "background-color: lightblue;">You ar logged out !</p>';
}
  ?>
 
</main>

</body>
</html>
