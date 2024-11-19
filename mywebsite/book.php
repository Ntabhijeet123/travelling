<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
    </section>
    <div class="heading" style="background:url(css/pexels-photo-388415.jpeg) no-repeat">
        <h1>book now</h1>
    </div>
    <section class="booking">
        <h1 class="heading">book your trip!</h1>
            <form action="book_form.php" class="book_form" method="post">
                <div class="flex">
                    <div class="inputBox">
                        <span>name :</span>
                        <input type="text" placeholder="enter your name" name="name">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="enter your email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>phone :</span>
                        <input type="number" placeholder="enter your number" name="phone">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="enter your address" name="address">
                    </div>
                    <div class="inputBox">
                        <span>where to :</span>
                        <input type="text" placeholder="place you want to visit" name="location">
                    </div>
                    <div class="inputBox">
                        <span>how many :</span>
                        <input type="text" placeholder="number of guests" name="guests">
                    </div>
                    <div class="inputBox">
                        <span>arrivals :</span>
                        <input type="date"  name="arrivals">
                    </div>
                    <div class="inputBox">
                        <span>leaving :</span>
                        <input type="date" name="leaving">
                    </div>
                </div>
                <input type="submit" value="submit" class="btn" name="send">
            </form>
    </section>








    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home"><i class="fas fa-angle-right"></i>home</a>
                <a href="about"><i class="fas fa-angle-right"></i>about</a>
                <a href="package"><i class="fas fa-angle-right"></i>package</a>
                <a href="book"><i class="fas fa-angle-right"></i>book</a>
            </div>
            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>    
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+91 9348564101</a>
                <a href="#"><i class="fas fa-phone"></i>+91 9348564101</a>
                <a href="#"><i class="fas fa-envelope"></i>ntabhijeet32@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>bhubaneswar, odisha</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class='bx bxl-facebook-circle'></i>facebook</a>
                <a href="#"><i class='bx bxl-instagram-alt'></i>instagram</a>
                <a href="#"><i class='bx bxl-twitter' ></i></i>twitter</a>
                <a href="#"><i class='bx bxl-linkedin-square' ></i>linkedin</a>
            </div>
        </div>
        <div class="credit"> created by <span>Nt Abhijeet Sahoo</span> | all rights reserved! </div>
    </section>

    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script src="script.js"></script>
</body>
</html>