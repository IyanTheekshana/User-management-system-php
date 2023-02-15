<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
  <a class="navbar-brand" href="#">UMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <?php 
    $currentUrl = $_SERVER['PHP_SELF'];
    ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php 
        $activeIndex = (stripos($currentUrl, 'index') && empty($_GET['action']));
        $class = $activeIndex ?  'active' :  '';
      ?>
      <li class="nav-item ml-3 <?=$class?>">
        <a class="nav-link" href="index.php">Home 
            <?php if($activeIndex) {?>
            <span class="sr-only">(current)</span>
            <?php } ?>
        </a>
      </li>
      <?php 
        $activeIndex = (!empty($_GET['action']) && $_GET['action'] === 'insert');
        $class = $activeIndex ?  'active' :  ''; 
      ?>
      <li class="nav-item ml-3 <?=$class?>">
        <a class="nav-link" href="index.php?action=insert">New User</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2  ml-3 " type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 ml-3" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>