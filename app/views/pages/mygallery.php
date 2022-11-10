<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/includes/navbar.php';
?>

<?php $path = "../../chitrauploads/"; ?>

<div class="gallery">
  <div class="box">
    <?php if (isset($data)) : ?>
      <div class="collection">
        <?php $row = $data[0]; ?>
        <?php foreach ($row as $row1) : ?>
          <img class="display-image" src=<?= $path . $row1->location ?> alt=<?= $row1->uid . "X:" . $row1->id ?>>
        <?php endforeach; ?>
      </div>

      <div class="collection">
        <?php foreach ($data[1] as $row2) : ?>
          <img class="display-image" src=<?= $path . $row2->location ?> alt=<?= $row2->uid . "X:" . $row2->id ?>>
        <?php endforeach; ?>
      </div>

      <div class="collection">
        <?php foreach ($data[2] as $row3) : ?>
          <img class="display-image" src=<?= $path . $row3->location ?> alt=<?= $row3->uid . "X:" . $row3->id ?>>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<!-- <div class="gallery">
  <div class="row">
    <div class="column">
      <?php
      // var_dump($data);
      $i = 0;
      if (isset($data)) {
        foreach ($data as $image) {
          if (file_exists($path . $image->location)) {

            if ($i == 2) {
              $i = 0;
      ?>
    </div>
    <div class="column">
    <?php
            }
    ?>
    <img class="display-image" src=<?= $path . $image->location ?> alt=<?= $image->uid . "X:" . $image->id ?>>
    <?php $i++; ?>
    <br>
<?php
          }
        }
      };
?> -->

<?php require APPROOT . '/views/includes/modal.php'; ?>
<script type="text/javascript" src="<?php echo URLROOT; ?>/js/modal.js"></script>
<?php require APPROOT . '/views/includes/footer.php'; ?>
