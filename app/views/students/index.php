<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row ">
      <div class="col-md-8">
          <h2>School</h2>
      </div>
      <div class="col-md-4">
          <a class="btn btn-primary pull-right" href="<?php echo URLROOT ;?>/students/add"><i class="fa fa-pencil"></i> Add Student</a>
      </div>
  </div>
  <?php foreach ($data['students'] as $student) : ?>
        <div class="card mb-3 mt-2">
            <div class="card-body"><h2 class="card-text"><?php echo  $student->title ;?></h2></div>
            <p class="card-body">
                <?php echo  $student->body ;?>
            </p>
       
            <a href="<?php echo URLROOT ;?>/students/show/<?php echo $student->postId ;?>" class="btn btn-dark btn-block">More...</a>
        </div>
  <?php endforeach ;?>
<?php require APPROOT . '/views/inc/footer.php'; ?>