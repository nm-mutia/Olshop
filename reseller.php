<!DOCTYPE html>
<html>
<head>
	<title>Reseller</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Cinzel|Josefin+Sans|Karma|Permanent+Marker|Philosopher|Playfair+Display|Raleway|Rammetto+One|Righteous|Coiny|Aclonica" rel="stylesheet">
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
			      	<li class="nav-item dropdown">
			        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Query</a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				        	<a class="dropdown-item" href="#">View</a>
				          	<a class="dropdown-item" href="#">Function</a>
				          	<a class="dropdown-item" href="#">Trigger</a>
				          	<a class="dropdown-item" href="#">Procedure</a>
				          	<a class="dropdown-item" href="#">Index</a>
				          	<a class="dropdown-item" href="#">Join</a>
				          	<a class="dropdown-item" href="#">Kursor</a>
				        </div>
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
							<div class='komenhe'>
								<h2>$nama</h2>
								<h3>$alamat</h3><br>
							</div>
							";
				}
			}else{
				echo "tidak ada komentar";
			}
		?>
	</div>

</body>
</html>