<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Photography Site</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <!-- header -->
        <header class = "header">
            <div class = "nav-section">
                <div class = "brand-and-navBtn">
                    <span class = "brand-name">
                        HPCLICKS
                    </span>
                    <span class = "navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
                </div>

                <!-- navigation menu -->
                <nav class = "top-nav">
                    <ul>
                        <li><a href = "index.html">Home</a></li>
                        <li><a href = "gallery.html">Gallery</a></li>
                        <li><a href = "blog.html" >Blog</a></li>
                        <li><a href = "contact.html" class = "active">Contact</a></li>
                    </ul>
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>

            <div class = "container about">
                <div class = "about-content">
                    <div class = "about-img flex">
                        <img src = "images/owner.jpg" alt = "photographer img">
                    </div>
                    <h2>Hari Prasath</h2>
                    <h3>Photographer | Tealover</h3>
                    <blockquote>
                        "Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever ... It remembers little things, long after you have forgotten everything."
                        <span>-LIFE STARTS LIKE FLOWERS AND ENDS WITH FLOWERS</span>
                    </blockquote>
                </div>

                <div class = "social-icons">
                    <ul>
                        <li>
                            <a href = "#"><i class = "fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href = "https://www.instagram.com/hari_prasath_548/"><i class = "fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- end of header -->

        <!-- main -->
        <section class = "section-five">
            <div class = "container">
                <div class = "contact-top">
                    <h3>CONTACT ME</h3>
                    <p>While we're good with smoke signals ,there are simpler ways for us to get in touch and answer your questions.</p>
                </div>

                <div class = "contact-middle">
                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-map-signs"></i>
                        </span>
                        <span>Address</span>
                        <p>Main Street - 3456, Dharmapuri-636 806</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-phone"></i>
                        </span>
                        <span>Contact Number</span>
                        <p>9345444569</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-paper-plane"></i>
                        </span>
                        <span>Email Address</span>
                        <p>hariprasath777666000@gmail.com</p>
                    </div>

                    <div>
                        <span class = "contact-icon">
                            <i class = "fas fa-globe"></i>
                        </span>
                        <span>Website</span>
                        <p>www.hpclicks.com</p>
                    </div>
                </div>

                <div class = "contact-bottom">
                    <form class = "form" method="post" action="receive.php">
                        <input type = "text" placeholder="Your Name" id="name" name="name" required >
                        <input type = "email" placeholder="Your Email" id="email" name="email" required>
                        <input type = "text" placeholder="Subject" id="sub" name="sub" required>
                        <textarea rows = "9" placeholder="Message" id="msg" name="msg" required></textarea>
                        <!-- Showing result -->
                        <?php
                            if(isset($_GET['result']) && $_GET['result'] == 1){
                        ?>
                        <div rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" class="alert alert-success" role="alert" autofocus>
                        Sent Successfully...
                        </div>
                        <?php
                            }
                            ?>
                        <?php
                            if(isset($_GET['result']) && $_GET['result'] == -1){
                        ?>
                        <div rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" class="alert alert-danger" role="alert" autofocus>
                        Failed to Send the Message...
                        </div>
                        <?php
                            }
                            ?>
                        <input type = "submit" class = "btn" value = "Send Message">
                    </form>

                    <!-- Map -->
                    <div>
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dharmapuri&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpepro.com/">MCPE</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div> 
            </div>
        </section>
        <!-- end of main -->


        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container container">
                <div>
                    <h2>HARI PRASATH</h2>
                    <p>I am a professional photographer with little ideas.photgrapher & Tealover :Lover of tea and good stories.currently residing in Dharmapuri.</p>
                </div>
                <div>
                    <h3>Free Subscription!</h3>
                    <p>“In photography there is a reality so subtle that it becomes more real than reality.”</p>

                    <div class = "subs">
                        <i class = "fas fa-envelope"></i>
                        <input type = "email" id = "email" placeholder="Email Address">
                        <button type = "submit">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <p>&copy; Copyright HARIPRASATH</p>
        </footer>
        <!-- end of footer -->
        

        <script src="script.js"></script>
    </body>
</html>