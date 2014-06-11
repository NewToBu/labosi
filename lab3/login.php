<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>

  <!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>

  <header class="site-header">
     <div class="row">
         <img src="images/logo.png">
   
         <div class="gumb column column-2">
	        <a href="login.html"><button type="button" class="bttn" >Odjava</button></a>
	     </div>
		 
         <div class="korisnik column column-3">
	     
    		 <h2>  
                 
				   <?php  
 
                     session_start();
					 
					 /* $pravoime='tomo';
					 $pass='123'; */
                     $ime = $_GET['username'];
					 $lozinka = $_GET['password'];
					 $br=0;
					 
					$con=mysqli_connect("localhost","root","123","zdk");
                        // provjera konekcije
                    if (mysqli_connect_errno())
                      {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                         }
						 
						 
					    mysqli_query($con,"SET NAMES 'utf8'");
					    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
					/* povlače se podaci iz baze */
					    $result = mysqli_query($con,"SELECT * FROM korisnici");
                     /* ime odredišta koje je kliknuto se traži u bazi i ispisuje se određeni sadržaj */
					  while($row = mysqli_fetch_array($result))
					    { 
					 
					         
						if($ime==$row['username'] && $lozinka==$row['password']){
                     $br=1;
					 } 
					    } 
						
						if($br){
						
						 echo $ime;
						
						}
						else {
					 
					 
					 echo "<script type='text/javascript'>alert('Wrong Username or Password');
                          window.location='login.html';
                           </script>";
						

					   }

					  
					mysqli_close($con);
					
					
					

                     $_SESSION['pac'] =  $ime;					
				
	
                    ?>
	
 
				  
			</h2> 
	     </div>	 
	
     </div> 
  </header>


  <section class="gray-boxes row">
    <div class="meni column column-3">
      
	  <div class="izbor column column 2">
            
		  <a href="pacijenti.php">Pacijenti</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="unos.php">Unos</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		   <a href="#">Meni</a>
		
      </div>
	  
	  <div class="izbor column column 2">
            
		  <a href="#">Meni</a>
		
      </div>
     
    </div>

    <div class="sadrzaj column column-9">
         

            <div class="izborni row">
		   
		    <div class="sidro column column-3">
			 <a href="#1">Osobni podaci</a>
			 
			</div>
		    
			<div class="sidro column column-3">
			 <a href="#2">Školovanje</a>
			 
			</div>
			
			<div class="sidro column column-3">
			 <a href="#3">Radno iskustvo</a>
			 
			</div>
			
			<div class="sidro column column-3">
			 <a href="#4">Znanja i vještne</a>
			 
			</div>
		   
		  </div>
		 
		 
         </br>
		 
		 
		 
		 
		 <h3><a name="1" onmouseover="document.getElementById('osobniPodaci').style.display = 'block';" onmouseout="document.getElementById('osobniPodaci').style.display = 'none';">Osobni podaci:</a></h3></br>
		 <div id="osobniPodaci">
			 
			 
			 <p>Tomislav Ivić, Bjelovar, 25.05.1992.</p></br>
		 </div>
		
		 
		 <h3><a name="2" onmouseover="document.getElementById('skolovanje').style.display = 'block';" onmouseout="document.getElementById('skolovanje').style.display = 'none';">Školovanje:</a></h3></br>
         <div id="skolovanje">
			 
			 <p>Područna škola Palešnik (1.- 4. razreda), </br> Osnovna škola Slavka Kolara Hercegovac, </br>Srednja škola: Tehnička škola Kutina, </br>Fakultet: TVZ</p></br>
         </div>
		 
		 
		 <h3><a name="3" onmouseover="document.getElementById('radnoIskustvo').style.display = 'block';" onmouseout="document.getElementById('radnoIskustvo').style.display = 'none';">Radno iskustvo:</a></h3></br>
		 <div id="radnoIskustvo">

			 <p>Rad u punionici pića, ljepljenje plakata, ličenje zidova</p></br>
         </div>
		 
		 
		 <h3><a name="4" onmouseover="document.getElementById('znanja').style.display = 'block';" onmouseout="document.getElementById('znanja').style.display = 'none';">Znanja i vještine:</a></h3></br>
         <div id="znanja"> 

			 <p>MS Excel - Vrlo dobro </br>
				MS Word - Vrlo dobro </br>
				MS PowerPoint - Vrlo dobro </br>
				Movie Maker - Odlično </br>
				Crtanje 3D objekata u SketchUp-u i samo poznavanje programa - Odlično </br>
				Html - Vrlo dobro </br>
				CSS - Vrlo dobro </br>
				C - Osnovno </br>
				ličenje zidova</br>
				2D oslikavanje zidova</br>
				Ručna obrada drva </br>
				Izrada jednostavnijeg drvenog namještaja</br>
			 </p>		 
			 
		  </div>
		
	  
	  <div id="reklama">
	  <a href="http://imstore.bet365affiliates.com/Tracker.aspx?AffiliateId=9899&amp;AffiliateCode=365_293274&amp;CID=198&amp;DID=5&amp;TID=1&amp;PID=149&amp;LNG=1" target="_blank">
	  <img src="http://imstore.bet365affiliates.com/?AffiliateCode=365_293274&amp;CID=198&amp;DID=5&amp;TID=1&amp;PID=149&amp;LNG=1" border="0"></a>
	  </div>
	  
	  <button type="button" class="bttn" onclick="document.getElementById('reklama').style.display = 'none';" >Reklama</button>
	  
     </div>
	 
	
	 

  </section>

 

  <footer class="site-footer">
  
	<hr>
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>