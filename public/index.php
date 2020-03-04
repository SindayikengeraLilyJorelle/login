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
                                <td></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td></td>
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