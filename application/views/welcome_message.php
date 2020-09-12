<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	
	<script src="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js"></script>
	<link href="https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css" rel="stylesheet" />
    <style>
        #map { position:fixed; top:0; bottom:0; width:30%; height:30%; }
    </style>

	<title>Hello, world!</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

		<a class="navbar-brand" href="#">Malas Ngoding</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Tentang</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Tutorial
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Tutorial HTML</a>
						<a class="dropdown-item" href="#">Tutorial CSS</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Tutorial Bootstrap</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link Mati</a>
				</li>
			</ul>

			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
			</form>

		</div>

	</nav>

	<div class="container">
		<div>
			<br>
			<h2 class="text-center">Deteksi Dini Covid-19</h2>
			<br>
		</div>
		<form class="form-group" action="">
			<h4>Gejala Pasien</h4><hr>
			<div class="form-group">
				<h6>Saya sedang mengalami gejala demam</h6>
				<label for="ya">Ya</label>
				<input class="" style="margin-right:50px;" type="radio" name="demam" id="ya" value="Demam">
				<label for="tidak">Tidak</label>
				<input class="" style="" type="radio" name="demam" id="tidak" value="Tidak demam">
			</div>
			<div class="form-group">
				<h6>Saya sedang mengalami gejala batuk/pilek</h6>
				<label for="ya">Ya</label>
				<input class="" style="margin-right:50px;" type="radio" name="batukpilek" id="ya" value="Batukpilek">
				<label for="tidak">Tidak</label>
				<input class="" style="" type="radio" name="batukpilek" id="tidak" value="Tidak batukpilek">
			</div>
			<div class="form-group">
				<h6>Saya sedang mengalami gejala sesak nafas</h6>
				<label for="ya">Ya</label>
				<input class="" style="margin-right:50px;" type="radio" name="sesaknafas" id="ya" value="Sesak nafas">
				<label for="tidak">Tidak</label>
				<input class="" style="" type="radio" name="sesaknafas" id="tidak" value="Tidak sesak nafas">
			</div>
			<div class="form-group">
				<h6>Saya sedang mengalami gejala nyeri tenggorokan</h6>
				<label for="ya">Ya</label>
				<input class="" style="margin-right:50px;" type="radio" name="nyeritenggorokan" id="ya" value="Nyeri tenggorokan">
				<label for="tidak">Tidak</label>
				<input class="" style="" type="radio" name="nyeritenggorokan" id="tidak" value="Tidak nyeri tenggorokan">
			</div>
			<div class="form-group">
				<h6>Lama penyakit kurang dari 14 hari</h6>
				<label for="ya">Ya</label>
				<input class="" style="margin-right:50px;" type="radio" name="durasi" id="ya" value="Durasi 14 hari">
				<label for="tidak">Tidak</label>
				<input class="" style="" type="radio" name="durasi" id="tidak" value="Tidak berdurasi">
			</div>
			<hr>
			<h4>Riwayat Pasien</h4>
			<div class="form-group">
				<h6>Memiliki riwayat kontak dengan pasien penderita terkonfirmasi positif Covid-19</h6>
				<label for="ya">Ya</label>
				<input class="" style="margin-right:50px;" type="radio" name="kontak" id="ya" value="Kontaminasi">
				<label for="tidak">Tidak</label>
				<input class="" style="" type="radio" name="kontak" id="tidak" value="Tidak terkontaminasi">
			</div>
			<hr>
			<h4>Mobilitas Pasien</h4>
			<div class="form-group">
				<h6>Memiliki riwayat berpergian keluar negeri </h6>
				<label for="ya">Ya</label>
				<input class="" style="margin-right:50px;" type="radio" name="keluarnegeri" id="ya" value="Keluar negeri">
				<label for="tidak">Tidak</label>
				<input class="" style="" type="radio" name="keluarnegeri" id="tidak"value="Di dalam negeri">
			</div>
			<div class="form-group">
				<h6>Memiliki riwayat bepergian ke zona merah terdampak Covid-19</h6>
				<label for="ya">Ya</label>
				<input class="" style="margin-right:50px;" type="radio" name="zonamerah" id="ya" value="Bepergian zona merah">
				<label for="tidak">Tidak</label>
				<input class="" style="" type="radio" name="zonamerah" id="tidak" value="Tidak bepergian ke zona merah">
			</div>
			<hr>
			<!-- <div class="form-group form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="checkbox" name="remember"> Remember me
				</label>
			</div> -->
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>


	<!-- <div id='map'></div> -->
	
	<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoic2licm9tdWxpcyIsImEiOiJja2V6M2Iza20xYzM2MnpsOWVnMGRvMTUzIn0.McJFb_ixIbKRvW1KHjjjmw';
	var map = new mapboxgl.Map({
		container: 'map', // nama container id untuk memuat map, di sini ada pada baris ke-16
		style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location, menentukan tampilan map
		center: [112.73367880118164, -7.7201130187395659], // starting position [lng, lat]
		zoom: 2 // starting zoom
	});
	</script>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
</body>

</html>
