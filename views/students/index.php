<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <title>Document</title>

</head>

<body>

</body>

</html>
<div>
  <?php if (isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>students/add">Add Student</a>
  <?php endif; ?>
  <h2 style="color:whitesmoke">Students</h2>

  <?php foreach ($viewmodel as $item) : ?>

    <div class="w3-container">
      <br>
      <div class="w3-card-4 w3-dark-grey" style="width:100%">

        <div class="w3-container w3-center">
          <h3><?php echo $item['name']; ?></h3>
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" alt="Avatar" style="width:10%">
          <h5><?php echo $item['major']; ?></h5>

          <div class="w3-section">
        
            <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>students/update/<?php echo $item['id'];?>" >Update</a>
            <a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>students/delete/<?php echo $item['id']; ?>">Delete</a>

          </div>
        </div>

      </div>
    </div>

  <?php endforeach; ?>
</div>