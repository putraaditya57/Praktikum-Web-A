<?php
    session_start();
    if(isset($_SESSION['level'])){
      if($_SESSION['level'] == 'admin'){
        header('Location: admin/index.php');
      }
      if($_SESSION['level'] == 'pegawai'){
        header('Location: pegawai/index.php');
      }
    }
    else{
  ?>
<!doctype html>
<html lang="en">
  <body>
    <div class="container">
        <form action="proses.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
        </form>
    </div>
  </body>
</html>
    <?php }?>