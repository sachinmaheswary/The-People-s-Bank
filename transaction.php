<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="bank.css" rel="stylesheet">
</head>
<style>
    html,
    body {
        height: 100%;

    }

    .floatleft {
        float: left;
    }

    .floatright {
        float: right;
    }

    .alignleft {
        float: left;
        margin-right: 15px;
        margin-bottom: 15px;
    }

    .alignright {
        float: right;
        margin-left: 15px;
        margin-bottom: 15px;
    }

    .aligncenter {
        display: block;
        margin: 0 auto 15px;
    }

    a:focus {
        outline: 0px solid;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .fix {
        overflow: hidden;
    }

    p {
        margin: 0 0 15px;
        color: black;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Nunito', sans-serif;
        margin: 0 0 15px;
        color: #151b2c;
        font-weight: 600;
    }

    h1 {
        font-size: 48px;
        line-height: 50px;

    }

    h2 {
        font-size: 38px;
        line-height: 46px;

    }

    h3 {
        font-size: 30px;
        line-height: 38px;

    }

    h4 {
        font-size: 24px;
        line-height: 34px;

    }

    h5 {
        font-size: 20px;
        line-height: 30px;

    }

    h6 {
        font-size: 16px;
        line-height: 28px;

    }

    a {
        transition: all 0.3s ease 0s;
        text-decoration: none;
    }

    a:hover {
        color: #EF233C;
        text-decoration: none;
    }

    a:active,
    a:hover {
        outline: 0 none;
    }

    a:hover,
    a:focus {
        color: #3d5368;
        text-decoration: none;
    }

    body {
        background: #fff none repeat scroll 0 0;
        color: #7e8ca0;
        font-family: 'Nunito', sans-serif;
        font-size: 15px;
        text-align: left;
        overflow-x: hidden;
        line-height: 26px;
    }

    body {
        background-color: #EF233C;
        /* font-family: 'Calibri', sans-serif !important */
    }

    .container {
        margin-top: 100px;
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0px solid transparent;
        border-radius: 0px
    }
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .card .card-title {
        position: relative;
        font-weight: 600;
        margin-bottom: 10px
    }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent
    }

    * {
        outline: none
    }

    .table th,
    .table thead th {
        font-weight: 500
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6
    }

    .table th {
        padding: 1rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6
    }

    .table th,
    .table thead th {
        font-weight: 500
    }

    th {
        text-align: inherit
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .thread-light {
        border: 50px solid black;
        border-style: solid;

    }

    /* #bodyy {
        margin-left: 600px;
    } */

    .navbar {
        position: relative;
        transition: .5s;
        z-index: 999;
        padding-top: 0%;
        padding-bottom: 300px;
    }

    .navbar.nav-sticky {
        position: fixed;
        top: 0;
        width: 100%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, .3);
    }

    .navbar .navbar-brand {
        margin: 0;
        font-size: 45px;
        line-height: 0px;
        font-weight: 700;
        /* letter-spacing: 2px; */
        transition: .5s;

    }

    .navbar .navbar-brand img {
        max-width: 100%;
        max-height: 40px;
    }


    @media (min-width: 992px) {
        .navbar {
            /* position: absolute; */
            width: 100%;
            padding: 30px 60px;
            background: white !important;
            border-bottom: 1px dashed rgba(256, 256, 256, .2);
            z-index: 9;
        }

        .navbar.nav-sticky {
            padding: 10px 60px;
            background: #ffffff !important;
        }

        .navbar .navbar-brand {
            color: #EF233C;
        }

        .navbar.nav-sticky .navbar-brand {
            color: #EF233C;
        }

        .navbar-light .navbar-nav .nav-link,
        .navbar-light .navbar-nav .nav-link:focus {
            padding: 10px 10px 8px 10px;
            /* color: #ffffff; */
            font-size: 15px;
            font-weight: 500;
        }

        .navbar-light.nav-sticky .navbar-nav .nav-link,
        .navbar-light.nav-sticky .navbar-nav .nav-link:focus {
            color: #414141;
        }

        .navbar-light .navbar-nav .nav-link:hover,
        .navbar-light .navbar-nav .nav-link.active {
            color: #111111;
        }

        .navbar-light.nav-sticky .navbar-nav .nav-link:hover,
        .navbar-light.nav-sticky .navbar-nav .nav-link.active {
            color: #EF233C;
        }
    }

    @media (max-width: 991.98px) {
        .navbar {
            padding: 15px;
            background: #ffffff !important;
        }

        .navbar .navbar-brand {
            color: #EF233C;
        }

        .navbar .navbar-nav {
            margin-top: 15px;
        }

        .navbar a.nav-link {
            padding: 5px;
        }

        .navbar .dropdown-menu {
            box-shadow: none;
        }
    }

