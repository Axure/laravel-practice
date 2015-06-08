
This is div for all the users.
<div>

    <div>
        <?php
            echo $users;
            //var_dump($users);
        ?>
    </div>
<?php
foreach($users as $user) {
    echo $user->password;
}
?>

</div>