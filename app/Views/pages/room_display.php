<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-sm-6">
            <h2>Manage<b> Rooms</b></h2>
        </div>
    </div>
    </div>
    <!--  -->
    <!-- Button trigger modal -->
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
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>
</html>