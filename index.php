<?php
  require_once 'functions.php';
  include 'view/top.php';
  include 'view/navbar.php';
?>


<main role="main" class="container">
  <?php 
    $action = getParam('action');
    $page = $_SERVER['PHP_SELF'];
    
    switch($action){
      case 'insert': 
        break;

      default:
        $orderBy = getParam('orderBy','id');
        $orderDir = getParam('orderDir','ASC');
        if(!in_array($orderBy, getConfig('orderByColums'))){
          $orderBy = 'id';
        }
        $params = [
          'orderBy' => $orderBy,
          'orderDir' => $orderDir, 
        ];
        $users = getUsers($params);
        require_once 'view/usersList.php';
        break;
    }
  ?>
</main>

<?php
require_once 'view/footer.php';
?>