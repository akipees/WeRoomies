<?= $this->extend('/owner/default') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <h2>Manage<b> Flats</b></h2>
        </div>
        <div class="col-sm-6">
            <a href="ocreate-flat"  > 
                <span>Add Flat</span></a>
        </div>
    </div>
    
    <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>PMT_id</th>
                    <th>Owner_Id</th>
                    <th>Number of Bedrooms</th>
                    <th>Bathroom Type</th>
                    <th>Area</th>
                    <th>Address</th>
                    <th>Time Period</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flats as $flat) { ?>
                    <tr>

                        <td>
                            <?= $flat['id'] ?>
                        </td>
                        <td>
                            <?= $flat['pmt_id'] ?>
                        </td>
                        <td>
                            <?= $flat['owner_id'] ?>
                        </td>
                        <td>
                            <?= $flat['No_of_Bedrooms'] ?>
                        </td>
                        <td>
                            <?= $flat['Bathroom_Type'] ?>
                        </td>
                        <td>
                            <?= $flat['Area'] ?>
                        </td>
                        <td>
                            <?= $flat['Address'] ?>
                        </td>
                        <td>
                            <?= $flat['TimePeriod'] ?>
                        </td>
                        <td>
                            <a href="oedit-flat/<?= $flat['id'] ?>"   class="edit"
                                
                                    title="Edit">Edit   </a>
                            <a href="odelete-flat/<?= $flat['id'] ?>"   class="delete"
                                 
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
</body>
</html>
<?= $this->endSection() ?>