<?php
require_once 'services/people.php';
require_once "layout/header.php";
?>

<h1>Les peoples</h1>

<?php
$stmt = findAllPeopleStatement();
?>
<div class="card-group">
  <?php
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    require 'people-card.php';
  } ?>
</div>
<?php
require_once "layout/footer.php";
