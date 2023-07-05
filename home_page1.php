<!DOCTYPE html>
<html>
<head>
    <title>Gate pass menu</title>
    
    
    <style>
         body{
           
            width: 100%;
            height: 100vh;
            
        }
        .floating-word {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 24px;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        nav{
            
            width:900px;
            margin:0 auto;
        }

        nav ul li:first-child a {
            background: teal;
            color: white;
        }
            /* Top level menu bar */
            nav ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                font-family: Arial, Helvetica, Sans-Serif;
                font-size: 12pt;
                color: Black;
                position: relative;
            }

                /* Each list item inside horizontal menu bar */
                nav ul li {
                    float: left;
                    width: 20%;
                }

            /* Text and links across navbar  */
            nav span, nav a {
                background: teal;
                text-decoration: none;
                outline: none;
                display: block;
                height: 60px;
                line-height: 60px;
                width: 100%;
                text-align: center;
            }
                /* Span and unvisited/visited links in horizontal bar */
                nav a:link, nav a:visited {
                    background: #40BCF6;
                    color: Black;
                }
                /* Hover and active links in horizontal bar */
                nav span:hover, nav a:hover, nav a:active {
                    background: #1C415D;
                    color: Yellow;
                }
 
            /* Drop-down menu for each item in menu bar */
            nav ul li ul {
                 top: 40px;
                visibility: hidden;
                background: #40A2EE;
                box-shadow: 0 40px 40px -20px rgb(10, 10, 10) inset;
                position: absolute;
                /* Set any width you like */
                width: 180px;
                z-index: 1200;
            }
            /* Drop-down menu for each item in menu bar */
            nav ul li:hover ul {
                visibility: visible;
            }
       

            /* Individual list items in drop-down menus */
            nav ul li ul li {
                width: 100%;
                height: 45px;
                line-height: 44px;
                float: none;
            
            }
                /* Links in drop-down menus */
                nav ul li ul li a,
                nav ul li ul li a:link,
                nav ul li ul li a:visited {
                    background: none;
                    display: block;
                    text-align: left;
                    text-indent: 10%;
                    width: 100%;
                    height: 100%;
                    color: White;
                    text-decoration: none;
                    outline: none;
                }
                    /* Hover and active states in drop down menu */
                    nav ul li ul li a:hover,
                    nav ul li ul li a:active {
                        background: #15619B;
                        color: Yellow;
                    }
                    nav ul li ul {
            top: 60px; /* Add this line */
            
        }
        #content {
            margin-top: 200px;
        }
        
        /* Additional styles for different sections */
        
        .section1 {
            background: gray; /* Example color for section 1 */
            color: black;
            height: 300px;
            box-shadow: 0 40px 40px -20px rgb(10, 10, 10) inset;
        
        }
        
        .section2 {
            
            color: white;
            height: 200px;
        }
        .section4 {
            
            color: white;
            height: 100px;
        }
        
        .section3 {
            background: #1C415D; /* Example color for section 3 */
            color: white;
            padding: 20px;
            text-align: center;
        }

        .section3 a {
            color: white;
            text-decoration: none;
        }

        .section3 a:hover {
            text-decoration: underline;
        }

        .section3 p {
            margin: 5px 0;
        }
        
        
           /* Video background */
.video-bg {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh; /* Adjust the height to 100% of the viewport height */
  z-index: -1;
  overflow: hidden;
}

.section1 {
    display: flex;
    height: 300px;
   
}

.background-box {
    flex: 1;
    background: url(sec.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    color: black;
    padding: 20px;
}


.blank-box {
    background: #1C415D; /* Example color for the background */
    color: white;
    padding: 20px;
    text-align: center;
}

.flex-container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 70%; /* Adjust the width as needed */
    margin: 0 auto; /* Center the flex container horizontally */
}

.flex-container img {
    margin-right: 10px;
}

.flex-container p {
    margin: 0;
}

.services {
    text-decoration: underline;
    font-style: italic;
}




.video-bg video {
  width: 100%;
  height: 100%; /* Set the video height to 100% to fill the container */
  object-fit: cover; /* Maintain aspect ratio and cover the container */
}
.my-logo {
        display: block;

        height: 100px;
        }

    </style>



</head>
<body> 
    
<div class="video-bg">
        <video autoplay loop muted>
            <source src="jj.mp4" type="video/mp4">
            <!-- You can add additional source elements for different video formats -->
        </video>
        </div>
    <nav>
        <ul>
        <li><a href="#">Home</a></li>
            <li>
                <span>Students</span>
                <ul>
                    <li><a href="x.php" >Search</a></li>
                   
                </ul>
            </li>
            <li>
                <span>Staff</span> <ul>
                    <li><a href="staffsearch.php">Staff members</a></li>
                    <li><a href="nonstaffsearch.php">Non-staff members</a></li>
                </ul>
            </li>
            <li>
                <span>Visitors</span> 
                <ul>
                    
                    <li><a href="QRcode.php">Generate QR Code</a></li>
                    <li><a href="qr-read.html">Scan QR Code</a></li>
                    <li><a href="history.php">History Log</a></li>
                </ul>
            </li>
            <li>
                <span>About Us</span>
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </li>
        </ul>
    </nav> <br>
    
    <h1></h1>

    <div id="content">
    <div class="section1">
    <div class="background-box">
       
    </div>
    <div class="blank-box">
    <h2>In-collaboration partnership with:</h2>
    <div class="flex-container">
        <img class="my-logo" src="logo.png" alt="">
        <p>UNIVERSITY OF DAR ES SALAAM</p>
    </div>
    <br>
    <p class="services">We provide services full of innovations</p>
</div>


</div>

        <div class="section2" id="section2">
            
        </div>
        <div class="section3">
            <p>Related Links:</p>
            <a href="#">University of Dar Es Salaam (UDSM)</a> |
            <a href="#">GPMS</a> |
            
            <a href="#">Help & Support</a>
            <p>Contact information: securitymanagement@yahoo.com |  +255 748 339 008</p>
        </div>
   
    
</body>
</html>