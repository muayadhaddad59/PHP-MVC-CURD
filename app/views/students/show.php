<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row ">
      <div class="col-md-4">
          <a class="btn btn-primary pull-right" href="<?php echo URLROOT ;?>/students"><i class="fa fa-backward"></i> Go Back</a>
      </div>
  </div>
        <div class="card mb-3 mt-2">
            <div class="card-body"><h2 class="card-text"><?php echo  $data['post']->title ;?></h2></div>
            <p class="card-body">
                <?php echo  $data['post']->body ;?>
            </p>


            <?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
                <div class="row">
                    <div class="col">
                        <a href="<?php echo URLROOT ;?>/students/edit/<?php echo $data['post']->id ;?>" style="width:250px" class="btn btn-primary btn-lg btn-success">Edit</a>
                    </div>
                    <div class="col">
                        <form class="pull-right" action="<?php echo URLROOT ;?>/students/delete/<?php echo $data['post']->id ;?>" method="post">
                            <input type="submit" style="width:250px" class="btn btn-primary btn-lg btn-danger" value="Delete"> 
                        </form>
                    </div>
                </div>
            <?php endif ;?>
        </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>