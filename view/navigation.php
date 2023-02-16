<nav aria-label="..." >
  <ul class="pagination">
    <li class="page-item <?=$page == 1 ? 'disabled': ''?>" >
      <a class="page-link" href="<?= "$pageUrl?page=".($page-1) ?>" tabindex="-1">Previous</a>
    </li>
    <?php for($i = 1; $i <= $numPages; $i++) {
        $class = $i == $page ? ' active ': '';
        if($class){?>
        <li class="page-item <?=$class?>"><a class="page-link user-select-none" href="#" disabled><?=$i?></a></li>     
    <?php }else{ ?>
        <li class="page-item"><a class="page-link" href="<?="$pageUrl?page=$i"?>"><?=$i?></a></li>    
    <?php }} ?>
    <li class="page-item  <?=$page == $numPages ? 'disabled': ''?>">
    <a class="page-link" href="<?= "$pageUrl?page=".($page+1) ?>" tabindex="1">Next</a>
    </li>
  </ul>
</nav>