<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

  

    <meta
      name="description"
      content="Discribe your website here, it shows on Google searchers"
    />
    <meta name="keywords" content="Keyword, Keyword, Keyword, etc" />
    <meta name="author" content="Your Name or Company" />
    <title>Recipify</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>
<main>
<!--  Add whatever HTML code you need here -->



<!-- BELOW IS THE START OF THE PHP SEND MAIL CODE -->
<?php 
if(isset($_POST['submit'])){
     $to = "troma0019@mail.ct.edu";              // this is your Email address
    $from = $_POST['email'];                   // this is the sender's Email address
    
    // --------------------------------------- Variables from the <form> go here
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $reason = $_POST["reason"];


    // --------------------------------------- Build the variables for sending 2 emails (to you & to user)
    $subject1 = "Form submission";
    $subject2 = "Copy of your form submission";

    $message1 =  $first_name . " " . $last_name . " wrote the following:" . "\n\n" . "Topic: ". $reason . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . "Topic: " . $reason . "\n\n" . $_POST['message'];

    $headers1 = "From:" . $from;
    $headers2 = "From:" . $to;
    // You can also use header('Location: thank_you.php'); to redirect to another page.

    // ----------------------------------------------- SEND THE EMAILS WITH PHP mail() function
    mail($to,$subject1,$message1,$headers1);        // Sends an email to YOU!
    mail($from,$subject2,$message2,$headers2);      // sends a copy of the message to the sender
 
    // if you are careful you can use the 'echo' command to display HTML
    echo "<h2>Mail Sent. Thank you</h2> " . $first_name . ", we will contact you shortly.";
    
    
    } else {  ?>

<!-- ABOVE IS THE END OF THE PHP SEND MAIL CODE -->

<!-- This HTML form will display if NOT sending an email -->


<form action="" method="post">
 
    <div>
      <!--Navigation-->
      <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand">Recipify</a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link" aria-current="page" href="index.html"
                    >Home |
                  </a>
                  <a class="nav-link" href="about-us.html">About Us | </a>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Recipes</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="recipes.html">Recipe List</a></li>
                      <li><a class="dropdown-item" href="surprise-me.html">Surprise Me</a></li>
                    </ul>
                  </li>
                  <a class="nav-link" href="news.html">| News | </a>
                  <a class="nav-link" href="gallery.html">Gallery | </a>
                  <a class="nav-link" href="contact-us.php">Contact Us</a>
                </div>
              </div>
            </div>
          </nav>
      
    </div>

    <!--Contact box-->
    <div class="contact-title-div">
          <h2 class="contact-title">Contact Us</h2>
        </div>
        <div class="contact-box">
          <div class="container text-center contact-grid">
            <div class="row contact-row">
              <div class="col-md-6 offset-md-3">
                <div class="container text-center">
                  <div class="row row-cols-2">
                    <div class="col">
                      <input
                        class="form-control form-control-lg"
                        type="text"
                        id="first_name"
                        name="first_name"
                        placeholder="First Name"
                        aria-label=".form-control-lg example"
                      />
                    </div>
                    <div class="col">
                      <input
                        class="form-control form-control-lg"
                        type="text"
                        id="last_name"
                        name="last_name"
                        placeholder="Last Name"
                        aria-label=".form-control-lg example"
                      />
                    </div>
                  </div>
                  <div class="row row-cols-2">
                    <div class="col">
                      <input
                        class="form-control form-control-lg"
                        type="text"
                        id="email"
                        name="email"
                        placeholder="Email"
                        aria-label=".form-control-lg example"
                      />
                    </div>
                  </div>
                  <div class="row">
                    <select
                      class="form-select form-dropdown"
                      aria-label="Default select example"
                      id="reason"
                      name="reason"
                    >
                      <option selected>Topic</option>
                      <option value="report">Report Recipe</option>
                      <option value="concern">You have a concern</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                </div>
                <div>
                  <div class="mb-3">
                    <label
                      for="exampleFormControlTextarea1"
                      class="form-label textarea-label"
                      style="font-style: bold"
                      ><b>Message</b></label
                    >
                    <textarea
                      class="form-control form-textArea"
                      id="message"
                  name="message"
                      rows="3"
                    ></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 offset-md-3">
                  <button  type="sumbit" id="submit" name="submit" class="btn btn-info">Submit</button>

                </div>
              </div>
            </div>
          </div>
        </div>
</form>

<?php }  ?>    <!-- This line is important is it the ending of the PHP "if/else" statement  -->

<!--  Okay to put HTML BELOW THIS LINE --> 





</main>
</html> 