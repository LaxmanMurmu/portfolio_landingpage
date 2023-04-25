<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Main Port</title>
</head>
<body>


    <!-- =================================================================Bubble Container==================================================== -->
    <div class="container border main_con">

        <div class="row horizontal">
            <div class="image" id="image1"><img src="bubble_images/bubble.png" alt="" width="50px"></div>
            <div class="image" id="image2"><img src="bubble_images/bubble.png" alt="" width="60px"></div>
            <div class="image" id="image3"><img src="bubble_images/bubble.png" alt="" width="40px"></div>
            <div class="image" id="image4"><img src="bubble_images/bubble.png" alt="" width="20px"></div>
            <div class="image" id="image5"><img src="bubble_images/bubble.png" alt="" width="40px"></div>
            <div class="image" id="image6"><img src="bubble_images/bubble.png" alt="" width="30px"></div>
            <div class="image" id="image7"><img src="bubble_images/bubble.png" alt="" width="40px"></div>
            <div class="image" id="image8"><img src="bubble_images/bubble.png" alt="" width="60px"></div>
            <div class="image" id="image9"><img src="bubble_images/bubble.png" alt="" width="20px"></div>
            <div class="image" id="image10"><img src="bubble_images/bubble.png" alt="" width="30px"></div>
        </div>
    </div>

    <!-- ========================================================Side NAVBAR==================================================== -->


    <div class="side_logo_menu">
        <i onclick="side_bar()" class="fa-solid fa-bars mt-3 cmenu_logo" id="menu_logo"
            style="font-size:30px;color: white"></i>
    </div>

    <div class="side-bar side">
        <div class="menu">
            <i onclick="side_bar()" class="fa-solid fa-bars  mt-3 ml-3" id="menu_logo"
                style="font-size:30px;color: black"></i>

            <div class="box mt-4">
                <!-- ==================================================================Profile Side bar================================================================ -->
                <nav>
                    <h4 class="link_head_box py-2">Profile</h4>
                    <ul>
                        <div class="link_box">
                            <li class="my-3"><a href=""><i class="fas fa-user-tie ml-3"
                                        style="font-size: 22px;color:white"></i> <span
                                        style="margin-left: 5px; font-size: 24px; color: white">Aboout Me</span></a>
                        </div>

                        <div class="link_box">
                            <li class="my-3"><a href=""><i class="fas fa-table ml-3"
                                        style="font-size: 22px;color:white"></i>
                                    <span style="margin-left: 5px; font-size: 24px;color: white">Projects</span></a>
                            </li>
                        </div>

                        <div class="link_box">
                            <li class="my-3"><a href=""><i class="fas fa-info-circle ml-3"
                                        style="font-size: 22px;color:white"></i> <span
                                        style="margin-left: 5px; font-size: 24px; color: white">More info</span></a>
                            </li>
                        </div>
                    </ul>
                    <!-- ==================================================================Setting Side bar================================================================ -->
                    <h4 class="link_head_box py-2">Projects</h4>
                    <ul>
                        <div class="link_box">
                            <li class="my-3"><a href="project1.php"><i class="fas fa-file-alt ml-3"
                                        style="font-size: 22px;color:white"></i> <span
                                        style="margin-left: 5px; font-size: 24px; color: white">Project 1</span></a>
                        </div>

                        <div class="link_box">
                            <li class="my-3"><a href=""><i class="fas fa-file-alt ml-3"
                                        style="font-size: 22px;color:white"></i>
                                    <span style="margin-left: 5px; font-size: 24px;color: white">Project 2</span></a>
                            </li>
                        </div>

                        <div class="link_box">
                            <li class="my-3"><a href=""><i class="fas fa-file-alt ml-3"
                                        style="font-size: 22px;color:white"></i> <span
                                        style="margin-left: 5px; font-size: 24px; color: white">Project 3</span></a>
                            </li>
                        </div>

                    </ul>

                    <!-- ==================================================================Setting Side bar================================================================ -->
                    <h4 class="link_head_box py-2">Setting</h4>
                    <ul>
                        <div class="link_box">
                            <li class="my-3"><a href=""><i class="fas fa-power-off ml-3"
                                        style="font-size: 22px;color:white"></i> <span
                                        style="margin-left: 5px; font-size: 24px; color: white">Logout</span></a>
                            </li>
                        </div>

                    </ul>

                    <!-- ==================================================================Dont delete Down Divs================================================================ -->
                </nav>
            </div>
        </div>
    </div>


    <!-- ========================================================First Intro Container==================================================== -->
    <div class="first_intro container">
        <div class="hi_guys hide">
            <p>Hi Guys </p>
        </div>
        <div class="hru hide">
            <p class="ml-2">How Are You Today</p>
        </div>
    </div>

    <!-- =====================================================Second Intro Container==================================================== -->
    <div class="container welcome_con ">
        <h1 class="welcome text-cente">Welcome To My Portpolio</h1>
        <button onclick="side_bar()" class="btn btn1 btn-light mt-2"> <span style="color: white"> Click here
            </span></button>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="script.js"></script>
    </script>

</body>

</html>