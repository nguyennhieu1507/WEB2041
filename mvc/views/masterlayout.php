<!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://localhost/mYproduct/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/users.css" type="text/css" media="screen">
    <link rel="stylesheet" href="./public/css/style.css" type="text/css" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="../public/css/style.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <header class="header">
        <a href="index" class="logo">
            <i class="bi bi-currency-dollar"></i>
            NGUYEN.NHIEU
        </a>
        <nav class="navbar">
            <a href="index">Home</a>
            <a href="#product">Product</a>
            <a href="#review">Review</a>
            <a href="#Certification">Certification</a>
            <a href="#blogs">Blogs</a>
        </nav>
        <div class="icons">
            <div class="bi bi-menu-button" id="menu-btn"></div>
            <div class="bi bi-search" id="search-btn"></div>
            <div class="bi bi-cart" id="cart-btn">
                <nav>
                    <p class="count-prd-avt">0</p>
                </nav>
            </div>
            <?php 
            if( isset($_SESSION['id']) ) { 
                error_reporting(0);
                $row = mysqli_fetch_array($data['profile']);
                echo '<a href="users">
                    <div class="users">
                        <img src="'.$row['avata'].'" alt="">
                        <nav>
                            <p>!</p>
                        </nav>
                    </div></a>';
            }else {
                echo '
                <div class="bi bi-file-earmark-person" id="login-btn">
                    <nav>
                        <p>!</p>
                    </nav>
                </div>';
            }
            ?>
           
        </div>
        <?php 
            if( isset($data['login']) ) { 
                if( $data['login'] == "true" ){
                    echo '<div class="newUser-success">
                            <p>????ng nh???p th??nh c??ng</p>
                        </div>';
                }else {
                    echo '
                        <div class="newUser-fail">
                            <p>????ng nh???p th???t b???i</p>
                        </div>';
                }
                echo '<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>';   
            }
        ?>
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="bi bi-search"></label>
        </form>
        <div class="shopping-cart" id='shopping-cart'>
            <div class="cart-shopping">

            </div>
            <div class="total">
                <p> total : </p>
                <p class="total-price-in-the-cart">0</p>
            </div>
            <div class="btn btn-buynow btn-buyNow" onclick="selectPrd()">BUY NOW</div>
        </div>
        <form class="login-form" method="POST">
            <h3>login now</h3>
            <input type="email" placeholder="Your email" class="box" name="email" required>
            <input type="password" placeholder="Your password" class="box" name="password" required>
            <p style="padding-top: 10px;">forget your password <a> click here</a></p>
            <p>don't have an account <a class="createform">create now</a></p>
            <input type="submit" value="login now" class="btn" name="btnLogin">
        </form>
        <form class="signin-form" method="POST">
            <h3>sign now</h3>
            <input type="text" placeholder="Your name" class="box" name="usernamesignup" required>
            <input type="email" placeholder="Your email" class="box" name="emailsignup" required>
            <input type="password" placeholder="Your password" class="box" name="passwordsignup" required>
            <input type="password" placeholder="Confirm password" class="box" required>
            <input type="submit" value="signup now" class="btn" name="btnSignup">
        </form>
        <div action="" class="order-success">
            <p>Th??m s???n ph???m th??nh c??ng v??o gi??? h??ng </p> <i class="bi bi-cart-check"></i>
        </div>
        <div action="" class="order-fail">
            <p>Error: S???n ph???m ???? t???n t???i trong gi??? h??ng </p> <i class="bi bi-cart-check"></i>
        </div>
        <?php 
            if( isset($data['result']) ) { 
                if( $data['result'] == "true" ){
                    echo '<div class="newUser-success">
                            <p>T???o t??i kho???n th??nh c??ng </p>
                        </div>';
                }else {
                    echo '
                        <div class="newUser-fail">
                            <p>T???o t??i kho???n th???t b???i, T???i kho???n ???? t???n t???i </p>
                        </div>';
                }
                echo '<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>';   
            }
        ?>
        <?php 
            if( isset($data['kqHuy']) ) { 
                if( $data['kqHuy'] == "true" ){
                    echo '<div class="newUser-success">
                            <p>Hu??? ????n H??ng Th??nh C??ng </p>
                        </div>';
                }else {
                    echo '
                        <div class="newUser-fail">
                            <p>Hu??? ????n H??ng Th???t B???i </p>
                        </div>';
                }
                echo '<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>';   
            }
        ?>
        <?php
            if( isset($data['kQua']) ) { 
                if( $data['kQua'] == "true" ){
                    echo '<div class="newUser-success">
                            <p>C???p nh???t t??i kho???n th??nh c??ng</p>
                        </div>';
                }else {
                    echo '
                        <div class="newUser-fail">
                            <p>C???p nh???t t??i kho???n th??nh c??ng</p>
                        </div>';
                }
                echo '<script>

                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>';   
            }
        ?>
        <?php
            if( isset($data['chiSua']) ) { 
                if( $data['chiSua'] == "true" ){
                    echo '<div class="newUser-success">
                            <p>C???p Nh???t B??nh Lu???n Th??nh C??ng</p>
                        </div>';
                }else {
                    echo '
                        <div class="newUser-fail">
                            <p>C???p Nh???t B??nh Lu???n Th???t B???i</p>
                        </div>';
                }
                echo '<script>

                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>';   
            }
        ?>
        <?php
            if( isset($data['checkReview']) ) { 
                if( $data['checkReview'] == "true" ){
                    echo '<div class="newUser-success">
                            <p>C???p Nh???t review Th??nh C??ng</p>
                        </div>';
                }else {
                    echo '
                        <div class="newUser-fail">
                            <p>C???p Nh???t review Th???t B???i</p>
                        </div>';
                }
                echo '<script>

                if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href );
                }
                </script>';   
            }
        ?>
        <?php 
            if( isset($data['ketQua']) ) { 
                if( $data['ketQua'] == "true" ){
                    echo '<div class="newUser-success">
                            <p>T???o ????n H??ng Th??nh C??ng</p>
                        </div>
                        <script>
                            sessionStorage.removeItem("Oder");
                            sessionStorage.removeItem("Oder-gia");
                            sessionStorage.removeItem("yourcart");
                        </script>';
                        echo '<script>
                        if ( window.history.replaceState ) {
                            window.history.replaceState( null, null, window.location.href );
                        }
                        </script>';
                        echo '<script>
                            setTimeout(function(){
                                window.location="users/HistoryOder";
                            }, 4500);
                        </script>';   
                }else {
                    echo '
                        <div class="newUser-fail">
                            <p>T???o ????n H??ng Th???t B???i</p>
                        </div>';
                }
            }
        ?>
    </header>
    <?php
    require_once "./mvc/views/pages/" . $data['pages'] . ".php";
    ?>
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3> <i class="bi bi-currency-dollar"></i> NGUYEN.NHIEU </h3>
                <p>Xin h??n h???nh ?????ng h??nh c??ng ch????ng tr??nh n??y.</p>
                <div class="share">
                    <a href="#" class="bi bi-facebook"></a>
                    <a href="#" class="bi bi-twitter"></a>
                    <a href="#" class="bi bi-instagram"></a>
                    <a href="#" class="bi bi-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="bi bi-telephone"></i> 0978881563 </a>
                <a href="#" class="links"> <i class="bi bi-telephone"></i> 0888800032 </a>
                <a href="#" class="links"> <i class="bi bi-envelope"></i> nguyennhieu1507.2k2@gmail.com </a>
                <a href="#" class="links"> <i class="bi bi-pin-map"></i> 102 Phan V??n H???n, Q.12, TP.HCM </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#" class="links"> <i class="bi bi-arrow-up-right"></i> home </a>
                <a href="#" class="links"> <i class="bi bi-arrow-up-right"></i> products </a>
                <a href="#" class="links"> <i class="bi bi-arrow-up-right"></i> review </a>
                <a href="#" class="links"> <i class="bi bi-arrow-up-right"></i> certification </a>
                <a href="#" class="links"> <i class="bi bi-arrow-up-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <input type="email" placeholder="your email" class="email">
                <input type="submit" value="subscribe" class="btn_subscribe">
                <img src="./public/images/payment.png" class="payment-img" alt="">
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./public/js/index.js"></script>
</body>

</html>