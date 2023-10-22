<h1>Latihan 1c.php</h1>
<div class="row">
    <div class="box">A</div>
  </div>
  <div class="row">
    <?php
      for ($i = 1; $i <= 2; $i++) {
        echo '<div class="box">';
        if ($i == 1) {
          echo 'A';
        } else {
          echo 'B';
        }
        echo '</div>';
      }
    ?>
  </div>
  <div class="row">
    <?php
      for ($i = 1; $i <= 3; $i++) {
        echo '<div class="box">';
        if ($i == 1) {
          echo 'A';
        } elseif ($i == 2) {
          echo 'B';
        } else {
          echo 'C';
        }
        echo '</div>';
      }
    ?>
  <style>
    
.row {
  display: flex;
  flex-direction: row;
}

.box {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border: 2px solid black;
  margin: 5px;
}
</style>
