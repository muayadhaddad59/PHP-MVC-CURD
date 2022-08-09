<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Share Something!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Name</label>
    		<input type="text" name="name" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Major</label>
    		<textarea name="major" class="form-control"></textarea>
    	</div>
    	<div class="form-group">
    		<label>age</label>
    		<input type="text" name="age" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>students">Cancel</a>
    </form>
  </div>
</div>