</style>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">People's Bank</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="bank.html" class="nav-item nav-link active">Home</a>
                    <!-- <a href="#about" class="nav-item nav-link">About</a> -->
                    <a href="services.html" class="nav-item nav-link">Service</a>
                    <!-- <a href="#experience" class="nav-item nav-link">Offers</a> -->
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </div>
    </div>








    <div class="container">
        <!-- <div class="row"> -->
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title m-b-0">Recent Transactions</h5>
                </div>
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">FROM</th>
                                <th scope="col">TO</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col"> DATE & TIME</th>
                            </tr>
                        </thead>
                        <tbody id="bodyy" class="customtable">
                        <?php

                            include 'host.php';
                
                            $sql ="SELECT * from transaction";
                
                            $query =mysqli_query($conn, $sql);
                
                            while($rows = mysqli_fetch_assoc($query))
                            {
                        ?>
                
                            <tr>
                            <td class="py-2"><?php echo $rows['Sender']; ?></td>
                            <td class="py-2"><?php echo $rows['Receiver']; ?></td>
                            <td class="py-2"><?php echo $rows['Balance']; ?> </td>
                            <td class="py-2"><?php echo $rows['Date&Time']; ?> </td>
                                
                        <?php
                            }
                
                        ?>   

                            <!-- <tr>

                                <td>Sourav</td>
                                <td>Raghav</td>
                                <td>₹3000</td>
                                <td>18 June 11:37 AM</td>
                            </tr>
                            <tr>

                                <td>Purvi</td>
                                <td>Disha</td>
                                <td>₹2010</td>
                                <td>18 June 08:40 AM</td>
                            </tr>
                            <tr>
                                < <td>Sachin</td>
                                    <td>Rahul</td>
                                    <td>₹15000</td>
                                    <td>17 JUNE 12:30 PM</td>
                            </tr>
                            <tr>

                                <td>Nikhil</td>
                                <td>Anurag</td>
                                <td>₹20000</td>
                                <td>17 JUNE 10:06 AM</td>
                            </tr>
                            <tr>

                                <td>Ayush</td>
                                <td>Pratik</td>
                                <td>₹3800</td>
                                <td>17 JUNE 09:44 AM</td>
                            </tr>
                            <tr>
                                <td>Sourav</td>
                                <td>Sachin</td>
                                <td>₹17500</td>
                                <td>16 JUNE 12:08 PM</td>
                            </tr>
                            <tr>
                                <td>Virat</td>
                                <td>Rahul</td>
                                <td>₹5400</td>
                                <td>16 JUNE 11:47 AM</td>
                            </tr>
                            <tr>
                                <td>Raghav</td>
                                <td>Disha</td>
                                <td>₹7800</td>
                                <td>16 JUNE 11:36 AM</td>
                            </tr>
                            <tr>
                                <td>Rahul</td>
                                <td>Nikhil</td>
                                <td>₹9000</td>
                                <td>16 JUNE 11:15 AM</td>
                            </tr>
                            <tr>
                                <td>Purvi</td>
                                <td>Virat</td>
                                <td>₹1800</td>
                                <td>16 JUNE 10:50 AM</td>
                            </tr>
                            <tr>
                                <td>Sourav</td>
                                <td>Ayush</td>
                                <td>₹3600</td>
                                <td>16 JUNE 09:45 AM</td>
                            </tr>
                            <tr>
                                <td>Pratik</td>
                                <td>Virat</td>
                                <td>₹5800</td>
                                <td>16 JUNE 08:45 AM</td>
                            </tr>-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- <button><a class="content" href="bank.html">Go to Home</a></button> -->



    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            <div class="container">
                <div class="footer-info">
                    <h2>Sachin Bank</h2>
                    <h3>India</h3>
                    <div class="footer-menu">
                        <p>+012 345 67890</p>
                        <p>sachin@bank.com</p>
                    </div>
                    <div class="footer-social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Sachin Banks</a>, All Right Reserved | Designed By <a href="#">Sachin
                        Maheswary</a></p>
            </div>
        </div>
    </div>
</body>

</html>