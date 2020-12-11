<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

    <title>Home</title>
  </head>
  <body>
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" href="#">Profil <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="#">Booking</a>
          <a class="nav-link" href="#">Availability Room</a>
          <a class="nav-link" href="#">History</a>
          <a class="nav-link" href="#">E-ticket</a>
        </div>
      </div>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <h1 class="display-4">History Transaction</h1>
      </div>
    </div>

    <div class="container">
	    <table id="example" class="table table-striped table-bordered" >
		        <thead>
		          <tr>
		            <th scope="col">No</th>
		            <th scope="col">No Booking</th>
		            <th scope="col">Nama Pemesan</th>
		            <th scope="col">Tanggal Booking</th>
		            <th scope="col">Tanggal & Waktu Mulai</th>
		            <th scope="col">Tanggal & Waktu Selesai</th>
		            <th scope="col">Nama Ruangan</th>
		            <th scope="col">Deskripsi Booking</th>
		            <th scope="col">Status</th>
		          </tr>
		        </thead>
		        <tbody>
		        <?php 
		        	include 'koneksi.php';
		        	$pesan = mysqli_query($koneksi, "select * from pesanan");
		        	while($row = mysqli_fetch_array($pesan))
		        	{
		        		echo "<tr>
		        		<td>".$row['No']."</td>
		        		<td>".$row['No_Booking']."</td>
		        		<td>".$row['Nama_Pemesan']."</td>
		        		<td>".$row['Tanggal_Booking']."</td>
		        		<td>".$row['Tanggal_Waktu_Mulai']."</td>
		        		<td>".$row['Tanggal_Waktu_Selesai']."</td>
		        		<td>".$row['Nama_Ruangan']."</td>
		        		<td>".$row['Deskripsi_Booking']."</td>
		        		<td>".$row['Status']."</td>
		        		</tr>";
		        	}
		         ?>
		         </tbody>
	    </table>
	</div>
	    <script>
	    	$(document).ready(function() {
		    	$('#example').DataTable();
			} );
	    </script>
  









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>