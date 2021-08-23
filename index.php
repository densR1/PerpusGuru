<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>

<script>
 $(document).ready(function() {
  var table = $('#example').DataTable();
  var tt = new $.fn.dataTable.TableTools( table );
  
  $( tt.fnContainer() ).insertBefore('div.dataTables_wrapper');
 } );
</script>

<body>
<div class="container">
 <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand p-4" href="#">Perpustakaan WIKRAMA</a>
  <div class="row">
  </br>
 </br>
</div>
<div class="row">
 <p>
  <a href ="create.php" button class="btn btn-success">Create</button></a>
  
 </p>
 <table class="table table-striped table-bordered">
  <thead>
   <tr>
    <th>Judul</th>
    <th>Kode Buku</th>
    <th>Pengarang</th>
    <th>Actions</th>
   </tr>
  </thead>
  <tbody>
   <?php
   include 'DB.php';
   $pdo = Database::connect();
   $sql = 'SELECT * FROM perpusguru ORDER BY id DESC';
   foreach ($pdo->query($sql) as $row){
    echo '<tr>';
    echo '<td>'. $row['judul'] . '</td>';
    echo '<td>'. $row['kodebuku'] . '</td>';
    echo '<td>'. $row['pengarang'] . '</td>';
    echo '<td width=250>';
    echo '<a class="btn btn-info" href="read.php?id='.$row['id'].'">Info</a>';
    echo '  ';
    echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
    echo '  ';
    echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
    echo '</td>';
   }
   Database::disconnect();
   ?>

  </tbody>
 </table>
 <figure class="text-center">
  <blockquote class="blockquote">
    <p>Welcome</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    To Our <cite title="Source Title">Library</cite>
  </figcaption>
</figure>
  </div>
</div>
</div>

</body>
</html>