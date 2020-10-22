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

            <div class="collappse navbar-collappse" id="navbarNav">

                <ul class="navbar-nav" style="margin-left: 500%">

                    <li class="nav-item">
                        <a href="<?= url('/') ?>" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item active">
                        <a href="#" class="nav-link">User</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= url('/accounts') ?>" class="nav-link">Account</a>
                    </li>
                            
                </ul>
                        
            </div>

        </nav>

    <div class="container">

        <div class="row">

            <div class="col-md-9 offset-md-1">

                <table class="table table-border table-striped">

                    <thead>
                        <tr>
                            <th>User Id</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Address</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach($users as $user):?>

                            <tr>
                                <td><?= $user->id ?></td>
                                <td><?= $user->lname ?></td>
                                <td><?= $user->fname ?></td>
                                <td><?= $user->address ?></td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

                
            </div>

        </div>

    </div>
    
</body>
</html>