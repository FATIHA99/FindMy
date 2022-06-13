<?php include_once '../views/decoupage/header.php' ;?>

<div class="container p-5 ">
    <?php foreach($messages as $val) {?>
<div class="card mt-5 w75 m-5">
  <div class="card-header">
   Message de <?= $val['name'] ?>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $val['email'] ?></h5>
    <h5 class="card-title"><?= $val['tele'] ?></h5>
    <p class="card-text"><?= $val['msg'] ?></p>
  </div>
</div>
<?php }?>

</div>