<?php 
    include('DB.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM perpusguru where id = '$id'";
        $result = mysqli_query($con, $query);
    
        $data = mysqli_fetch_assoc($result);
    
        if (!count($data)) {
            echo "<script>alert('Data tidak ditemukan di Tabel.'); window.location='index.php';</script>";
        }
    } else {
        echo "<script>alert('Data tidak ada'); window.location='index.php';</script>";
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


            <form class="form-horizontal" action="proccess_update.php" method="post">

              <div class="control-group">
                <label class="control-label fw-bold">Judul</label>
                <div class="controls">
                    <input name="judul" type="text"  value="<?php echo $data['judul'] ?>" required>
                    <input name='id' type="hidden" value="<?php echo $data['id'] ?>">
                </div>
            </div>

            <div class="control-group>">
                <label class="control-label fw-bold">Kode Buku</label>
                <div class="controls">
                    <input name="kodebuku" type="text" value="<?php echo $data['kodebuku'] ?>" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label fw-bold">Pengarang</label>
                <div class="controls">
                    <input name="pengarang" type="text" value="<?php echo $data['pengarang'] ?>" required>
                </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="submit" class="btn btn-success mt-2">Update</button>
              <a class="btn btn-primary mt-2" href="index.php">Back</a>
          </div>
      </form>
  </div>

</div> <!-- /container -->
</body>
</html>