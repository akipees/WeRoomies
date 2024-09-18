<!DOCTYPE html>
<?= $this->extend('/admin/default') ?>

<?= $this->section('content') ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
  width: 600px;
  background: #fff;
  margin-left: 450px;
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
    <h6>abcd</h6>
</div>
<div class="row">
    <h6>abcd</h6>
</div>
<div class="main">
<div class="containera">
<form method="post" action="<?= site_url('/update-flat') ?>">
    <div class="modal-header">
        <h2 class="modal-title"><b>Update Flat</b></h2>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label>Type</label>
            <select name="pmt_id" id="pmt_id"  required>
            <option value="">--SELECT --</option>       
            <?php
            foreach($property as $p)
            {
               ?> 
                <option value="<?= ($p["id"]) ?>"><?= ($p["type"]) ?></option>
               <?php
            }
            ?>
            </select>
        </div>
        <div class="form-group">
            <label>ownerid</label>
            <input type="text" name="owner_id" id="owner_id" class="form-control"value="<?=$flat['owner_id']?>" required>
        </div>
        <div class="form-group">
            <label>No of Bedrooms</label>
            <input type="text" name="No_of_Bedrooms" id="No_of_Bedrooms" class="form-control" value="<?=$flat['No_of_Bedrooms']?>" required>
        </div>
        <div class="form-group">
            <label>Bathroom Type</label>
            <input type="text" name="Bathroom_Type" id="Bathroom_Type" class="form-control" value="<?=$flat['Bathroom_Type']?>" required>
        </div>
        <div class="form-group">
            <label>Area</label>
            <input type="text" name="Area" id="Area" class="form-control" value="<?=$flat['Area']?>" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="Address" id="Address" class="form-control" value="<?=$flat['Address']?>" required>
        </div>
        <div class="form-group">
            <label>Time Period</label>
            <input type="text" name="TimePeriod" id="TimePeriod" class="form-control" value="<?=$flat['TimePeriod']?>" required>
        </div>
    </div>
    <div class="modal-footer">
        <input type="button" class="btn btn-default" id="button" data-bs-dismiss="modal" value="Cancel">
        <input type="hidden" name="id" id="id" class="form-control" value="<?=$flat['id']?>" required>
        <input type="submit" class="btn" value="Update">
    </div>
</form>
</div>
</div>  
<script type="text/javascript">
    document.getElementById("button").onclick = function () {
        location.href = "/flat";
    };
</script>
</body>
</html>
<?= $this->endSection() ?>