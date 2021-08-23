<?php

require 'DB.php';

if ( !empty($_POST)) {
        // keep track validation errors
    $judulError = null;
    $kodebukuError = null;
    $pengarangError = null;

         // keep track post values]

    $judul = $_POST['judul'];
    $kodebuku = $_POST['kodebuku'];
    $pengarang = $_POST['pengarang'];

        // validate input
    $valid = true;
    if (empty($judul)) {
        $judulError = 'Please enter Title';
        $valid = false;
    }

    if (empty($kodebuku)) {
        $kodebukuError = 'Please enter Code';
        $valid = false;
    }

    if (empty($pengarang)) {
        $pengarangError = 'Please enter creator';
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
                <h3>Create Record</h3>
            </div>


            <form class="form-horizontal" action="create.php" method="post">

              <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                <label class="control-label fw-bold">Judul</label>
                <div class="controls">
                    <input name="Judul" type="text"  placeholder="Judul" value="<?php echo !empty($judul)?$judul:'';?>">
                    <?php if (!empty($judulError)): ?>
                        <span class="help-inline"><?php echo $judulError;?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($kodebukuError)?'error':'';?>">
                <label class="control-label fw-bold">Kode Buku</label>
                <div class="controls">
                    <input name="Kode Buku" type="text" placeholder="Kode Buku" value="<?php echo !empty($kodebuku)?$kodebuku:'';?>">
                    <?php if (!empty($kodebukuError)): ?>
                        <span class="help-inline"><?php echo $kodebukuError;?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                <label class="control-label fw-bold">Pengarang</label>
                <div class="controls">
                    <input name="Pengarang" type="text"  placeholder="Pengarang" value="<?php echo !empty($pengarang)?$pengarang:'';?>">
                    <?php if (!empty($mobileError)): ?>
                        <span class="help-inline"><?php echo $pengarangError;?></span>
                    <?php endif;?>
                </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success mt-2">Create</button>
              <a class="btn btn-primary mt-2" href="index.php">Back</a>
          </div>
      </form>
  </div>

</div> <!-- /container -->
</body>
</html>