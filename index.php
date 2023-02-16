<?php
  require_once 'functions.php';
  include 'view/top.php';
  $pageUrl = $_SERVER['PHP_SELF'];
  $orderBy = getParam('orderBy','id');
  $orderDir = getParam('orderDir','ASC');
  $recordPerPage = getParam('recordPerPage',getConfig('recordPerPage'));
  $recordPerPageOptions = getConfig('recordPerPageOptions', [5,10,20,30,50,100]);
  $search = getParam('search','');
  $orderByColums = getConfig('orderByColums',['id', 'email', 'username', 'fiscalcode', 'age']);
  $page = getParam('page',1);
  include 'view/navbar.php';
?>


<main role="main" class="container shadow-sm">
  <?php 
    $action = getParam('action');
    
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
          'search' => $search,
          'page' => $page
        ];

        $orderByParams = $orderByNavigator = $params;
        unset($orderByParams['orderBy']);
        unset($orderByParams['orderDir']);
        unset($orderByNavigator['page']);
        $orderByQueryString = http_build_query($orderByParams, "&amp;");
        $navOrderByQueryString = http_build_query($orderByNavigator, "&amp;");


        $totalUsers = countUsers($params);
        $numPages = ceil($totalUsers/$recordPerPage);
        $users = getUsers($params);
        require_once 'view/usersList.php';
        break;
    }
  ?>
</main>

<?php
require_once 'view/footer.php';
?>