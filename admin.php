<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="menue_footer.css" rel="stylesheet">
<link href="adminStyleSheet.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Admin page</title>
</head>
<body>
<!----------------------Menue---------------------------->

<div class="nav-color">
 <div class="w3-bar"> 

  <div class="w3-bar-item w3-left logo">
     <h3>Ideal Tourism in <span> Riyadh </span></h3> 
  </div>
 <div class="link-2"><a href="admin.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-user w3-right" aria-hidden="true"></i></div>

   <div class="link-1"><a href="home.php" class="w3-bar-item w3-button Mcenter" > Home </a></div>
   <div class="link-3"><a href="explore.php" class="w3-bar-item w3-button w3-left">Explore Riyadh</a></div>
   <div class="link-4"><a href="about_riyadh.html" class="w3-bar-item w3-button w3-left">About Riyadh</a></div>
   <div class="link-5"><a href="recommendations.html" class="w3-bar-item w3-button w3-left">Recommendations</a></div>

  </div>
</div>

<!---------- Page Container ------------------------------>
<div class="w3-container w3-content AdminPageContent">    
  <!-- The Grid -->
  <div class="w3-row">

    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center w3-opacity left">My Profile</h4>
         <p class="w3-center">
         <img class = "avatar" src = "Photos/avatar1.png"></p>
         <hr>
         <p><i class="fa fa-group fa-fw w3-margin-right w3-text-theme"></i> Danah Alsahfi</p>
         <p><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i> Danah@gmail.com</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Saudi, Yanbu</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 11, 2000</p>
        </div>
        <p class="fa fa-edit fa-fw w3-margin-left"></p>
      </div>
    </div>


 
 <!-- Middle Column -->

  <div class="w3-col m7 w3-margin ">
    <div class="w3-row-padding">
      <div class="w3-col m12">

         <h3 class="w3-opacity"> Your favorite lists here!</h3> 
          <!----------------------------------fav list ------------------------------->
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
             <?php
             include_once ("conncetion.php");
             
           $query = "SELECT * FROM fav_place";
           $result = mysqli_query($conn , $query);
           ?>

          <table class="w3-table-all">
          <tr>
          <th>NO</th>
          <th>Place name</th>
          <th>saved at</th>
          </tr>
          <?php
             while ($rows = mysqli_fetch_assoc($result)) 
             {
              ?>
              <tr>
                <td ><?php echo $rows['id']; ?> </td>
                <td><?php echo $rows['place_name']; ?> </td>
                <td><?php echo date("Y/m/d") ?> </td>

              </tr>
            <?php
             }
            ?>
          </table> <br>
            </div>       
          </div>
         </div>
       </div> <br>
<!----------------------Recommendations---------------------------->

<div class="recommendation_section">
    <div class="w3-row-padding">
      <div class="w3-col m12">
        <h3 class="w3-opacity"> Your previous recommendation!</h3> 
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding ">  

                <img class = "avatar" src = "Photos/avatar1.png">
                <h3 id = "username">Danah Alsahafi</h3> 
                <a href = "https://www.google.com/search?q=riyadh%20park&oq=riyadh+park&aqs=chrome.0.69i59j0i512j69i59j0i22i30i457j0i22i30j0i390j69i60l2.5576j0j7&sourceid=chrome&ie=UTF-8&newwindow=1&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=12609979476298955099&lqi=CgtyaXlhZGggcGFya0jblIWUprCAgAhaFxABGAAYASILcml5YWRoIHBhcmsqAggCkgEPc2hvcHBpbmdfY2VudGVymgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVVJoZFhFeVVWcFJFQUU&ved=2ahUKEwju3Iyx_On2AhXjgs4BHdBiDLsQvS56BAgEEAE&rlst=f#rlfi=hd:;si:12609979476298955099,l,CgtyaXlhZGggcGFya0jblIWUprCAgAhaFxABGAAYASILcml5YWRoIHBhcmsqAggCkgEPc2hvcHBpbmdfY2VudGVymgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVVJoZFhFeVVWcFJFQUU;mv:[[24.764551299999997,46.7418051],[24.7208783,46.6224115]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2" 
                class = "location"><i class="material-icons">location_on</i>Prince Mohammed bin Saad bin Abdulaziz Road</a> 
                <span class="w3-opacity w3-right w3-font">32 min</span>
                <span class = "w3-opacity place_type">#Shopping</span><br>
                <hr class = "horizontal_line">
            <div class="w3-container w3-center w3-opacity">
                    <p>
                    One of the best Mall in Riyadh, Keeping customers at the heart of its operation, 
                    unparallel shoping experience, world class brandes is the highlight, 
                    over 2000 car parking slots. neat and clean, amazing experience, wonderful creations.
                    </p>

                <div class="w3-content slideRec">
                    <img class="mySlides_rec " src="Photos/riyadh-park-mall.jpg"><br><br>
                </div>
                <a href="recommendations.html" class="w3-opacity linkPlace"> Veiw as a page visitor</a>
             </div>
           </div>
         </div>
      </div>
    </div>
  </div>
 </div>
</div>

<button onclick="w3_showForm()" class="w3-button w3-center w3-padding-large btnRecomn">Add a recommendation</button>
<script src = "SlideShow.js"></script>
</div>


 <!------------------------Form--------------------------------------->
 

<!--------------------------Footer------------------------------------>

<footer id="footer"> 
  <section id="footer">
    <footer class="footer-distributed">
      <div class="footer-left"> 

        <h3>Ideal Tourism in <span> Riyadh </span></h3>
        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">Explore Riyadh</a>
          ·
          <a href="#">About Riyadh</a>
          ·
          <a href="#">Contact</a>
        </p>
 
        <p class="footer-company-name">Ideal Tourism in Riyadh &copy; 2021</p>
      </div>
     
      <div class="footer-center">
         <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Yanbu</span> SA(Saudi Arabia)</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+966 000000000</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="#">IdealTourism@gmail.com</a></p>
        </div>
      </div>
 
      <div class="footer-right">
          <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </footer>
  </section> 
</footer>

</body>
</html>