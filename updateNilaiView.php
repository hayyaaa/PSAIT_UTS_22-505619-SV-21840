<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Nilai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php

 $curl= curl_init();
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 //Pastikan sesuai dengan alamat endpoint dari REST API di ubuntu
 curl_setopt($curl, CURLOPT_URL, 'http://localhost/uts_psait/mahasiswa_api.php');
 $res = curl_exec($curl);
 $json = json_decode($res, true);
//var_dump($json);
?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Nilai</h2>
                    </div>
                    <p>Please fill this form and submit to update grade record to the database.</p>
                    <form action="updateNilaiDo.php" method="post">
                        <input type = "hidden" name="nim" value="<?php echo"$nim";?>">
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" name="nim" class="form-control" value="<?php echo($json["data"][0]["nim"]); ?>">
                        </div>
                        <div class="form-group">
                            <label>Kode MK</label>
                            <input type="text" name="kode_mk" class="form-control" value="<?php echo($json["data"][0]["kode_mk"]); ?>">
                        </div>
                        <div class="form-group">
                            <label>Nilai</label>
                            <input type="mobile" name="nilai" class="form-control" value="<?php echo($json["data"][0]["nilai"]); ?>">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>