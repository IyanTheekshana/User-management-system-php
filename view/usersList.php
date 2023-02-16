<?php
    $orderDirClass = $orderDir;
    $orderDir = $orderDir === 'ASC' ? 'DESC' : 'ASC';
?>
<div class="table-responsive-xl">
<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th class="<?=$orderBy === 'id' ? $orderDirClass : '' ?>"><a href="<?=$pageUrl?>?orderBy=id&orderDir=<?=$orderDir?>">Id</a></th>
            <th class="<?=$orderBy === 'username' ? $orderDirClass : '' ?>"><a href="<?=$pageUrl?>?orderBy=username&orderDir=<?=$orderDir?>">Name</a></th>
            <th class="<?=$orderBy === 'fiscalcode' ? $orderDirClass : '' ?>"><a href="<?=$pageUrl?>?orderBy=fiscalcode&orderDir=<?=$orderDir?>">Fiscal Code</a></th>
            <th class="<?=$orderBy === 'email' ? $orderDirClass : '' ?>"><a href="<?=$pageUrl?>?orderBy=email&orderDir=<?=$orderDir?>">Email</a></th>
            <th class="<?=$orderBy === 'age' ? $orderDirClass : '' ?>"><a href="<?=$pageUrl?>?orderBy=age&orderDir=<?=$orderDir?>">Age</a></th>
        </tr>
    </thead>
    <tbody>
    <?php if($users){ 
        foreach($users as $user){ ?>
           <tr>
            <td><?=$user['id'] ?></td>
            <td><?=$user['username'] ?></td>
            <td><?=$user['fiscalcode'] ?></td>
            <td><a href="mailto:<?=$user['email'] ?>"><?=$user['email'] ?></a></td>
            <td><?=$user['age'] ?></td>
           </tr>
       <?php }
    } else{
        echo '<tr><td colspan="5" class="alert-warning"> <h3>NO RECORD TO SHOW</h3></td></tr>';
    }
    
    ?>
    </tbody>
</table>
</div>
<div class="row pt-4">
    <div class="col-md-6">
    <?php if($users){ 
    include 'navigation.php';}
    ?>
    </div>
    <div class="col-md-6">
            <h5 class="float-right">Total users <span class="badge badge-primary"><?=$totalUsers?></span></h5>
    </div>
</div>