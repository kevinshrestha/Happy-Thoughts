<?php include '../views/header_nav.php'; ?>
<script type="text/javascript" src="../js/display_xml.js"></script>
<div class="row">
  <?php foreach ($xml->thought as $thought) : ?>
	<div class="col s4">
        <div class="card">
            <div class="card-image">
              	<img class="materialboxed" width="650" src="../images/<?php echo $thought['id']; ?>.jpg">
              	<span class="card-title"><?php echo $thought['author']; ?></span>
            </div>
            <div class="card-content">
              <?php echo $thought; ?>
            </div>
        </div>
    </div>
  <?php endforeach; ?>
</div>
<?php include '../views/footer.php'; ?>
