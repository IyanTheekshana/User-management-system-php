<table class="table table-striped mt-4">

    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Fiscal Code</th>
            <th>Email</th>
            <th>Age</th>
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