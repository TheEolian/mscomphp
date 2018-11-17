<?php

  $result="";

  if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='SENDING@gmail.com';
    $mail->Password='SENDING_PASSWORD';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('RECEIVING_EMAIL@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['subject'];
    $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h1>';

      if(!$mail->send()){
        $result="Something went wrong! Please try again.";
      }
      else{
        $result="Thank you, ".$_POST['name']." for contacting me. I will get back to you soon!";
      }
  }

?>

<!DOCTYPE html>
<html>
<head>

  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

  <!--Let browser know website is optimized for mobile-->
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Michael Soldmann | Portfolio</title>
</head>

<body id="home" class="scrollspy grey darken-4">

  <!-- navbar -->

  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#home" class="brand-logo">Michael Soldmann</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#home">Home</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <ul class="side-nav" id="mobile-demo">
    <li><a href="#home">Home</a></li>
    <li><a href="#projects">Projects</a></li>
    <li><a href="#resume">Resume</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>


  <!-- Hero image and content -->

  <div class="section section__hero responsive-image" id="index-banner">
    <div class="container">
      <div class="row center">
        <div class="col s12">
          <h1 class="header center">Portfolio & Resume</h1>
          <!-- <h3 class="header">Web Design / Analytics</h3> -->
          <h5 class="header">Chicago Metropolitan Area</h5>
        </div>

      </div>


      <div class="row center">
        <a id="cta__main" href="#projects" class="btn btn-large hoverable">View Projects</a>
      </div>

      <div class="row center">
        <a href="https://www.linkedin.com/in/michael-soldmann-3a87b986/"><i class="fab fa-linkedin fa-3x hoverable waves-effect waves-light"></i></a>
        <a href="https://github.com/TheEolian"> <i class="fab fa-github-square fa-3x hoverable waves-effect waves-light"></i></a>
      </div>


    </div>
  </div>





  <!-- Projects secton -->

  <div id="projects" class="section container grey darken-4 scrollspy">
    <h4 class="center custom-blue mtop30">Web Portfolio</h4>
    <p class="center grey-text text-lighten-4 mtop20 mbot20 flow-text">The below projects were built with HTML5, CSS3, JavaScript, jQuery and additional libraries such as Bootstrap and Materialize.</p>
    <div class="row">

      <div class="col m6 s12">
        <div class="card hoverable">
          <div class="card-image hover">
            <a href="https://theeolian.github.io/veganoasis/"><img src="images/veganoasis.png"></a>
            </div>
          </div>
        </div>

        <div class="col m6 s12">
          <div class="card hoverable">
            <div class="card-image">
              <a href="https://theeolian.github.io/businessrocket/"><img src="images/bizrocket.png"></a>
              </div>
            </div>
          </div>

          <div class="col m6 s12">
            <div class="card hoverable">
              <div class="card-image">
                <a href="https://theeolian.github.io/dultra/"><img src="images/dultra.png"></a>
                </div>
              </div>
            </div>


            <div class="col m6 s12">
              <div class="card hoverable">
                <div class="card-image">
                  <a href="https://theeolian.github.io/Dream-Travel/"><img src="images/dreamtravel.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div><!-- ./container -->

    <!-- Resume secton -->

    <div id="resume" class="section_resume grey darken-4 s12 scrollspy">
      <!-- Employment -->
      <h4 class="center custom-blue mbot20 uppercase">Employment</h4>
      <div class="container">
        <ul class="collapsible">

          <li>
            <div class="collapsible-header"><i class="material-icons">laptop_mac</i>Web Services<span>2017 - Present</span></div>
            <div class="collapsible-body"><span class="custom-blue">Freelance Web Services<div class="right">Remote</div><br><br>Providing freelance services in front-end web development and design. Assisting with API integration and Google map functionality. Using Adobe Photoshop to optimize images for the web. </span></div>
          </li>

          <li>
            <div class="collapsible-header"><img src="images/roanoke.png" alt="" class="circle responsive-img">Roanoke Insurance Group<span>2014 - Present</span></div>
            <div class="collapsible-body"><span class="custom-blue">Surety Claims Analyst<div class="right">Schaumburg, IL</div><br><br>
              Analyzing incoming U.S. Customs and Border Protection claims to determine their merit, assess any surety liability, and determine our bond holder's financial position. Influencing customers to resolve claims in a timely manner to mitigate potential losses. Managing 20 to 40 million dollars in surety claims at any given time.<br>
              <br>SPECIAL PROJECTS:<br>
              Independently managing fraud and negligence claims and reporting.<br>
              Tracking departmental FOIA requests.<br>
              Tracking monthly loss-adjustment expense reports in excess of 25 thousand dollars.<br>
              Managing quarterly increased duty trend reports.<br>
              Managing quarterly liquidated damages trend reports.<br>
              Analysis of all incoming statute of limitations waiver requests. </span></div>
            </li>

            <li>
              <div class="collapsible-header"><img src="images/monsanto.png" alt="" class="circle responsive-img">Monsanto Company<span>2012 - 2013</span></div>
              <div class="collapsible-body"><span class="custom-blue">Laboratory Technician<div class="right">Waterman, IL</div><br><br>Performing laboratory and field research experiments in a fast-paced team-oriented environment. Responsible for maintaining and breeding insect populations for field research experiments. Using microscopy to estimate local control populations and determine the effectiveness of genetically modified seed. Recording daily and weekly tasks to ensure sufficient egg production levels are reached for seasonal field research experiments. Traveling throughout the midwest to conduct field research.</span></div>
            </li>

          </ul>
        </div>

        <!-- Education -->

        <h4 class="center custom-blue mbot20 uppercase">Education</h4>
        <div class="container">
          <ul class="collapsible">

            <li>
              <div class="collapsible-header"><img src="images/udemy.png" alt="" class="circle responsive-img">Udemy<span>2015 - 2018</span></div>
              <div class="collapsible-body"><span class="custom-blue">Web Development<div class="right">Remote</div><br><br>
                COURSES:<br><br>
                JavaScript Essentials<br>
                The Web Developer Bootcamp<br>
                Professional Rails Code Along<br>
                8 Beautiful Ruby on Rails Apps & Test Driven Development<br>
                The Complete JavaScript Course for Web Development Beginners<br>
                Photoshop CC for Web Design Beginners<br>
                Business Analyst Demonstrated<br>
                Operations Management<br>
                The Complete Web Developer Bootcamp - focused on a node.js backend<br>
                Modern E-commerce Store in PHP & MySQLi <br>
                Materialize CSS</span></div>
              </li>

              <li>
                <div class="collapsible-header"><img src="images/monsanto.png" alt="" class="circle responsive-img">Code Cademy<span>2015 – 2018</span></div>
                <div class="collapsible-body"><span class="custom-blue">Web Development<div class="right">Remote</div><br><br>
                  COMPLETED SKILLS:<br><br>
                  HTML & CSS<br>
                  JavaScript<br>
                  jQuery<br>
                  Ruby<br>
                  Learn Ruby on Rails<br>
                  Make a Website<br>
                  Make an Interactive Website</span></div>
                </li>

                <li>
                  <div class="collapsible-header"><img src="images/NIU.png" alt="" class="circle responsive-img">Northern Illinois University<span>2009 – 2013</span></div>
                  <div class="collapsible-body"><span class="custom-blue">B.S. Degree in Biology<div class="right">DeKalb, IL</div><br><br>

                    Dean's List recipient.<br><br>
                    COURSES:<br>
                    General Chemistry, Organic Chemistry, Cellular Biology, Microbiology, Human Genetics, Statistics, Botany</span></div>
                  </li>

                  <li>
                    <div class="collapsible-header"><img src="images/harper.jpg" alt="" class="circle responsive-img">Harper College<span>2006 – 2007</span></div>
                    <div class="collapsible-body"><span class="custom-blue">Associates Degree in Arts<div class="right">Palatine, IL</div><br><br>
                      COURSES:<br>
                      Introduction to Business Entrepreneurship<br>
                      Fundamentals of Oral Communication<br>
                      Statistics</span></div>
                    </li>
                  </ul>
                </div>

                <!-- Volunteering -->

                <h4 class="center custom-blue mbot20 uppercase">Volunteering</h4>
                <div class="container">
                  <ul class="collapsible">

                    <li>
                      <div class="collapsible-header"><img src="images/feed_my_starving_children.png" alt="" class="circle responsive-img">Feed My Starving Children<span>2014 - Present</span></div>
                      <div class="collapsible-body"><span class="custom-blue">Food Packaging<div class="right">Schaumburg, IL</div><br><br>
                        Founded in 1987, Feed My Starving Children (FMSC) is a Christian non-profit that provides nutritionally complete meals specifically formulated for malnourished children.</span></div>
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- Contact section-->

                <div id="contact" class="section section_contact grey darken-3 scrollspy">
                  <div class="container">
                    <div class="row center">
                      <form action="" method="post" class="col s12">
                        <div class="card-panel z-depth-5">
                          <h4 class="grey-text text-darken-2">Contact Me</h4>

                          <div class="center green-text text-accent-3 flow-text"><?= $result; ?></div>

                          <div class="input-field">
                            <input type="text" name="name" id="name" placeholder"Name" required>
                            <label for="name">Name</label>
                          </div>

                          <div class="input-field">
                            <input type="email" name="email" id="email" placeholder"Email" required>
                            <label for="email">Email</label>
                          </div>

                          <div class="input-field">
                            <input type="text" name="subject" id="subject" placeholder"Subject" required>
                            <label for="subject">Subject</label>
                          </div>

                          <div class="input-field">
                            <input class="materialize-textarea" name="message" id="message" placeholder"Message" required></input>
                            <label for="message">Message</label>
                          </div>

                          <input type="submit" value="Submit" id="submit" class="btn hoverable">

                        </div>
                      </form>
                    </div>


                  </div>
                </div>



                <!-- Footer -->
                <footer class="page-footer grey darken-4">

                  <div class="footer-copyright grey darken-4">
                    <div class="container">
                      Michael Soldmann &copy; 2018
                      <a class="grey-text text-lighten-4 right" href="#home">
                        <i class="material-icons left">keyboard_arrow_up</i>Back To Top
                      </a>
                    </div>
                  </div>
                </footer>

                <!--Import jQuery before materialize.js-->
                <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
                <!--Import jQuery before materialize.js-->
                <script src="js/init.js"></script>

              </body>
              </html>
