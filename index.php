<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safety Net</title>
    <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
    <link rel="icon" href="assets/img/logo.png">
</head>
<body>
    <?php include 'assets/includes/main-nav.php' ?>
    <section>
        

        <style>
        body {
            margin: 0 !important;
            padding: 0 !important;
        }
        header, a, footer {
            background-color: rgb(255, 145, 0) !important;
        }
        section {
            height: 535px;
            background-image: url(assets/img/bg-1.jpg);
            background-size: cover;     
            background-position: center; 
        } 
        #section {
            height: 535px;
            background-image: url(assets/img/bg-2.jpg);
            background-size: cover;
            background-position: center; 
        }
        .section-p {
            color: crimson !important;
            font-size: 18px;
            margin-top: 0;    
        } 
        img {
            margin-left: 30px;
        } 
        
        @media  (max-width: 700px) {
            a {
                width: auto !important;
            }
            .ul {
                display: flex !important;
                flex-direction: column !important;
            }
            .header-li {
                margin: 0 !important;
            }
            .section-div {
                margin: 0 auto !important;
            }
            .section-div1 a {
                margin: 0 !important;
            }
            .section-div2 {
                float: none !important;
                position: relative;
                top: 25%;
            }
            footer .maindiv {
                display: flex !important;
                flex-direction: column !important;
            }
            .footer-navbar-brand {
                display: flex !important;
                justify-content: center !important;
                margin-bottom: 40px !important;
            }
            .footer-h1 {
                position: relative !important;
                top: 35px !important;
                right: 30px;
                font-size: 20px !important;
            }
            footer .div {
                display: flex !important;
                justify-content: space-between !important;
                
            }
            footer .div-p {
                margin-right: auto;
            }
        }
    </style>
</head>
<body>
    <section>
        <div style="padding: 170px 60px; max-width: 450px;" class="section-div section-div1 text-center d-block">
            <h3 class="text-warning fw-bold mt-3 my-0 fs-4">SAVE WITH SAFETY NET</h3>
            <p class="mx-3 section-p fw-bold">The Financial Friend Everyone Needs</p>
            <a href="registration" style="width: 135px; height: 42px;" class="fw-bold btn text-light rounded-pill my-5 ">Register Now</a>
            </div>
        </div>
    </section>

    <section id="section">
        <div style="max-width: 400px;" class="section-div section-div2 float-end pt-5 mx-5 text-center d-block">
            <h3 style="text-shadow: 14px 9px 2px rgba(138, 98, 46, 0.5);" class="text-light fs-1 fw-bold">Easily Make Transfer <br> <span class="d-inline-block">to</span> <br> Friends and Family</h3>
            <a href="#" style="width: 130px;" class="fw-bold btn bg-warning fs-5 text-light rounded-pill my-3 text-center mt-1">Sign Up</a>
        </div>
    </section>
</body>

<footer class="text-light fw-bold">
    <div class="maindiv d-flex justify-content-between">
        <div class="navbar-brand mt-4 ">
            <a class="navbar-brand footer-navbar-brand" href="#">
                <img width="80" height="80" src="assets/img/logo.png" alt="logo">
                <h1 class="footer-h1 text-light mt-3 mx-3 fs-4">Safety Net</h1>  
            </a>
        </div>
    
        <div style="display: flex;" class="mb-5 mx-3 div">
            <nav style="margin-right: 180px;" class="nav navbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link text-light mt-3" active>Shortcut</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link text-light active">Login</a></li>
                    <li class="nav-item"><a href="registration.php" class="nav-link text-light active">Register</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-light active">Contact Us</a></li>
                </ul>
            </nav>
        
            <div>
                <p style="max-width: 200px;" class="div-p navbar navbar-text"><span style="position: relative; right: 80px; top: 23px;" class="d-inline-block">Address: </span>62 Gado Nasko Road, Opposite RCCG Power House, Kubwa, Abuja, Nigeria</span></p>
            </div>
        </div>
    </div>

    <p class="text-light text-center d-block mt-5 pb-3">Copyright &copy; 2021 Safety-Net</p>
</footer>
<script src="assets/js/bootstrap.bundle.min.js"></script>
    </section>
</body>
</html> 