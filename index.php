<?php
    // Include the controller.php file
    include("controller.php");
?>

<!DOCTYPE html>

<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ron Anthony Sy</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    </noscript>
    <link href="./css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>

  <body id="top">

    <header class="bg-light" id="home">

      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
        <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#">Ron Anthony Sy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-2">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <div class="cover bg-light position-relative" style="height: 100vh;">
    <br/>
    <br/>
    <br/>
    <div class="container px-3">
        <div class="row">
            <div class="col-lg-6 p-2" style="padding-left: 100px;"> 
                <?php 
                    $pic = fetchPic();

                    if($pic) {
                        echo '<img src="uploads/' . $pic . '" width="400" height="400" alt="Profile Picture" style="position: relative; left: 120px; margin-top: 40px;">';
                    } 
                    else {
                        echo '<img src="path_to_default_image/default.jpg" alt="Default Profile Picture">';
                    }
                ?>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="text-left">
                    <p class="lead text-uppercase mb-1">Hello!</p>
                    <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">I’m <?php echo fetchStudname() ?: "John Doe"; ?></h1>
                    <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">Future Software Engineer</p>
                    <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
                        <nav role="navigation">
                            <ul class="nav justify-content-left">
                                
                                <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/rnnthnysy" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/rnnthnysy/" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="https://mail.google.com/mail/u/0/?fs=1&to=ron.sy@neu.edu.ph&su=Inquiry&tf=cm" title="Gmail"><i class="fab fa-google"></i><span class="menu-title sr-only">Gmail</span></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-primary shadow-sm mt-1 hover-effect" href="#contact">Get In Touch <i class="fas fa-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light position-absolute bottom-0 start-0 end-0"></div>
</div>


<div class="section pt-4 px-3 px-lg-4" id="about" style="min-height: 100vh;">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">About Me</h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h2 class="h4 my-2">Hello! I’m <?php $studname = fetchStudname(); echo $studname;?>.</h2>
        <p style="text-align: justify;"><?php $aboutme = fetchAboutme(); echo $aboutme; ?></p>
        <div class="row mt-3">

        <div class="col-sm-2">
            <div class="pb-1">Birthdate:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">        
                <?php 
                    $birthday = fetchBirthday();
                    echo $birthday;
                ?>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="pb-1">Age:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">        
                <?php 
                    $age = fetchAge();
                    echo $age;
                ?>
            </div>
          </div>
          
          <div class="col-sm-2">
            <div class="pb-1">Email:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">                
                <?php 
                    $email = fetchEmail();
                    echo $email;
                ?>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="pb-1">Contact:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">                
                <?php 
                    $mobnumber = fetchMobnumber();
                    echo $mobnumber;
                ?>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="pb-1">School:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">                
                <?php 
                    $school = fetchSchool();
                    echo $school;
                ?>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="pb-1">Program:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">                
                <?php 
                    $course = fetchCourse();
                    echo $course;
                ?>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="pb-1">Skills:</div>
          </div>
          <div class="col-sm-10">
            <div class="pb-1 fw-bolder">                
                <?php 
                    $skills = fetchSkills();
                    echo $skills;
                ?>
            </div>
          </div>

        </div>
      </div>
      <div class="col-md-5 offset-md-1 mt-3" data-aos="fade-left" data-aos-delay="100">
        <?php 
            $pic = fetchPic();

            if($pic) {
                echo '<img src="uploads/' . $pic . '" width="400" height="400" alt="Profile Picture">';
            } 
            else {
                echo '<img src="path_to_default_image/default.jpg" alt="Default Profile Picture">';
            }
        ?>
      </div>
    </div>
  </div>
</div>


    <div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
        <div class="container-narrow">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">Contact Me</h2>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="bg-light my-2 p-3 pt-2">
                        <div class="form-group my-2">
                            <label for="name" class="form-label fw-bolder">Name</label>
                            <input class="form-control" type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group my-2">
                            <label for="email" class="form-label fw-bolder">Email</label>
                            <input class="form-control" type="email" id="email" name="_replyto" required>
                        </div>
                        <div class="form-group my-2">
                            <label for="message" class="form-label fw-bolder">Message</label>
                            <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
                        </div>                        
                </div>
        </div>  

      <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
        <div class="mt-3 px-1">
          <div class="h5">Let's Get In Touch!</div>
          <p>If you have any more inquiries or apprehensions about me, please do not hesitate to get in touch with me.</p>
          <p>See you!</p>
        </div>
        <div class="mt-53 px-1">
          <div class="row"> 
            <div class="col-sm-2">
              <div class="pb-1">Email:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">                
                <?php 
                    $email = fetchEmail();
                    echo $email;
                ?>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="pb-1">Phone:</div>
            </div>
            <div class="col-sm-10">
              <div class="pb-1 fw-bolder">                
                <?php 
                    $mobnumber = fetchMobnumber();
                    echo $mobnumber;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button id="myModalButton" class="btn btn-primary mt-2 col-md-6">Send</button>
                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Form Submitted!</h4>
                                </div>
                                <div class="modal-body">
                                    <p>We appreciate your inquiry! We will promptly notify you once we have reached your email address</p>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Go Back</button>
                                </div>
                            </div>
                        </div>
                    </div>
        <!---Modal script-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#myModalButton").click(function(){
                    $("#myModal").modal("show");
                });
                $("#myModal .modal-footer .btn-secondary").click(function(){
                    $("#myModal").modal("hide");
                });
            });
        </script>

  </div>
</div>


<footer class="pt-4 pb-4 text-center bg-light">
  <div class="container">
    <div class="my-3">
      <div class="h4"><?php $studname = fetchStudname(); echo $studname;?></div>
      <p>Future Software Engineer</p>
      <div class="social-nav">
        <nav role="navigation">
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/rnnthnysy" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/rnnthnysy/" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
            <li class="nav-item"><a class="nav-link" href="https://mail.google.com/mail/u/0/?fs=1&to=ron.sy@neu.edu.ph&su=Inquiry&tf=cm" title="Gmail"><i class="fab fa-google"></i><span class="menu-title sr-only">Gmail</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer></div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>
    <script src="./scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="./scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="./scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="./scripts/aos.min.js?ver=1.2.0"></script>
    <script src="./scripts/main.js?ver=1.2.0"></script>
  </body>
</html>


