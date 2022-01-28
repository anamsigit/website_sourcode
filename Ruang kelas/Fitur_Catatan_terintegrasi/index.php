<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ruang Kelas</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<?php 
$server="localhost";
$username="ruangkelas";
$pw="123paswot";
$db="database_ruangkelas";
$connect=mysqli_connect($server,$username,$pw);

if($connect) {
		mysqli_select_db($connect, $db) or die("Database tidak ditemukan");
		echo "<b>        </b>";
	}else {
		echo "<b> Koneksi Gagal </b>";
	}

$idpelanggan = @$_GET['simpannama']; 

if($idpelanggan == ""){

  }else{
	
  $hubungsql= "INSERT INTO penampung_db (Nama, sesi) VALUES( '$idpelanggan' , 1 )";
  $hasil=mysqli_query($connect,$hubungsql);
  $result = mysqli_query($connect, "SELECT * FROM penampung_db WHERE sesi ='1' ");
  }

$result = mysqli_query($connect, "SELECT * FROM penampung_db WHERE sesi ='1' ");

if($idpelanggan == "reset"){
	echo "memulai sesi baru";
  $resetsql = "TRUNCATE TABLE penampung_db";
  $eksekusiresetsql=mysqli_query($connect, $resetsql);
  }else{}
?>

<body><center>
  <nav class="navbar navbar-light bg-dark shadow "> 
    <a class="navbar-brand text-light py-0" href="#">&nbsp;&nbsp;&nbsp;<b>Ruang Kelas</b> Kimia E</a>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
  </nav>
  
  <form>
    <div class="mb-3">
      <input name="simpannama" placeholder="  tuliskan sesuai format" type="form" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
      style=" position: relative; top :20px; left :5px;">
    </div>

    <button type="submit" class="btn btn-primary" 
    style=" position: relative; top :20px; left :5px;
    ">Submit</button>
  </form>
  <span onclick = "ngopytext()"> <br>

<?php 
$pemenuhkondisi = "gasken";
if ($pemenuhkondisi == "gasken") {
  while($row = mysqli_fetch_assoc($result)) {
    echo $row["ID"] . "." . " " . $row["Nama"] . "\n". "<br>"; // \n untuk enter saat di copy, <br> untuk enter saat tampil di HTML
  }
  }
mysqli_close($connect);
?>

  </span>
  </p></div>

<script>
        var vcopy = document.querySelector("span");
        function ngopytext(){
            document.execCommand("copy");
            alert("data di salin" )
        }

        vcopy.addEventListener("copy", function(event) {
          event.preventDefault();
          if (event.clipboardData) {
            event.clipboardData.setData("text/plain", vcopy.textContent);
            console.log(event.clipboardData.getData("text"))
          }
        });
</script>


</center></body>
</html>