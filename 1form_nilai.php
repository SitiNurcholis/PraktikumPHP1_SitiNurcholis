<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>

<div class="row">
	<aside class="col-sm-4">
    <form action="1form_nilai.php" method="GET" class="mt-10">

<div class="card">
<article class="card-body">

<h4 class="card-title text-center mb-4 mt-1">Form</h4>
	 <form>
    <div class="form-group">
    	<label>Name</label>
        <input name="nama" class="form-control" placeholder="" type="text">
    </div> <!-- form-group// -->
    <div class="form-group">
    	
    	<label>NIM</label>
        <input name="nim" class="form-control" placeholder="" type="text">
    </div> <!-- form-group// -->
    <label>Lesson</label>
    <select name="matkul" class="form-select form-control" class="form-control">
        <option selected>Choose Lesson</option>
        <option value="Web Programming">Web Programming</option>
        <option value="Database">Database</option>
        <option value="Statistika">Statistika</option>
        <option value="PKN">PKN</option>
        <option value="UI/UX">UI/UX</option>
    </select>
    <div class="form-group">
    	<label>UTS Value</label>
        <input name="uts_val" class="form-control" placeholder="" type="text">
    </div> <!-- form-group// -->
    <div class="form-group">
    	<label>UAS Value</label>
        <input name="uas_val" class="form-control" placeholder="" type="text">
    </div> <!-- form-group// -->
    <div class="form-group">
    	<label>Assignment Value</label>
        <input name="tugas_val" class="form-control" placeholder="" type="text">
    </div> <!-- form-group// -->
      
    <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">                                                          
</form>
</article>
</div> <!-- card.// -->
    
    <?php

    $proses = $_GET['proses'];
    $nama = $_GET['nama'];
    $nim = $_GET['nim'];
    $matkul = $_GET['matkul'];
    $uts_val = $_GET['uts_val'];
    $uas_val = $_GET['uas_val'];
    $tugas_val = $_GET['tugas_val'];

    $val_total = $uts_val + $uas_val + $tugas_val;
    $avr_val = $val_total / 3;

    if ($avr_val >= 85){
        $val_alpha = "A";
    }
    else if ($avr_val >= 80){
        $val_alpha = "B";
    }
    else if ($avr_val >= 60){
        $val_alpha = "C";
    }
    else if ($avr_val >= 40){
        $val_alpha = "D";
    }
    else if ($avr_val < 40){
        $val_alpha = "E";
    }

    ?>
	</aside> <!-- col.// -->
	<aside class="col-sm-4">


<div class="card">
<article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Result</h4>
	<ul class="list-group list-group-flush">
                    <li class="list-group-item">Name: <?= $nama ?></li>
                    <li class="list-group-item">Nim: <?= $nim ?></li>
                    <li class="list-group-item">Lesson: <?= $matkul ?></li>
                    <li class="list-group-item">UTS Value: <?= $uts_val ?></li>
                    <li class="list-group-item">UAS Value: <?= $uas_val ?></li>
                    <li class="list-group-item">Assignment Value: <?= $tugas_val ?></li>
                    <li class="list-group-item">Value Total:  <?= $val_total ?></li>
                    <li class="list-group-item">Average Value:  <?= $avr_val ?></li>
                    <li class="list-group-item">Value in Alphabet: <?= $val_alpha ?></li>
                                   
                </ul>
</article>
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<aside class="col-sm-4">


<div class="card">
<article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Value in Alphabet</h4>
	
	<ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>
                    
                    
                </ul>
</article>
</div> <!-- card.// -->


</body>
</html>