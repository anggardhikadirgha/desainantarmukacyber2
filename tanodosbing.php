<?php
	$judul = $_POST['judulskripsi'];
	$periode= $_POST['thnajaran'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cybercampus Kel.5</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>
       

    </title>
    <style>
         body,html {
            background-color:white;
            margin:0;
            padding: 0;
            overflow:auto;
			animation: fadeInAnimation ease 1.5s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
    }
    @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

    </style>
</head>
<body>
	
  <header>
	

			<!-- BAGIAN HEADER UTAMA MEMUAT LOGO TULISAN DISPLAY PROFILE, DAN TOMBOL LOGOUT --> 
    <div class="headernav">
      <nav>
        <div class="paragrafe">
  
          <img style="horizontal-align:left;
          width: 80px;
          padding: 10px;
      padding-left: 50px;
          margin:auto;
          " src='img/branding/client-1.png' />

          <img style="horizontal-align:left;
		  padding-top:5px;
          padding-bottom: 0px;
          padding-left: 15px;
          margin:auto;
          " src='img/branding/client-3.png' />
		  
		  
		  <a style="
			  padding-top:5px;
			  padding-bottom: 10px;
			  padding-left: 5px;
			  padding-right:2px;
			  margin-right:20px;
			  font-family: Arial, Helvetica, sans-serif;
			  color:#e6b800;
			 ">Mahasiswa</a>
			 
          
              <div class="header-content" style="margin-top: 25px;  margin-bottom: 5px; margin-right: 20px">
              <div class="header-button">Logout</div>         
		      <div class="iduser">152011513049, Dirgha Anggardhika</div>

              </div>
        </div>
      </nav>
    </div>
  </header>
  
  
   

  
  
			<!-- BAGIAN NAVBAR UTAMA --> 

  <nav class="menu">	

    <div class="navcenter" style=" display:block; margin:auto;">
		<button class="openbtn" style="float:left;" onclick="openNav()" >???</button>  
		<a href="#home">Home</a>
		<a href="#biodata">Biodata</a>
		<a href="#akademik">Akademik</a>
		<a href="#dosen">Dosen</a>
		<a href="#keuangan">Keuangan</a>
		<a href="#perpustakaan">Perpustakaan</a>
		<a href="#kemahasiswaan">Kemahasiswaan</a>
		<a href="#pedoman">Pedoman</a>
	</div>
  </nav>
  
  
   <div id="mySidebar" class="sidebar">
	 <a href="javascript:void(0)" class="closebtn"  onclick="closeNav()">???</a>
	<br>
        <br>
	
	<div class="card">
		<img src="img/branding/profile.jpg" alt="Dirgha" style="width:50%">
		<h4>Dirgha Anggardhika</h4>
		<p class="title">Fakultas Vokasi</p>
		<div style="margin: 24px 0;">
	</div>
</div>


<br>
<a class="header-button" style="float:none; font-size:14px; padding-top:15px; padding-bottom:15px;   background-color: #915B1F; padding-left:10px; margin-top:10px; margin-bottom:10px; border: 0 px solid red;
  padding: 10px;                                                                                                                                                                                
  border-radius: 12px;  color:white;" href="kalender.html">Kalender Akademik</a>                                                                                                                     
<a class="header-button" style="float:none; font-size:14px; padding-top:15px; padding-bottom:15px;   background-color: #915B1F; padding-left:10px; margin-top:10px; margin-bottom:10px; border: 0 px solid red;
  padding: 10px;                                                                                                                                                                                
  border-radius: 12px;  color:white;" href="#akademik">Peserta MA</a>                                                                                                                           
<a class="header-button" style="float:none; font-size:14px; padding-top:15px; padding-bottom:15px;   background-color: #915B1F; padding-left:10px; margin-top:10px; margin-bottom:10px; border: 0 px solid red;
  padding: 10px;                                                                                                                                                                                
  border-radius: 12px;  color:white;" href="#pedoman">Kartu Rencana Studi</a>                                                                                                                   
<a class="header-button" style="float:none; font-size:14px; padding-top:15px; padding-bottom:15px;   background-color: #915B1F; padding-left:10px; margin-top:10px; margin-bottom:10px; border: 0 px solid red;
  padding: 10px;                                                                                                                                                                                
  border-radius: 12px;  color:white;" href="#dosen">Kartu Hasil Studi</a>                                                                                                                       
<a class="header-button" style="float:none; font-size:14px; padding-top:15px; padding-bottom:15px;   background-color: #915B1F; padding-left:10px; margin-top:10px; margin-bottom:10px; border: 0 px solid red;
  padding: 10px;                                                                                                                                                                                
  border-radius: 12px;  color:white;" href="#keuangan">Status Akademik</a>                                                                                                                      
<a class="header-button" style="float:none; font-size:14px; padding-top:15px; padding-bottom:15px;   background-color: #915B1F; padding-left:10px; margin-top:10px; margin-bottom:10px; border: 0 px solid red;
  padding: 10px;                                                                                                                                                                                
  border-radius: 12px;  color:white;" href="TA.html">Pengajuan Tugas Akhir</a>                                                                                                                    
<a class="header-button" style="float:none; font-size:14px; padding-top:15px; padding-bottom:15px;   background-color: #915B1F; padding-left:10px; margin-top:10px; margin-bottom:10px; border: 0 px solid red;
  padding: 10px;                                                                                                                                                                                 
  border-radius: 12px;  color:white;" href="#eval">Evaluasi / Kuesioner</a>                                                                                                                      
<a class="header-button" style="float:none; font-size:14px; padding-top:15px; padding-bottom:15px;   background-color: #915B1F; padding-left:10px; margin-top:10px; margin-bottom:10px; border: 0 px solid red;
  padding: 10px;                                                                                                                                                                                
  border-radius: 12px;  color:white;" href="#kemahasiswaan">Pengajuan Wisuda</a>                                                                                                                 
<a class="header-button" style="float:none; font-size:14px; padding-top:15px; padding-bottom:15px;   background-color: #915B1F; padding-left:10px; margin-top:10px; margin-bottom:10px; border: 0 px solid red;
  padding: 10px;                                                                                                                                                                                 
  border-radius: 12px;  color:white;" href="#perpustakaan">Publikasi Mahasiswa</a>                                                                                                              
<a class="header-button" style="float:none; font-size:14px; padding-top:15px; padding-bottom:15px;   background-color: #915B1F; padding-left:10px; margin-top:10px; margin-bottom:10px; border: 0 px solid red;
  padding: 10px;
  border-radius: 12px;  color:white;" href="#biodata">Kalender Akademik</a>
<br>

	</div>
	
	
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "220px";
  document.getElementById("mySidebar").style.marginLeft = "15px";
  document.getElementById("mySidebar").style.marginRight = "10px";
  document.getElementById("main").style.marginLeft = "220px";
  document.getElementById("main").style.paddingLeft = "80px";

}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
  
  
  
  
  
  
  
  

  <main id="main" class= "body_sec">
  
	<h2 style="text-align:left; 
	padding:10px;
	background-color:#915B1F; 
	border-radius:10px;  
	font-family: Arial, Helvetica, sans-serif;
	color:white;
	">Modul Skripsi / Tugas Akhir</h2>
     
  	
	<!--- Bagian input skripsi -->
	
	
	
	
	
	
	
	
	
	
	
	
	
  <div style="overflow-x: auto;">
  <table>
	<thead>
		<tr>
			<th>#</th>
			<th>Judul Tugas Akhir</th>
			<th>Periode</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
		
		<tr>
			<td>1.</td>
			<td><?php echo $_POST["judulskripsi"]; ?></td>
			<td><?php echo $_POST["thnajaran"]; ?></td>
			<td> Menunggu Verifikasi</td>
			<td>
				<a href="edit.html" class="button" style="background-color:blue">Ubah</a>
				<a href="TA.html" class="button">Hapus</a>
			</td>
		</tr>
		
		<tr>
			<td>2.</td>
			<td>Penggunaan Methode Pemberlajaran Hybrid Konvensional dan Perangkat gadget untuk Membantu mengasah Logika Anak usia Dini</td>
			<td>2022/2023 Genap</td>
			<td>Sudah Diverifikasi</td>
			<td>
				<a href="tadosbing1.html" class="button" style="background-color:blue">Menu Dosen Pembimbing</a>
			
			</td>
		</tr>
		
		
	</thead>
  </table>
  </div>
  
  
  
  
  
  
  
  	<script>
 for (var x=0; x<60; x++) 
{
     document.write("<br>");
}
 </script>
 
</main>

  
<!-- Footer Section -->
</body>
<footer>
    <p>
	<img style="
		  float:left;
		  horizontal-align:left;
          width: 80px;
          padding: 10px;
		  padding-left: 40px;
          margin:auto;
          " src='img/branding/unairwm.png' />
	
	</p>	
	<p style="float:left; font-size:20px; padding-left:15px; padding-bottom:10px; margin-top:40px; color:grey; overflow-wrap: break-word;">CYBERCAMPUS Universitas Airlangga</p>
  <p style="color:black; font-size 15px; margin-top:55px; text-align:center; margin:auto; padding-left:20px; padding-right:20px;">Copyright ?? 2011 - Universitas Airlangga.
    All Rights Reserved </p>

</footer>
   

</html>