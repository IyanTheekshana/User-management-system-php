<?php
    $orderDirClass = $orderDir;
    $orderDir = $orderDir === 'ASC' ? 'DESC' : 'ASC';
?>
<table class="table table-striped mt-4">

    <thead>
        <tr>
            <th class="<?=$orderBy === 'id' ? $orderDirClass : '' ?>"><a href="<?=$page?>?orderBy=id&orderDir=<?=$orderDir?>">Id</a></th>
            <th class="<?=$orderBy === 'username' ? $orderDirClass : '' ?>"><a href="<?=$page?>?orderBy=username&orderDir=<?=$orderDir?>">Name</a></th>
            <th class="<?=$orderBy === 'fiscalcode' ? $orderDirClass : '' ?>"><a href="<?=$page?>?orderBy=fiscalcode&orderDir=<?=$orderDir?>">Fiscal Code</a></th>
            <th class="<?=$orderBy === 'email' ? $orderDirClass : '' ?>"><a href="<?=$page?>?orderBy=email&orderDir=<?=$orderDir?>">Email</a></th>
            <th class="<?=$orderBy === 'age' ? $orderDirClass : '' ?>"><a href="<?=$page?>?orderBy=age&orderDir=<?=$orderDir?>">Age</a></th>
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