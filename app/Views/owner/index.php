<!DOCTYPE html>
<?= $this->extend('/admin/default') ?>

<?= $this->section('content') ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
   body{
            font-family: 'Karla', sans-serif;
            background-image: url('./teallogin.jpg');
            background-color: #dfeef0;
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
         }
        .form-group{
            margin-left:15px;
            margin-right:15px;
            margin-top:15px;
            margin-bottom:15px;
        }
        .btn{
            padding: 13px 20px 12px;
            background-color: #0d546a;
            border-radius: 4px;
            font-size: 17px;
            color: #fff;
            margin-bottom: 10px;
            margin-right: 24px;
        }
        h6{
        color: white;
    }
    .main {
  padding: 60px 0;
  position: relative; }

.containera {
  width: 1000px;
  background: #fff;
  margin-left: 270px;
  padding:10px 10px 10px 10px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -o-border-radius: 10px;
  -ms-border-radius: 10px; }
</style>
</head>

<body>

    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b> Customers</b></h2>
        </div>
    </div>
    <div class="row">
        <h6>abcd</h6>
    </div>

<div class="main">
<div class="containera">
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage <b>Owners</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="create-owner"  > 
                <span>Add Owner</span></a>
        </div>
    </div>
    
    <!--  -->
    <!-- Button trigger modal -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>

                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Mobile Number</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($owners as $owner) { ?>
                    <tr>

                        <td>
                            <?= $owner['id'] ?>
                        </td>
                        <td>
                            <?= $owner['FullName'] ?>
                        </td>
                        <td>
                            <?= $owner['MobileNo'] ?>
                        </td>
                        <td>
                            <?= $owner['Age'] ?>
                        </td>
                        <td>
                            <?= $owner['Gender'] ?>
                        </td>
                        <td>
                            <?= $owner['Email'] ?>
                        </td>
                        <td>
                            <?= $owner['Address'] ?>
                        </td>
                        <td>
                            <a href="edit-owner/<?= $owner['id'] ?>"   class="edit"
                                
                                    title="Edit">Edit   </a>
                            <a href="delete-owner/<?= $owner['id'] ?>"   class="delete"
                                 
                                    title="Delete">Delete </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    
    </div>
    </div>
</div>
</div>
</body>

</html>
<?= $this->endSection() ?>
