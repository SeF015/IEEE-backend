<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
<?php
  $admins = ["Osama", "Ahmed", "Sayed"];

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['user']==="Osama") {
        echo"The Request Method Is Post And Username Is Osama <br> This Username Osama Is Admin";
    }
    elseif ($_POST['user']==="Ahmed") {
        echo"The Request Method Is Post And Username Is Ahmed <br> This Username Ahmed Is Admin";
    }
    elseif($_POST['user']==="Sayed"){
        echo"The Request Method Is Post And Username Is Sayed <br> This Username Sayed Is Admin ";
    }
  }
  
  

?>