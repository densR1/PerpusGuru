<?php
require 'DB.php';

$id = null;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( null==$id ) {
    header("Location: index.php");
}

if ( !empty($_POST)) {
        // keep track validation errors
    $nameError = null;
    $emailError = null;
    $mobileError = null;
    
        // keep track post values
    $judul = $_POST['judul'];
    $kodebuku = $_POST['kodebuku'];
    $pengarang = $_POST['pengarang'];
    
        // validate input
    $valid = true;
    $valid = true;
    if (empty($judul)) {
        $nameError = 'Please enter title';
        $valid = false;
    }

    if (empty($kodebuku)) {
        $mobileError = 'Please enter Code';
        $valid = false;
    }

    if (empty($pengarang)) {
        $mobileError = 'Please enter creator';
        $valid = false;
    }

    // insert data
    if ($valid) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO perpusguru (judul,kodebuku,pengarang) values(?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($judul,$kodebuku,$pengarang));
        Database::disconnect();
        header("location: index.php"); 
    }
} else {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM perpusguru where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $judul = $data['judul'];
    $kodebuku = $data['kodebuku'];
    $pengarang = $data['pengarang'];
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
                <h3>Update Record</h3>
            </div>
            
            <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">
              <div class="control-group <?php echo !empty($judulError)?'error':'';?>">
                <label class="control-label fw-bold">Judul</label>
                <div class="controls">
                    <input juduk="judul" type="text"  placeholder="Judul" value="<?php echo !empty($judul)?$judul:'';?>">
                    <?php if (!empty($nameError)): ?>
                        <span class="help-inline"><?php echo $judukError;?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($kodebukuError)?'error':'';?>">
                <label class="control-label fw-bold">Kode Buku</label>
                <div class="controls">
                    <input name="email" type="text" placeholder="Kode Buku" value="<?php echo !empty($kodebuku)?$kodebuku:'';?>">
                    <?php if (!empty($kodebukuError)): ?>
                        <span class="help-inline"><?php echo $kodebukuError;?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($pengarangError)?'error':'';?>">
                <label class="control-label fw-bold">Pengarang</label>
                <div class="controls">
                    <input name="mobile" type="text"  placeholder="Pengarang" value="<?php echo !empty($pengarang)?$pengarang:'';?>">
                    <?php if (!empty($pengarangError)): ?>
                        <span class="help-inline"><?php echo $pengarangError;?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success mt-2">Update</button>
              <a class="btn btn-primary mt-2" href="index.php">Back</a>
          </div>
      </form>
  </div>
  
</div> <!-- /container -->
</body>
</html>