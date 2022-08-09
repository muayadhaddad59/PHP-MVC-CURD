<?php
$x =3;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Delete Students!</h3>
    </div>

    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
                <label hidden >Name</IDl>
                <input type="text" name="id" class="form-control" value="<?php echo $x?>" />
            </div>
            <div class="form-group">
                <label>Name</IDl>
                <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['name']?>" />
            </div>
            <div class="form-group">
                <label>Major</IDl>
                <input type="text" name="major" class="form-control" value="<?php echo $_GET['id']?>" />
            </div>
            <div class="form-group">
                <label>Age</IDl>
                <input type="text" name="age" class="form-control" value="<?php echo $_GET['id']?>" />
            </div>
            
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>