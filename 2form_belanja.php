<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerse</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

<div class="row">
	<aside class="col-sm-4">
    <form action="2form_belanja.php" method="POST" class="mt-10">

<div class="card">
<article class="card-body">

<h4 class="card-title text-center mb-4 mt-1">Order Here</h4>
	 <form>
    <div class="form-group">
    <label for="">Customer</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline" >
                  
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio1" value="TV">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="Refrigerator">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio3" value="Washing Machine">
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="qty" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Shipping Date</label>
                    <input type="date" name="tanggal" value="" class="form-control">
                </div>
                <label for="">Courier Type</label>
                <select class="form-select form-control" name="kurir" class="form-control">
                    <option selected>Choose Courier Type:</option>
                    <option value="Tiki" name="kurir">Tiki</option>
                    <option value="Si Cepat" name="kurir">Si Cepat</option>
                    <option value="Pos" name="kurir">Pos</option>
                    <option value="Grab" name="kurir">Grab</option>
                    <option value="Gojek" name="kurir">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>
                
                <input type="submit" value="Buy Now" name="proses" class="btn btn-success btn-sm btn-block">                                                          
</form>
</article>
</div> <!-- card.// -->
    
            <?php
                $proses = $_POST['proses'];
                $nama = $_POST['nama'];
                $produk = $_POST['produk'];
                $qty = $_POST['qty'];
                $tanggal = $_POST['tanggal'];
                $kurir = $_POST['kurir'];
                $kurir_by = $_POST['kurir_by'];
                $alamat = $_POST['alamat'];
                

                if ($kurir == 'Grab' || $kurir == 'Gojek'){
                    $kurir_by = 35000;
                    $asuransi = 3500;
                }
                else if ($kurir == 'Tiki' || $kurir == 'Si Cepat' || $kurir = 'Pos'){
                    $kurir_by = 15000;
                    $asuransi = 1500;
                }

                if ($produk == 'TV'){
                    $total = $qty * 3000000 + $kurir_by + $asuransi;
                }
                else if($produk == 'Refrigerator'){
                    $total = $qty * 6000000 + $kurir_by + $asuransi;
                }
                else if($produk == 'Washing Machine'){
                    $total = $qty * 4000000 + $kurir_by + $asuransi;
                }
            ?>
	</aside> <!-- col.// -->
	<aside class="col-sm-4">


<div class="card">
<article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Result</h4>
	<ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer : <?= $nama ?></li>
                    <li class="list-group-item">Item : <?= $produk ?></li>
                    <li class="list-group-item">Total Item : <?= $qty ?></li>
                    <li class="list-group-item">Date Shipping :  <?= $tanggal ?></li>
                    <li class="list-group-item">Courier Type : <?= $kurir ?></li>
                    <li class="list-group-item">Shipping Address : <?= $alamat ?></li>
                    <li class="list-group-item">Courier Cost : Rp. <?= $kurir_by ?></li>
                    <li class="list-group-item">Assurance Cost : Rp. <?= $asuransi ?></li>
                    <li class="list-group-item">Total Cost : Rp. <?= $total ?></li>
                   
                </ul>
</article>
</div> <!-- card.// -->

	</aside> <!-- col.// -->
	<aside class="col-sm-4">


<div class="card">
<article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Cost List</h4>
	
	<ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp. 3000000</li>
                    <li class="list-group-item">Refrigator : Rp. 6000000</li>
                    <li class="list-group-item">Washing Machine : Rp. 4000000</li>
                </ul>
</article>
</div> <!-- card.// -->


</body>
</html>