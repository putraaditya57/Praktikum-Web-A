<?php
    require_once('php/koneksi.php');
    require_once('php/Database.php');
    require_once('php/Perpustakaan.php');
    $connection = new Database($host,$user,$pass,$database);
    $perpus = new Perpustakaan($connection);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
    <table class="table table-bordered" >
  <thead>
  <form action="" method="POST">
  <tr>
    <th>Filter</th>
    <td>
        <input type="text " name="q" placeholder="Cari">
        <select name="column" >
            <option value="">Select Filter</option>
            <option value="judul">Judul Buku</option>
            <option value="penulis">Penulis Buku</option>
            <option value="penerbit">Penerbit Buku</option>
            <option value="tahun_terbit">Tahun Terbit</option>
            <option value="stok">Stok</option>
        </select>
        <input type="submit" name="submit" id="" value="cari">
    </td>
    </tr>
    <tr style="background-color:#255ed5" >
      <th scope="col">No.</th>
      <th scope="col">Judul Buku <br><input type="submit" value="ASC" name="judul"><input type="submit" value="DESC" name="judul"></th>
      <th scope="col">Penulis Buku <br><input type="submit" value="ASC" name="penulis"><input type="submit" value="DESC" name="penulis"></th>
      <th scope="col">Penerbit Buku<br><input type="submit" value="ASC" name="penerbit"><input type="submit" value="DESC" name="penerbit"></th>
      <th scope="col">Tahun Penerbit<br><input type="submit" value="ASC" name="tahun_terbit"><input type="submit" value="DESC" name="tahun_terbit"></th>
      <th scope="col">Stok<br><input type="submit" value="ASC" name="stok"><input type="submit" value="DESC" name="stok"></th>
    </tr>
    </form>
  </thead>
  <tbody>
  <?php
    $no = 1;
    $sort = "";
    if(empty($sort)){
         $tampil = $perpus->tampil();
    }
    if (isset($_POST["judul"]) )
    {
        $sort =  $_POST["judul"]; 
        $tampil = $perpus->tampilsort($sort,"judul");  
    }
    if (isset($_POST["penulis"]) )
    {
        $sort =  $_POST["penulis"]; 
        $tampil = $perpus->tampilsort($sort,"penulis"); 
    }
    if (isset($_POST["penerbit"]) )
    {
        $sort =  $_POST["penerbit"]; 
        $tampil = $perpus->tampilsort($sort,"penerbit"); 
    }
    if (isset($_POST["tahun_terbit"]) )
    {
        $sort =  $_POST["tahun_terbit"]; 
        $tampil = $perpus->tampilsort($sort,"tahun_terbit");   
    }
    if (isset($_POST["stok"]) )
    {
        $sort =  $_POST["stok"]; 
        $tampil = $perpus->tampilsort($sort,"stok");    
    }
    if(isset($_POST['submit'])){
        $q = $_POST['q'];
        $column =  $_POST['column'];
        if($q!="" AND $column!=""){
            $tampil = $perpus->filter($q,$column);
        }
        
    }
    while($data = $tampil->fetch_object()){
  ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $data->judul; ?></td>
      <td><?php echo $data->penulis; ?></td>
      <td><?php echo $data->penerbit; ?></td>
      <td><?php echo $data->tahun_terbit; ?></td>
      <td><?php echo $data->stok; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>