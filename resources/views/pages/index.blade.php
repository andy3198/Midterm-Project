<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Midterm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">


            <h4 class="navbar-brand">IPT Midterm Project</h4>

            <div class="collappse navbar-collappse " id="navbarNav"> 

                <ul class="navbar-nav" style="margin-left: 500%">

                    <li class="nav-item active">
                        <a href="#" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= url('/users') ?>" class="nav-link">User</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= url('/accounts') ?>" class="nav-link">Account</a>
                    </li>
                        
                </ul>
                    
            </div>


        </nav>
    
    <div class="container">

        <div class="row">

            <div class="col-md-4 offset-md-4">

                
                <div class="card" style="margin-top: 20px">

                    <div class="card-header">
                        <h4>
                            Main Menu
                        </h4>
                    </div>

                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-block nav-link active">Home</a>
                        <a href="<?= url('/users') ?>" class="btn btn-primary btn-block nav-link">User</a>
                        <a href="<?= url('/accounts') ?>" class="btn btn-primary btn-block nav-link">Account</a>
                    </div>

                </div>
            
            </div>

        </div>

    </div>

</body>
</html>