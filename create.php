
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


            <form class="form-horizontal" action="proccess_create.php" method="post">

              <div class="control-group">
                <label class="control-label fw-bold">Judul</label>
                <div class="controls">
                    <input name="judul" type="text"  placeholder="Judul" required>
                    
                </div>
            </div>

            <div class="control-group>">
                <label class="control-label fw-bold">Kode Buku</label>
                <div class="controls">
                    <input name="kodebuku" type="text" placeholder="Kode Buku" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label fw-bold">Pengarang</label>
                <div class="controls">
                    <input name="pengarang" type="text"  placeholder="Pengarang" required>
                </div>
            </div>
            <div class="form-actions">
              <button type="submit" name="submit" class="btn btn-success mt-2">Create</button>
              <a class="btn btn-primary mt-2" href="index.php">Back</a>
          </div>
      </form>
  </div>

</div> <!-- /container -->
</body>
</html>