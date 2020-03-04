<?php require_once('../models/initialize.php'); 
session_start();
if(!isset($_SESSION['user_id'])){
  redirect_to('../login.php');
}

// find user by id 
$user_id = $_SESSION['user_id'];
$current_user = find_user_by_id($user_id);
// check if user is found
if(!$current_user){
  redirect_to('../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="../login.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>User Details</h1>
                <div class="table-responsive">
                    <table class="table table-border">
                        <tbody>
                            <tr>
                                <th>Full Names</th>
                                <td><?php echo htmlentities($current_user['fullnames']); ?></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><?php echo htmlentities($current_user['phone']); ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo htmlentities($current_user['email']); ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td><?php echo htmlentities($current_user['username']); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </div><!-- /.container -->


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>