<!DOCTYPE html>
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
  width: 1200px;
  background: #fff;
  margin-left: 175px;
  padding:10px 10px 10px 10px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -o-border-radius: 10px;
  -ms-border-radius: 10px; }
</style>

</head>

<body>
<div class="main">
<div class="containera">
    <div class="row">
        <div class="col-sm-6">
            <h2>List of<b> Rooms</b></h2>
        </div>
    </div>
    
    <!-- Button trigger modal -->
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>

                    <th>Id</th>
                    <th>PMT_id</th>
                    <th>Flat_id</th>
                    <th>Hot Water Service</th>
                    <th>RO Water Service</th>
                    <th>No of Beds</th>
                    <th>Capacity of peoples</th>
                    <th>Floor No</th>
                    <th>Address</th>
                    <th>Bathroom Type</th>
                    <th>Room Allocation</th>
                    <th>Time Period</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rooms as $room) { ?>
                    <tr>

                        <td>
                            <?= $room['id'] ?>
                        </td>
                        <td>
                            <?= $room['pmt_id'] ?>
                        </td>
                        <td>
                            <?= $room['Flat_id'] ?>
                        </td>
                        <td>
                            <?= $room['HotWater_Service'] ?>
                        </td>
                        <td>
                            <?= $room['ROWater_Service'] ?>
                        </td>
                        <td>
                            <?= $room['No_of_Beds'] ?>
                        </td>
                        <td>
                            <?= $room['Capacity_of_peoples'] ?>
                        </td>
                        <td>
                            <?= $room['FloorNo'] ?>
                        </td>
                        <td>
                            <?= $room['Address'] ?>
                        </td>
                        <td>
                            <?= $room['Bathroom_Type'] ?>
                        </td>
                        <td>
                            <?= $room['RoomAllocation'] ?>
                        </td>
                        <td>
                            <?= $room['TimePeriod'] ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <input type="button" class="btn btn-default" id="button" data-bs-dismiss="modal" value="Home">
        <script type="text/javascript">
            document.getElementById("button").onclick = function () {
            location.href = "/home";
        };
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            </div>
                </div>
</div>
</div>
</body>
</html>