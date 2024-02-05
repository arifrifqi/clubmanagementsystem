<!DOCTYPE html>
<?php 
include('dbcon.php');
include('session.php'); 
$result=mysqli_query($con, "select * from members where student_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>
<html>
<head>
<title>Welcome to EEC Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("img/banner.png");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

.mySlides {display:none;}

</style>


  

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <img src="img/eeclogo.png" width="75" class="w3-left w3-padding" style="max-width:700px"> 
    <a href="#home" class="w3-bar-item w3-button w3-wide w3-hover-yellow">ENGLISH ENTHUSIASTS CLUB</a>
    <!-- Right-sided navbar links -->
 
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button w3-hover-yellow"><i class="fa fa-info"></i> ABOUT</a>
      <a href="#team" class="w3-bar-item w3-button w3-hover-yellow"><i class="fa fa-group"></i> TEAM</a>
      <a href="#activity" class="w3-bar-item w3-button w3-hover-yellow"><i class="fa fa-file"></i> ACTIVITY</a>
      <a href="indexadmin.php" class="w3-bar-item w3-button w3-hover-yellow"><i class="fa fa-briefcase"></i> ADMIN</a>
      <a href="#membership" class="w3-bar-item w3-button w3-hover-yellow"><i class="fa fa-star"></i> MEMBERSHIP</a>
      <a href="#gallery" class="w3-bar-item w3-button w3-hover-yellow"><i class="fa fa-image"></i> GALLERY</a>
      <a href="#contact" class="w3-bar-item w3-button w3-hover-yellow"><i class="fa fa-envelope"></i> CONTACT</a>
      <a href="logout.php" class="w3-bar-item w3-button w3-hover-yellow"><i class="fa fa-sign-out"></i></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>



<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small"><b>Hello, <?php echo $row['first_name']; ?></b></span><br>
    <span class="w3-large">Welcome to English Enthusiasts Club!</span><br>
    <span class="w3-large">For the Love of English: Embrace, Engage, Enchant.</span>
    <p><a href="indexadmin.php" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-hover-opacity-off w3-hover-yellow">Login as Admin</a></p>
  </div> 
  
  <div class="w3-display-bottomleft w3-text-white w3-large" style="padding:24px 48px">
    <a style="  text-decoration:none;
    color: white;" href="https://www.facebook.com/profile.php?id=100075775593844" target="_blank" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a style="  text-decoration:none;
    color: white;" href="https://www.instagram.com/eec_2023" target="_blank" class="fa fa-instagram w3-hover-opacity"></a>
    <a style="  text-decoration:none;
    color: white;" href="www.youtube.com/@chewanmuhammadarifrifqiche1741" target="_blank" class="fa fa-youtube w3-hover-opacity"></a>
  </div>
  </header>

<div class="w3-row" style="padding:100px 16px" id="logo">
  <h3 class="w3-center"><b>ABOUT THE LOGO</h3></b>
  <p class="w3-center w3-large">The Logo of our Club</p>
  <div class="w3-third w3-container w3-center">
    <img src="img/books.png" class="w3-padding-16" style="width:50%">
    <p>Positioned at the heart of the logo, a carefully arranged stack of books becomes a central motif. This stack symbolizes not only a collection of literature but also the depth and breadth of knowledge that English language enthusiasts seek to discover within the club.</p> 
  </div>
  <div class="w3-third w3-container w3-center">
    <img src="img/eeclogo.png" class="w3-padding-16" style="width:50%"> 
    <p>The seamless integration of these elements not only evokes a sense of scholarly achievement but also highlights the dynamic and interconnected nature of language, learning, and literary exploration within the club. Overall, the club logo serves as a powerful visual representation of the club's values.</p>
  </div>
  <div class="w3-third w3-container w3-center">
    <img src="img/mortar.png" class="w3-padding-16" style="width:50%"> 
    <p>Positioned above the stack of books, a classic mortarboard with a hanging tassel represents academic achievement and commitment to intellectual pursuits. This element is used to signify the dedication of the club to excellence in the study of the English language.</p>
  </div>
</div>

<!-- About Section -->
<div class="w3-container w3-light-grey" style="padding:100px 16px" id="about">
  <h3 class="w3-center"><b>ABOUT THE CLUB</h3></b>
  <p class="w3-center w3-large">Key Features of our Club</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-arrows w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large"><b>Versatility</p></b>
      <p>Offering a diverse range of activities and discussions that explore various aspects of the English language.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><b>Engagement</p></b>
      <p>Engaging members with hands-on workshops, events, and interactive sessions to enhance their language skills.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-users w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><b>Community</p></b>
      <p>Building a supportive community where English enthusiasts can connect, share ideas, and collaborate on projects.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-line-chart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><b>Growth</p></b>
      <p>Fostering a culture of continuous learning and personal growth through educational resources, and mentorship opportunities.</p>
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container w3-light-blue" style="padding:100px 16px" id="team">
  <h3 class="w3-center"><b>THE TEAM</h3></b>
  <p class="w3-center w3-large">The Highest Council of the Club</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-white w3-hover-shadow">
        <img src="img/pres.png" class="w3-padding-16" alt="John" style="width:80%">
        <div class="w3-container">
          <h4><p class="w3-center">Che Wan Muhammad Arif Rifqi Che Wan Jaafar</h4></p>
          <p class="w3-opacity w3-center">President</p>
          <p class="w3-center">"Adversity is a test of character. Embrace challenges as opportunities to grow stronger and wiser."</p>
         
        </div>
      </div>
    </div>
    
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-white w3-hover-shadow">
        <img src="img/vice.png" class="w3-padding-16" alt="Jane" style="width:80%">
        <div class="w3-container">
          <h4><p class="w3-center">Siti Nor Alia <br>Mohd Lokman</h4></p>
          <p class="w3-opacity w3-center">Vice President</p>
          <p class="w3-center">"Success is not just about achieving your goals; it's also about the person you become in the process."</p>

        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-white w3-hover-shadow">
        <img src="img/secretary.png" class="w3-padding-16" alt="Mike" style="width:80%">
        <div class="w3-container">
          <h4><p class="w3-center">Wan Nur Amalin Eliana Wan Zulman</h4></p>
          <p class="w3-opacity w3-center">Secretary</p>
          <p class="w3-center">"Life is like a novel. You have no idea what is going to happen until you turn the page."</p>

        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-white w3-hover-shadow">
        <img src="img/treasure.png" class="w3-padding-16" alt="Dan" style="width:80%">
        <div class="w3-container">
          <h4><p class="w3-center">Mohd Aminuddin <br>Mat Lazat</h4></p>
          <p class="w3-opacity w3-center">Treasurer</p>
          <p class="w3-center">"True wisdom is not knowing much but applying what you know in a manner beneficial to yourself and others."</p>

        </div>
      </div>
    </div>
  </div>
</div>


<!-- Membership Section-->
<div class="w3-container w3-light-grey" style="padding:100px 16px" id="membership">
    <h3 class="w3-center"><b>MEMBERSHIP FORM OF ENGLISH ENTHUSIASTS CLUB 2024</b></h3>
    <p class="w3-center w3-large">Elevate Your Language Journey – Join the Club, Embrace the Eloquence!</p>
    <a href="add-new.php" class="btn btn-dark mb-3">Register here</a>

    <table class="table table-hover text-center w3-white">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
         
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["student_id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>


<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-light-blue w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Partners
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Projects Done
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">89+</span>
    <br>Happy Clients
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Meetings
  </div>
</div>

<!-- Gallery Section -->
<div class="w3-container" style="padding:100px 16px" id="gallery">
  <h3 class="w3-center"><b>OUR GALLERY</h3></b>
  <p class="w3-center w3-large">In Frames We Flourish: A Pictorial Journey Through Club Adventures.</p>

<div class="w3-content w3-display-container" style="max-width:700px">

<div class="w3-display-container mySlides">
  <img src="img/kidkk.png" style="width:100%" onclick="onClick(this)">
  <div class="w3-display-bottomleft w3-medium w3-padding-16 w3-black w3-center" style="width:100%">
    Creative Writing Workshop 2023
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img/retronight.png" style="width:100%" onclick="onClick(this)">
  <div class="w3-display-bottomleft w3-medium w3-padding-16 w3-black w3-center" style="width:100%">
    Pre Graduation and Appreciation Night
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img/pubspeak.png" style="width:100%" onclick="onClick(this)">
  <div class="w3-display-bottomleft w3-medium w3-padding-16 w3-black w3-center" style="width:100%">
    InfoSys Public Speaking Competition
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img/skk.png" style="width:100%" onclick="onClick(this)">
  <div class="w3-display-bottomleft w3-medium w3-padding-16 w3-black w3-center" style="width:100%">
    CSR: Love Paint on SK Kelaweh
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img/saf.png" style="width:100%" onclick="onClick(this)">
  <div class="w3-display-bottomleft w3-medium w3-padding-16 w3-black w3-center" style="width:100%">
    GO English! Championship 2023
  </div>
</div>

<div class="w3-display-container mySlides">
  <img src="img/talk.png" style="width:100%" onclick="onClick(this)">
  <div class="w3-display-bottomleft w3-medium w3-padding-16 w3-black w3-center" style="width:100%">
    Therapy Talk: MindStrength Dialogues
  </div>
</div>

<button class="w3-button w3-display-left w3-black w3-hover-yellow" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black w3-hover-yellow" onclick="plusDivs(1)">&#10095;</button>

</div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


<!-- Activity Section -->
<div class="w3-container w3-light-grey" style="padding:100px 16px" id="activity">
    <h3 class="w3-center"><b>ACTIVITIES BY ENGLISH ENTHUSIASTS CLUB</b></h3>
    <p class="w3-center w3-large">Igniting Passion, One Activity at a Time.</p>
    

    <table class="table table-hover text-center w3-white">
      <thead class="table-dark">
        <tr>
          <th scope="col">Activity ID</th>
          <th scope="col">Activity Name</th>
          <th scope="col">Activity Date</th>
          <th scope="col">In collaboration with</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `activity`";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["activity_id"] ?></td>
            <td><?php echo $row["activity_name"] ?></td>
            <td><?php echo $row["activity_date"] ?></td>
            <td><?php echo $row["club_name"] ?></td>
           
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>


<!-- Contact Section -->
<div class="w3-container w3-light-blue" style="padding:128px 16px" id="contact">
  <h3 class="w3-center"><b>CONTACT</h3></b>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
    <a href="add_contact.php" class="btn btn-dark mb-3">Add Message</a>

    <table class="table table-hover text-center w3-white">
      <thead class="table-dark">
        <tr>
          <th scope="col">Contact ID</th>
          <th scope="col">Contact Name</th>
          <th scope="col">Contact Student ID</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Email</th>
          <th scope="col">Comment</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `contact`";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["contact_id"] ?></td>
            <td><?php echo $row["contact_name"] ?></td>
            <td><?php echo $row["contact_studid"] ?></td>
            <td><?php echo $row["contact_phone"] ?></td>
            <td><?php echo $row["contact_email"] ?></td>
            <td><?php echo $row["contact_desc"] ?></td>


            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey w3-hover-yellow"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a style="  text-decoration:none;
    color: white;" href="https://www.facebook.com/profile.php?id=100075775593844" target="_blank" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a style="  text-decoration:none;
    color: white;" href="https://www.instagram.com/eec_2023" target="_blank" class="fa fa-instagram w3-hover-opacity"></a>
    <a style="  text-decoration:none;
    color: white;" href="www.youtube.com/@chewanmuhammadarifrifqiche1741" target="_blank" class="fa fa-youtube w3-hover-opacity"></a>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" style="  text-decoration:none;
    color: white;" title="W3.CSS" target="_blank" class="w3-hover-text-yellow">w3.css</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>