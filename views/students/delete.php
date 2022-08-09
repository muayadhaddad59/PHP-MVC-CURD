<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Delete Students!</h3>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>ID</IDl>
                <input type="text" name="id" class="form-control" value="<?php echo $_GET['id']?>" disabled/>
            </div>
            <input type="hidden" name="id" value="<?php echo  $_GET['id']; ?>">
            <input type="submit" name="delete" value="Delete">
        </form>
    </div>
</div>