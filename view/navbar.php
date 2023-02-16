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
        <a class="nav-link" href="index.php">Users 
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
    <form class="form-inline my-2 my-lg-0" method="GET" action="<?=$currentUrl?>" id="searchForm">

      <select id="orderBy" name="orderBy" class="form-control shadow ml-1" 
        onchange="document.forms.searchForm.submit()">
          <?php
          foreach($orderByColums as $value){ ?>
            <option <?=$orderBy == $value ? 'selected': ''?> value="<?=$value?>"><?=$value?></option>
        <?php }?>
      </select>

      <select id="orderDir" name="orderDir" class="form-control shadow ml-1" 
        onchange="document.forms.searchForm.submit()">
        <option <?=$orderBy === 'ASC' ? 'selected': ''?> value="ASC">ASC &#8593;</option>
        <option <?=$orderBy === 'DESC' ? 'selected': ''?> value="DESC">DESC &#8595;</option>
      </select>

      <select id="recordPerPage" name="recordPerPage" class="form-control shadow ml-3" 
      onchange="document.forms.searchForm.submit()">
        <option value="10" selected>Choose...</option>
        <?php
        foreach($recordPerPageOptions as $value){ ?>
          <option <?=$recordPerPage == $value ? 'selected': ''?> value="<?=$value?>"><?=$value?></option>
       <?php }?>
      </select>

      <input class="form-control shadow mr-sm-2  ml-3 " type="text" name="search" id="search" placeholder="Search user" aria-label="Search" value="<?=$search?>">
      <div class="btn-group shadow" role="group">
      <button class="btn btn-outline-light my-2 my-sm-0 ml-3" type="submit">Search</button>
      <button class="btn btn-warning my-2 my-sm-0" 
      onclick="location.href='<?=$currentUrl?>'" type="button">RESET</button>
      </div>
    </form>
  </div>
</nav>
</header>