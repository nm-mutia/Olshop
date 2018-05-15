<!DOCTYPE html>
<html>
<head>
	<title>Reseller</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Cinzel|Josefin+Sans|Karma|Permanent+Marker|Philosopher|Playfair+Display|Raleway|Rammetto+One|Righteous|Coiny|Aclonica" rel="stylesheet">
	<style>
		body{
			background-color: pink;
		}
	</style>
</head>
<body>
	<div id="navi">
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		 	<a class="navbar-brand" href="#">Rona Clothing</a>
 			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="nav navbar-nav">
			    	<li class="nav-item active">
			        	<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="wanita.php">Wanita</a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="pria.php">Pria</a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="anak.php">Anak</a>
			      	</li>
			    </ul>
		  	</div>
		  	<form class="form-inline my-2 my-lg-0">
		      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		</nav>
	</div>

	<div style="margin-top:60px;">
		<div>
			<h2 align="center">Ketentuan Reseller</h2>
			<dl style="margin-left: 60px;">
			    <dt>Minimal Belanja</dt>
			    <dd>- Rp1.000.000,00</dd>
			    <dt>Minimal Per-Barang</dt>
			    <dd>- 10 pieces</dd>
			</dl>
		</div>
		<br>

		<h3 align="center">Daftar Reseller</h3>
		<?php
			include ('config.php');

			$sql = "SELECT * FROM pembeli WHERE pbl_status = 'reseller'";
			$result = mysqli_query($conn, $sql);

			if($result->num_rows != 0){
				while ($rows = $result->fetch_object()) {
					$id = $rows->pbl_id;
					$nama = $rows->pbl_nama;
					$alamat = $rows->pbl_alamat;
						echo "
							<div class='komenhe' align='center'>
								<h4>$nama</h4>
								<h5>$alamat</h5><br>
							</div>
							";
				}
			}else{
				echo "tidak ada komentar";
			}
		?>
		<br>

		<h3 align="center">Bergabung Menjadi Reseller</h3>
		<div align="center">
			<form class="col-md-10" action="addreseller.php" method="post">
				<div class="form-row">
					<div class="form-group col-md-8">
					   	<label for="innama">Nama</label>
					   	<input type="text" class="form-control" name="innama">
					</div>
					<div class="form-group col-md-4">
					   	<label for="inid">ID</label>
					   	<input type="text" class="form-control" name="inid" placeholder="ID terakhir + 1">
					</div>
				</div>
				<div class="form-row">
				    <div class="form-group col-md-6">
				    	<label for="inemail">Email</label>
				      	<input type="email" class="form-control" name="inemail" placeholder="Email">
				    </div>
				    <div class="form-group col-md-6">
				      	<label for="intelp">Telepon</label>
				      	<input type="text" class="form-control" name="intelp" placeholder="Telepon">
				    </div>
				</div>
				<div class="form-group">
				   	<label for="inadd">Address</label>
				   	<input type="text" class="form-control" name="inadd" placeholder="Jl. Diponegoro, Surabaya">
				</div>
				<div class="form-group">
					<div class="form-check">
				    	<input class="form-check-input" type="checkbox" id="gridCheck">
				      	<label class="form-check-label" for="gridCheck">
				        Check me out
				      	</label>
				    </div>
				</div>
				<div>
					<?php
						include ('config.php');

						$sqli = "SELECT pbl_id FROM pembeli ORDER BY pbl_id DESC LIMIT 1";
						$result2 = mysqli_query($conn, $sqli);

						if($result2->num_rows != 0){
							while ($rows = $result2->fetch_object()) {
								$id = $rows->pbl_id;
									echo "
										<div class='komenhe'>
											<h3>ID terakhir :</h3>
											<h4>$id</h4>
										</div>
										";
							}
						}else{
							echo "tidak ada komentar";
						}
					?>
				</div>
				<button type="submit" class="btn btn-primary" name="submit">Daftar</button>
			</form>
			<br>
		</div>
	</div>

</body>
</html>