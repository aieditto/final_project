<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesignBitbd</title>
    <link rel="icon" type="image/x-icon" href="./picture/logo color.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <div class="logo">
            <img style="height: 50px ; margin-left:60px" src="./picture/logowithtext.png" alt="">
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">All Products </a></li>
                <li><a href="#">Other Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Account</a></li>  
            </ul>
        </nav>
    </header>
    <section class="first_view">
        <div class="text">
            <h5>Premium Quality Product</h5>
            <h1>We Print<br> What You Want</h1>
            <h6>Here you can find glorious deisgn, custom made design and many more..</h6>
        </div>
        <div class="image">
            <img src="./picture/tshirt-design-3.jpg" alt="" style="border-radius: 30px;">
        </div>
    </section>
    <section>
        <div class="box">
            <div class="card-cont">
                <div class="card-conteiner">
                    <img class="card-image"  src="./picture/BC3001_Graphic_TeamPurple copy.jpg" alt="">
                    <h1 class="Tshirt-head">Violet Plain T-shirt</h1>
                    <p class="card-description">
                        Soft & High Quality Cotton <br>
                        Male & Female Both <br>
                        <b>Size:</b> M, L, XL, XXL <br>
                        <b>Quality:</b> 190 gsm <br>
                        <b>Code:</b> 101
                    </p>
                    <h2>Price : 20$</h2>
                </div>
                <div class="card-conteiner">
                    <img class="card-image"  src="./picture/BC3001_Graphic_Tan copy.jpg" alt="">
                    <h1 class="Tshirt-head">Yellow Plain T-shirt</h1>
                    <p class="card-description">
                        Soft & High Quality Cotton <br>
                        Male & Female Both <br>
                        <b>Size:</b> M, L, XL, XXL <br>
                        <b>Quality:</b> 190 gsm <br>
                        <b>Code:</b> 102
                    </p>
                    <h2>Price : 20$</h2>
                </div>
                <div class="card-conteiner">
                    <img class="card-image"  src="./picture/BC3001_Graphic_TrueRoyal copy.jpg" alt="">
                    <h1 class="Tshirt-head">Blue Plain T-shirt</h1></h1>
                    <p class="card-description">
                        Soft & High Quality Cotton <br>
                        Male & Female Both <br>
                        <b>Size:</b> M, L, XL, XXL <br>
                        <b>Quality:</b> 190 gsm <br>
                        <b>Code:</b> 103
                    </p>
                    <h2>Price : 20$</h2>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="card-cont">
                <div class="card-conteiner">
                    <img class="card-image"  src="./picture/IMG_20180705_135257heatherMilitaryGreen copy.jpg" alt="">
                    <h1 class="Tshirt-head">Olive Plain T-shirt</h1>
                    <p class="card-description">
                        Soft & High Quality Cotton <br>
                        Male & Female Both <br>
                        <b>Size:</b> M, L, XL, XXL <br>
                        <b>Quality:</b> 190 gsm <br>
                        <b>Code:</b> 104
                    </p>
                    <h2>Price : 34$</h2>
                </div>
                <div class="card-conteiner">
                    <img class="card-image"  src="./picture/IMG_20180705_135257heatherorange copy.jpg" alt="">
                    <h1 class="Tshirt-head">Orange Plain T-shirt</h1>
                    <p class="card-description">
                    Soft & High Quality Cotton <br>
                    Male & Female Both <br>
                    <b>Size:</b> M, L, XL, XXL <br>
                    <b>Quality:</b> 190 gsm <br>
                    <b>Code:</b> 105
                    </p>
                    <h2>Price : 26$</h2>
                </div>
                <div class="card-conteiner">
                    <img class="card-image"  src="./picture/IMG_20180705_135257Heatherslate copy.jpg" alt="">
                    <h1 class="Tshirt-head">Soft Blue Plain T-shirt</h1></h1>
                    <p class="card-description">
                        Soft & High Quality Cotton <br>
                        Male & Female Both <br>
                        <b>Size:</b> M, L, XL, XXL <br>
                        <b>Quality:</b> 190 gsm <br>
                        <b>Code:</b> 106
                    </p>
                    <h2>Price : 21$</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="form">
        <form action="form.php" method="post">
            <h1 >Place An Order</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
        
            <label for="size">Size:</label>
            <input type="text" id="size" name="size" required>
        
            <label for="code">Code:</label>
            <input type="text" id="code" name="code" required>
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>
        
            <button type="submit">Register</button>
          </form>
    </div>
    
    <footer class="footer">

        <div class="contact">
            <div class="footer-logo">
                <img src="./picture/Logo.png" alt="" style="height: 40px;">
            </div>
            
            <div class="icon">
                <h4 style="color: white; font-family:Arial">Find Us On Social Media:</h4>
                <br>
                <a href="#"><i class="fa-brands fa-facebook" style="color: white; height:50px"></i></a>
                <a href="#"><i class="fa-brands fa-instagram" style="color: white;"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin" style="color: white;"></i></a>
            </div>
            <div class="links">
                <h4>Quick Links</h4>
                <p>
                    <a href="#">Know More About Us</a><br>
                    <a href="#">Visit Store</a><br>
                    <a href="#">Lets Contact</a><br>
                </p>
            </div>
            
            <div class="links">
                <h4>Important Links</h4>
                <p>
                    <a href="#">Privacy Policy</a><br>
                    <a href="#">Shipping Details</a><br>
                    <a href="#">Terms & Condition</a><br>
                </p>
            </div>
        </div>
        <div class="bye-bye">
            <p>© copyright 2023 All right reserved by @DesignBitbd</p>
        </div>
    </footer>
</body>
</html>
