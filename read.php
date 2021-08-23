<?php
require 'DB.php';
$id = null;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( null==$id ) {
    header("Location: index.php");
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM perpusguru where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
       
        <div class="span10 offset1">
            <div class="row">
                <h3>Read Record</h3>
            </div>
            
            <div class="form-horizontal" >
              <div class="control-group">
                <label class="control-label fw-bold">Judul</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['judul'];?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label fw-bold">Kode Buku</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['kodebuku'];?>
                    </label>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label fw-bold">Pengarang</label>
                <div class="controls">
                    <label class="checkbox">
                        <?php echo $data['pengarang'];?>
                    </label>
                </div>
            </div>
            <div class="form-actions">
              <a class="btn btn-primary" href="index.php">Back</a>
          </div>
          
          
      </div>
  </div>
  
</div> <!-- /container -->
</body>
</html>