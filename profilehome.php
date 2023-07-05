<?php

require "maidserver.php";
check_login();

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>  Userprofile  </title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style type="text/css">
           *{
               padding: 0;
               margin: 0;
               text-decoration: none;
               list-style: none;
               box-sizing: border-box; 
           }
           body{
                background-color: lightgray;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            .navtab{
                display: flex; 
                
            }
            /* img{
                width: 100%;
                height: auto;
            } */

            label.logo{
                color: black;
                font-size: 35px;
                line-height: 80px;
                padding: 0 100px;
                font-weight: bold;
            }

            nav ul{
                float: right;
                margin-right: 30px;
            }

            nav ul li{
                display: inline-block;
                line-height: 80px;
                margin: 0 5px;
            }

            nav ul li a{
                color: black;
                font-size: 20px;
                padding: 7px 13px;
                border-radius: 3px;
                text-transform: uppercase;
            }

            /* nav ul li a::after{
                content: '';
                height: 3px;
                width: 0;
                background: black;
                position: absolute;
                left: 0;
                bottom: -10px;
                transition: 0.5s;
            } */

            nav ul li a:hover{
                color: rgb(240, 240, 240);
            }
            a.active, a:hover{

                /* background: gray; */
                transition: .5s;
            }

            .checkbtn{
                font-size: 30px;
                color: black;
                float: right;
                line-height: 80px;
                margin-right: 40px;
                cursor: pointer;
                display: none;
            }

            #check{
                display: none;

            }
            /* for laptop and ipad/tablet black hover for the navigation tab */
            @media (min-width:768px){
                nav ul li a:hover{
                color: black;
                background: white ;
            }

            }
            @media (max-width:952px){
                label.logo{
                    font-size: 30px;
                    padding-left: 50px;
                }
                nav ul li a{
                    font-size: 16px;
                }
               
            }
            /* For the phone and well basically the ipad/tablet */
            @media (max-width:768px){
                .checkbtn{
                    display: block;
                }
                ul{
                    position: fixed;
                    width: 100%;
                    height: 100vh;
                    background: rgb(180, 177, 177);
                    top: 80px;
                    left: -100%;
                    text-align: center;
                    transition: all .5s;
                }
                nav ul li{
                    display: block;
                    margin: 50px 0;
                    line-height: 30px;
                }
                nav ul li a{
                    font-size: 20px;
                }
                a:hover{
                    
                    color: #fff2d6;
                }
                a.active{
                    background: none;
                }
                #check:checked ~ ul{
                    left: 0;

                }
            }
            /* section{

            } */

            .wrapper{
                width: 100%;
            }

            .img-info{
                width: 100%;
            }

            .img-info h1{
                padding: 30px 30px 20px;
                font-size: 50px;
                color: 111;
                line-height: 44px;
            }

            .img-info p{
                padding: 0px 30px 20px;
                font-size: 16px;
                color: 111;
                line-height: 24px;
            }

            .img-secc{
                width: 100%;
            }

            @media only screen and (min-width: 768px){
                .wrapper{
                    width: 600px;
                    margin: 0 auto;
                }

                .img-info h1{
                padding: 20px 30px 0px;
                
            }

            .img-info p{
                padding: 20px 0px 0px;
                
            }

            .img-secc{
                padding-top: 30px;
            }

            }

            @media only screen and (min-width: 1000px){
                .wrapper{
                    width: 1000px;
                    margin: 0 auto;
                }

                .img-info{
                    width: 50%;
                    float: right;
                }

                .img-info h1{
                padding: 20px 0px 0px 30px ;
                
            }

            .img-info p{
                padding: 20px 0px 0px 30px;
                
            }

                .img-secc{
                    padding-top: 20px 40px 0px 0px;
                    width: 50%;
                    float: left;
                }

            }

            .logo{

                cursor: pointer;
            }
        </style>
        
    </head>


<div class="container">

 <nav>
     <input type="checkbox" id="check">
     <label for="check" class="checkbtn">
        <i class="fa fa-reorder"></i>
     </label>

     <a  href="Trying colors.html"> <label class="logo" >MaidServs</label></a>
        <!-- <img src="logowhite250.png" class="logo"> -->
         <ul>
            <li><a class="active" href="">Home</a></li>
            
            <li><a href="">About</a></li>
            <li><a href="">Contacts</a></li>
            <li><a href="home.php">Log out</a></li>
        </ul> 
    </nav>

  


</div>



</html>
