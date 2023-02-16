<?php
  require_once 'functions.php';
  include 'view/top.php';
  $orderBy = getParam('orderBy','id');
  $orderDir = getParam('orderDir','ASC');
  $recordPerPage = getParam('recordPerPage',getConfig('recordPerPage'));
  $recordPerPageOptions = getConfig('recordPerPageOptions', [5,10,20,30,50,100]);
  $search = getParam('search','');
  $orderByColums = getConfig('orderByColums',['id', 'email', 'username', 'fiscalcode', 'age']);
  include 'view/navbar.php';
?>


<main role="main" class="container shadow-sm">
  <?php 
    $action = getParam('action');
    $page = $_SERVER['PHP_SELF'];
    
    switch($action){
      case 'insert': 
        break;

      default:

        if(!in_array($orderBy, getConfig('orderByColums'))){
          $orderBy = 'id';
        }
        $params = [
          'orderBy' => $orderBy,
          'orderDir' => $orderDir, 
          'recordPerPage' => $recordPerPage,
          'search' => $search 
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