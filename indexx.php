<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="stylex.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ArtfulAdobe: Best Interior Design Solutions for your Home | Get Free Quotes</title>
    <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" href="common-style.css">
    <link rel="stylesheet" href="book-style.css">
    <link rel="shortcut icon" href="source/favicon.ico" type="image/x-icon">
</head>
<body>
    <script src="book-code.js"></script>
    <script src="code.js"></script>

    <div class="banner">
        <div class="navbar">
            <img onclick="btn('index.html');" src="source/AA1.png" class="logo">
            <ul>
                <li><a href="#">Get Quote</a></li>
                <li><a href="design.html">Design ideas</a></li>
                <li><a href="how.html">How It Works?</a></li>
                <li><a href="visit.html">Visit Us</a></li>
                <li><a href="https://astonishing-cupcake-08d1c2.netlify.app/">Estimator</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>TALK TO A DESIGNER</h1>
        </div>
    </div>

    <div class="up" onclick="totop();">
        <i class="fas fa-arrow-up"></i>
    </div>
    
    <div class="m1">
        <div class="d1">
            <div class="final">
                
          
    

    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="registerx.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        ----------or--------
        <div class="icons">
          <i class="fas fa-phone"></i>
         
        </div>
      </p>
      
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="registerx.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
          <i class="fas fa-phone"></i>
         
        </div>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="scriptx.js"></script>


            </div>
        </div>
    </div>

    <div class="m2">
        <div class="t2">
            <h1>Superior interiors</h1>
            <p>With stunning designs and professional on-site services, we make dream homes come alive.</p>
        </div>
        <div class="d2">
            <div onclick="btn('show.html?topic=master-bedroom');">
                <img src="source/book-m2-1.jpg">
                <h3>Bedroom</h3>
            </div>
            <div onclick="btn('show.html?topic=dining-room');">
                <img src="source/book-m2-2.jpg">
                <h3>Dining Room</h3>
            </div>
            <div onclick="btn('show.html?topic=living-room');">
                <img src="source/book-m2-3.jpg">
                <h3>Living Room</h3>
            </div>
        </div>
    </div>


    <div class="m4">
        <div class="t4">
            <h1>FAQs</h1>
        </div>
        <div class="d4">
            <div onclick="showorhide('p1');">
                <h4>Is this the right time to do my home interiors?</h4>
                <p id="p1" style="display:none;"><span><br>Yes, it is. From meetings at our Experience Centres to installing your home interiors at the site, we have a strict no-contact safety policy. From temperature checks to fumigation, all is taken care of. So don't worry about kick-starting your dream project.</span>
                <span><br>Since the process of co-creating a design typically takes 4-6 weeks, you can get started with online consultation. Our designers can assist you online via video calls. You can also schedule an appointment and meet us at our Experience Centre.</span></p>
            </div>
            <div onclick="showorhide('p2');">
                <h4>Can I meet my interior designer?</h4>
                <p id="p2" style="display:none;"><br>Yes, certainly. Keeping safety in mind, we have enabled 2 different ways of interactions:<br>1. Online consultation<br>2. Contactless and safe design meets at our Experience Centres<br>Please note: If your site or the place of meeting falls under Red or Containment Zone, we can only assign a designer for online consultation, and we won"t be in a position to facilitate face-to-face meetings.</p>
            </div>
            <div onclick="showorhide('p3');">
                <h4>Can I have a meeting at my home?</h4>
                <p id="p3" style="display:none;"><br>We would recommend meetings at our Experience Centre which is completely safe for your visit. We are taking every step to make it a safe environment. However, you can always opt for online consultation and we will be happy to discuss your project in detail.</p>
            </div>
            <div onclick="showorhide('p4');">
                <h4>How can I select materials for design?</h4>
                <p id="p4" style="display:none;"><br>While we can share images of the materials and finishes during the design phase online, you will have to visit our Experience Centre to finalise them. We can assure you that our centres are safe and we are adhering to every protocol. Please note - We can only facilitate your visit from green and orange zones. We will not be able to attend to visitors who do not adhere to safety protocols.</p>
            </div>
            <div onclick="showorhide('p5');">
                <h4>How will my site be measured?</h4>
                <p id="p5" style="display:none;"><br>You can share the floor plan of your home with our designers, that should help us to start your project. If in case you don’t have the floor plan, we will assign our representative for a site visit. Be assured, our representatives will follow all the protocol for their and your safety.</p>
            </div>
            <div onclick="showorhide('p6');">
                <h4>What will be the timelines for my project completion?</h4>
                <p id="p6" style="display:none;"><br>We will keep you updated on the timelines based on the discussion with the designers. The lockdown left us with no choice but to hold handover of all projects. Since the relaxation, things are slowly getting to normal. We are doing everything we can to cover up on the lost time and to deliver your home interiors in the safest way possible.</p>
            </div>
            <div onclick="showorhide('p7');">
                <h4>Can I reach out to my Interia designer for any queries or clarifications?</h4>
                <p id="p7" style="display:none;"><br>Yes, definitely. You can get in touch with your designers via video calls or messages, as per your convenience. We are always there to assist you.</p>
            </div>
            <div onclick="showorhide('p8');">
                <h4>Can I visit the Interia Experience Centre during the lockdown restrictions?</h4>
                <p id="p8" style="display:none;"><span><br>Yes, certainly. We have opened our Experience Centres in Delhi, Gurugram, Bangalore and Hyderabad and are functioning as per the directives from the government. We are taking all the necessary precautions.</span>
                <span><br>With temperature checks, use of alcohol-based hand rubs, and contactless meetings, there's nothing you need to be worried about.</span></p>
            </div>
        </div>
    </div>

    <div class="m-last">
        <div class="last">
            <div>
                <h1>Your dream home is just a click away</h1>
                <button onclick="btn('#');">GET STARTED</button>
            </div>
        </div>
    </div>

    <footer>
        <div class="ftr-m">
            <div class="ftr-t">
                <img src="source/AA1.png">
                <ul>
                    <li><a target="_blank" href="https://api.whatsapp.com/send/?phone=+918879109025&text=Hey There! I am interested in interior designs on website. Can I know more on this?"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100061907891820"><i class="fab fa-facebook"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/artfulAdobe/"><i class="fab fa-instagram"></i></i></a></li>
                </ul>
            </div>
            <div class="ftr-d">
                <div>
                    <h3>Design ideas</h3>
                    <ul>
                        <li><a href="show.html?topic=living-room">Living Rooms</a></li>
                        <li><a href="show.html?topic=kitchen">Kitchens</a></li>
                        <li><a href="show.html?topic=master-bedroom">Master Bedrooms</a></li>
                        <li><a href="show.html?topic=kids-bedroom">Kids Bedrooms</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Locations</h3>
                    <ul>
                        <li><a href="https://www.google.com/maps/place/Bengaluru" target="_blank">Bengaluru</a></li>
                        <li><a href="https://www.google.com/maps/place/Mumbai" target="_blank">Mumbai</a></li>
                        <li><a href="https://www.google.com/maps/place/New+Delhi" target="_blank">New Delhi</a></li>
                        <li><a href="https://www.google.com/maps/place/Hyderabad" target="_blank">Hyderabad</a></li>
                    </ul>
                </div><div>
                    <h3>Explore</h3>
                    <ul>
                        <li><a href="indexx.php">Book A Design</a></li>
                        <li><a href="visit.html">Visit Us</a></li>
                        <li><a href="how.html">How It Works?</a></li>
                    </ul>
                </div><div>
                    <h3>Get in touch</h3>
                    <ul>
                        <li>Call us</li>
                        <a href="tel:8550889612">+91 8550889612</a>
                        <li>Email us</li>
                        <a href="mailto:artfuladobe15@gmail.com">artfuladobe15@gmail.com</a>
                    </ul>
                </div>
            </div>
            <div class="ftr-b">
                <h2>Designed By Meet</h2>
                <p>© 2024 ArtfulAdobe.com | All Rights Reserved</p>
            </div>
        </div>
    </footer>

</body>
</html>




