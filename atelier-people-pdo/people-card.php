<div class="card">
  <img src="../images/<?php echo $row['avatar'] ?? 'default.jpg'; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['firstname'] . ' ' . $row['name']; ?></h5>
    <p class="card-text"><small class="text-muted"><?php echo $row['birthdate'] ?? "-"; ?></small></p>
  </div>
</div>