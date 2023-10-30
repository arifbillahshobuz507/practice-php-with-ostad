<?php
session_name('auth');
session_start([
 'cookie_lifetime'=>300
]);
$_SESSION['loggedin']='';
if(isset($_POST['user']) && isset($_POST['password'])){
 if($_POST['user'] = 'admin'&& $_POST['password']='123'){
  true == $_SESSION['loggedin'];
 }else{
  false == $_SESSION['loggedin'];
 }
}
// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
  <main>
   <div class="container col-6">
    <form method="POST">
     <div class="form-group">
      <?php
      if(true == $_SESSION['loggedin']){
       echo "Admin Welcome our project" ;
      }  else{
       echo "somthing is wrong";
      } 
      ?>
     </div>
     <div class="form-group">
      <label for="exampleInputEmail1">User</label>
      <input type="txt" name="user" class="form-control" 
     </div>
     <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" 
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div>
  </main>
 </body>
</html>