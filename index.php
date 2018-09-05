<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <link rel="stylesheet" href="../style/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<style>  
    body {
        padding: 0 auto;
        margin: 0 auto;
        background-color: white
    }
    .wrap{
        margin: 10px;
        background-color: whitesmoke
    }
    #C-W{
        color: white;
        /* background-color: black; */
    }
/*
 * header
 */
    .nav-header{
        padding: 28px 0;
    }
    .nav-background{
        background-color: dimgrey
    }
/*
*Content
*/
/* Set a style for all buttons */

    /* Center the image and position the close button */

    .imgcontainer {
        /* text-align: center; */
        margin: 24px 0 12px 0;
        position: relative;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    /* .container1 {
        padding: 16px;
    } */

    span.create {
        float: left;
    }

    span.psw {
        float: right;
        padding-top: 16px
    }

    /* The Modal (background) */

    .modal {
        top: 56px;
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        right: 0;
        /* top: 0; */
        /* width: 100%; */
        /* Full width */
        /* height: 100%; */
        /* Full height */
        overflow: hidden;
    }

    /* Modal Content/Box */

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        /* margin: 5% auto 15% auto; */
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;

        width: 80%;

        /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */

    .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }

    

    /* Add Zoom Animation */
    .animate {
        -webkit-animation: animatezoom 0.4s;
        animation: animatezoom 0.4s
    }
    @-webkit-keyframes animatezoom {
        from {
            -webkit-transform: scale(0)
        }
        to {
            -webkit-transform: scale(1)
        }
    }
    @keyframes animatezoom {
        from {
            transform: scale(0)
        }
        to {
            transform: scale(1)
        }
    }
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }

/*
 * Footer
 */
    .nav-footer {
        padding-top: 10px;
        color: #999;
        text-align: center;
        /* background-color: #f9f9f9; */
        border-top: 1px solid #e5e5e5;
    }
    .nav-footer p:last-child {
    margin-bottom: 0;
    }
</style>
<!-- <title>Home</title> -->
</head>
<body>
        <!-- bg-dark   -->
        <div class="nav-header my-2">
            <nav class="navbar navbar-expand-md fixed-top navbar-dark nav-background">
                <a class="navbar-brand" href="#">HEANG123</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a id="C-W" class="nav-link" href=""><i class="fas fa-home">&nbsp;</i>Home</a></li>
                        <li class="nav-item"><a id="C-W" class="nav-link" href=""><i class="fas fa-newspaper">&nbsp;</i>News</a></li>
                        <li class="nav-item"><a id="C-W" class="nav-link" href=""><i class="fas fa-tablet-alt">&nbsp;</i>Technology</a></li>
                        <li class="nav-item"><a id="C-W" class="nav-link" href=""><i class="fas fa-user-circle">&nbsp;</i>About</a></li>
                        <li class="nav-item"><a id="C-W" class="nav-link" href=""><i class="fas fa-globe-asia">&nbsp;</i>Contact</a></li>
                    </ul>
                    <div class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button> -->
                        <!-- <a class="btn btn-outline-success my-2 my-sm-0 form-control" href="#">Login</a> -->
                        <!-- <button class="btn btn-outline-success my-2 my-sm-0 form-control" type="submit">Login</button> -->
                        <button onclick="document.getElementById('loginanimate').style.display='block'" class="btn btn-outline-success my-2 my-sm-0 form-control" data-toggle="collapse" data-target="#navbarCollapse">Login</button>
                    </div>
                </div>            
            </nav>
        </div>      
        <main role="main"  class="wrap">
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>
            
        </main>
        <div class="nav-footer">
            <p>HEANG123 built for <a href="">Group Assignment</a> by <a href="https://www.facebook.com/dara.khimheang" target="_blank">@Dara.Khimheang</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </div> 
        <!-- <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge ">
            <a href="https://www.facebook.com/dara.khimheang" target="_blank">
                <i class="fa fa-facebook-official"></i>
            </a>
            <a href="#">
                <i class="fa fa-pinterest-p"></i>
            </a>
            <a href="#">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fa fa-flickr"></i>
            </a>
            <a href="#">
                <i class="fa fa-linkedin"></i>
            </a>
            <p class="w3-medium">
                Developed By
                <a href="https://www.facebook.com/dara.khimheang" target="_blank">Dara khimheang</a>
            </p>
        </footer> -->
        <div id="loginanimate" class="modal">
                <div class="modal-content animate" >
                    <form action="">
                        <div class="container">
                            <!-- <div class="imgcontainer"> -->
                            <span onclick="document.getElementById('loginanimate').style.display='none'" class="close" title="Close">&times;</span>
                            <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
                                <h2  class=" my-2">Login Form</h2>
                            <!-- </div> -->                        
                            <label class="my-2" for="uname">
                                <b>Username</b>
                            </label>
                            <input class="form-control " type="text" placeholder="Enter Username" name="uname">
                            <label class="my-2" for="psw">
                                <b>Password</b>
                            </label>
                            <input class="form-control" type="password" placeholder="Enter Password" name="psw">
                            <button type="submit" class="btn-outline-success my-2  form-control">Login</button>
                            <!-- <button type="button" onclick="document.getElementById('loginanimate').style.display='none'" class="cancelbtn">Close</button> -->
                            <span class="create my-2">Create new
                                    <a href="#" title="Create New"><u>account</u></a>
                            </span>
                            <span class="psw my-2">Forgot
                                <a href="#"><u>password?</u></a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById('loginanimate');        
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
<!-- <script src="../script/jquery/jquery.slim.min.js"></script>
<script src="../script/popper/popper.min.js"></script>
<script src="../script/bootstrap/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.min.js"></script>
</body>
</html>