<html>
    <head>
        <div class="blue-grey darken-3">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" language="javascript"> $(document).ready(function(){
      $('.carousel').carousel();
    });</script>
    <script type="text/javascript" language="javascript">
    $('.carousel.carousel-slider').carousel({fullWidth: true});
</script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>BUS BOOKING</title>
      <nav class="red accent-1" >
    <div class="nav-wrapper z-depth-3">
        
      <a href="#" class="brand-logo center">BUS BOOKING</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="#">Home</a></li>
        <li><a href="#">Sign In</a></li>
        
        <li><a href="#">Booking</a></li>
      </ul>
        
    </div>
  </nav>
        
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="bus1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="bus2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="bus3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="bus4.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="bus5.jpg"></a>
  </div>

    </head>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
      <div class="blue-grey darken-3">
      
                    
          
          <div class="row z-depth-3 teal lighten-2">
              <div class="col s1"></div>
              <div class="col s1"></div>
        <div class="col s1 m8">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title red accent-1"><center>ROUTE</center></span>
              <p><?php
$connect = mysqli_connect("sql12.freemysqlhosting.net","sql12172008","hqcbMYJuYt","sql12172008");


$sql = 'SELECT * FROM bus_inf';
$result = mysqli_query($connect,$sql);
if(!$result){
		echo mysqli_error().'<br>';
		die('Can not access database!');
}else{
	echo '<table border="1" cellpading="0" cellspacing="0">';
	echo '<tr>';
	echo '<td>';
	echo 'bus_number';
	echo '</td>';
	echo '<td>';
	echo 'to province';
	echo '</td>';
	echo '<td>';
	echo 'time';
	echo '</td>';
	echo '<td>';
	echo 'price';
	echo '</td>';
	
	echo '</tr>';
  while ($row = mysqli_fetch_assoc($result)){
					echo'<tr>';
	while(list($key,$value)=each($row)){
								if($value==''){
										echo'<td>'.'$nbsp;'.'</td>';
								}else{
										echo'<td>'.$value.'</td>';
								}
	}
	echo'</tr>';
  }
  echo'</table>';
   

}


                        mysqli_close($connect);
                        




?></p>
            </div>
            <div class="card-action ">
              <a href="#"><a class="red accent-1 waves-effect waves-light btn-flat "><font color = "white">BOOKING!</font></a></a>
              
            </div>
          </div>
        </div>
          
          </div>
       
  

                 

      <div class="row z-depth-3 teal lighten-2">
          
          <div  class="container z-depth-3">
          
         
              <div class="row"></div>
          <form class="blue-grey darken-1 col s6 " action="#" method="post">
      
      <div class="row">
        <div class="input-field col s11">
          <input name="username" id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s11">
            <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      
        <div class="row">
            <div class="col s1">
                
                <button   class="red accent-1 btn waves-effect waves-light" type="submit" name="submit">SignIn!
      </button> 
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>     
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
            </div>
        </div>
    </form>
       
           <form class=" blue-grey darken-1 col s6 " action="#" method="post">
      
      <div class="row">
        <div class="input-field col s11">
          <input name="username" id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s11">
            <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s11">
            <input id="contact" type="text" name="contact" class="validate">
          <label for="contact">Phone Number</label>
        </div>
      </div>
      <div class="row">
        <div class="col s11">
           <div class="input-field s11">
               <input id="email" type="email" name="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>
        <div class="row">
            <div class="col s1">
                
                <button   class="red accent-1 btn waves-effect waves-light" type="submit" name="submit">SignUp!
      </button> 
                
            </div>
            </div>
    </form>
          
     
      
          </div>
  </div>
          
          
          
      </div>
      
      
      
      
      
      <!--footer-->
      
      <footer class="page-footer red accent-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">BUS BOOKING SYSTEM</h5>
                <p class="grey-text text-lighten-4">This page is for me</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><i class="medium material-icons">location_on</i></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Text
            <a class="grey-text text-lighten-4 right"  href="www.facebook.com/slurpee.ichitan">Contact</a>
            </div>
          </div>
        </footer>
            
      
    </body>
  </html>
