<?php
  $numLinks = getConfig("numLinkNavigator", 5);
?>
<nav aria-label="..." >
  <ul class="pagination">
    <li class="page-item <?=$page == 1 ? 'disabled': ''?>" >
      <a class="page-link" href="<?= "$pageUrl?$navOrderByQueryString&page=".($page-1) ?>" tabindex="-1">Previous</a>
    </li>
    <?php 
    $startValue = $page - $numLinks;
    $startValue = $startValue < 1 ? 1 : $startValue;
    
    for($i =  $startValue; $i < $page; $i++):?>
      <li class="page-item">
        <a class="page-link" href="<?="$pageUrl?$navOrderByQueryString&page=$i"?>"><?=$i?></a>
      </li>    
    <?php endfor;
    ?>

      <li class="page-item active">
        <a class="page-link disabled" href="#" disabled><?=$page?></a>
      </li>     

      <?php 
    $startValue = $page + 1;
    $startValue = $startValue < 1 ? 1 : $startValue;
    $endValue = ($page+5);
    $endValue = $endValue> $numPages ? $numPages : $endValue;
    for($i =  $startValue; $i < $endValue; $i++):?>
      <li class="page-item">
        <a class="page-link" href="<?="$pageUrl?$navOrderByQueryString&page=$i"?>"><?=$i?></a>
      </li>    
    <?php endfor;
    ?>  
    <li class="page-item  <?=$page == $numPages ? 'disabled': ''?>">
    <a class="page-link" href="<?= "$pageUrl?$navOrderByQueryString&page=".($page+1) ?>" tabindex="1">Next</a>
    </li>
  </ul>
</nav>