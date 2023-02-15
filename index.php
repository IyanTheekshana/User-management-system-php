<?php
  require_once 'functions.php';
  include 'view/top.php';
  include 'view/navbar.php';
?>


<main role="main" class="container">
  <?php 
    $action = getParam('action');
    switch($action){
      case 'insert': 
        break;

      default:
        $users = getUsers();
        require_once 'view/usersList.php';
        break;
    }
  ?>
</main>

<?php
require_once 'view/footer.php';
?>