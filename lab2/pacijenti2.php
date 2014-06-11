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
                   /*  $ime = $_GET['username']; */
                    echo $_SESSION['pac'];
	
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
		   
		    <div class="column column-3">
			 <form action="pacijenti2.php" method="GET">
			  Pretraži: <input type="search" name="trazi"><br>
			  <input type="submit">
			</form>
			 
			</div>
		    
		<!--	<div class="sidro column column-3">
			 <a href="#2">Školovanje</a>
			 
			</div>
			
			<div class="sidro column column-3">
			 <a href="#3">Radno iskustvo</a>
			 
			</div>
			
			<div class="sidro column column-3">
			 <a href="#4">Znanja i vještne</a>
			 
			</div> -->
		   
		  </div>
		 
		  <!-- 
         </br>
		 <h3><a name="1">Osobni podaci:</a></h3></br>
		 
		 <p>Tomislav Ivić, Bjelovar, 25.05.1992.</p></br>
		 
		 <h3><a name="2">Školovanje:</a></h3></br>
		 
		 <p>Područna škola Palešnik (1.- 4. razreda), </br> Osnovna škola Slavka Kolara Hercegovac, </br>Srednja škola: Tehnička škola Kutina, </br>Fakultet: TVZ</p></br>

         <h3><a name="3">Radno iskustvo:</a></h3></br>

         <p>Rad u punionici pića, ljepljenje plakata, ličenje zidova</p></br>

         <h3><a name="4">Znanja i vještine:</a></h3></br>

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
		 -->
							 <?php
							 
							 $rijec = $_GET['trazi'];
					
					$mystring  = 'ivica';
					$pos = strpos($mystring, $rijec);

					// Note our use of ===.  Simply == would not work as expected
					// because the position of 'a' was the 0th (first) character.
					if ($pos === false) {
						echo "The string '$rijec' was not found in the string '$mystring'";
					} else {
						echo "The string '$rijec' was found in the string '$mystring'";
						echo " and exists at position $pos";
					}
					
					
											
					
						

						// gets all <p> tags
						/* $images=document.getElementsByTagName('td');
						
						echo $images[0]; */
											



							$xml = file_get_contents('pacijenti.php');

							$dom = new DOMDocument;
							@$dom->loadHTML($xml);
							$books = $dom->getElementsByTagName('tr');
							foreach ($books as $td) {


								echo $td->nodeValue;
							}







											
	               ?>
		    
			   
		
	  
     </div>

  </section>

 

  <footer class="site-footer">
  
	<hr>
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>