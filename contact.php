<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="shortcut icon" href="alm-removebg-preview.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleContact.css">


</head>

<body>
    <header>
        <div class="header-1">
            <a href="" class="logo"><img src="alm-removebg-preview.png" alt=""><b> &nbsp; Alif Laam Meem Printing
                    Press</b></a>

        </div>
        <div class="header-2">
            <div id="menu-bar" class="fas fa-bars"></div>
            <nav class="navbar">
                <a href="final.php">Home</a>
                <a href="final.php #product1">Products</a>
                <a href="Deal.php">Calculations</a>
                <a href="contact.php" style="color: white; background-color: #27ae60;  border-radius: 5rem;">Contact</a>
                <a href="aboutus.php">About us</a>
            </nav>
            <div class="icons">
                <a href="" class="fas fa-shopping-cart"></a>
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-user-circle"></a>
            </div>
        </div>
    </header>
    <section class="contact" id="contact">
        <h1 class="heading"><span><b>Write Us</b></span></h1>

        <div class="container">
            <form action="contact_us.php" method="post" onsubmit="return validateForm()" name="myForm">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="First_Name" placeholder="Your name">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="Last_Name" placeholder="Your last name">

                <label for="country">Country</label>
                <select id="country" name="Country">
                    <option value="Pakistan">Pakistan</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>

                <label for="subject">Subject</label>
                <textarea id="subject" name="Subject" placeholder="Write something.." style="height:200px"></textarea>
                <input type="submit" value="Submit">
            </form>
            <script>
            function validateForm() {
                var x = document.forms["myForm"]["fname"&&"lname"&&"country"&&"subject"].value;
                if (x == "" || x == null) {
                    alert("All fields must be filled out");
                    return false;
                }
            }
            </script>
        </div>
        <h1 class="heading"><span><b>Contact Us</b></span></h1>
        <div class="container">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th>
                            Contact
                        </th>
                        <th>
                            E-Mail
                        </th>
                        <th>
                            Social
                        </th>
                    </tr>
                    <tr>
                        <td>
                            +92-321-8376474
                        </td>
                        <td>
                            <a href="mailto:sattarcheemag@yahoo.com">sattarcheemag@yahoo.com</a>
                        </td>
                        <td>

                            <a href="https://facbook.com/MrSattarCheema" target="_blank"
                                class="btn fab fa-facebook-f"></a>
                            <a href="https://instagram.com/sattar_cheema" target="_bank"
                                class="btn fab fa-instagram"></a>
                            <a href="https://twitter.com/MrSattarCheema" class="btn fab fa-twitter"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            +92-303-7672988
                        </td>
                        <td>
                            <a href="mailto:nomi.1970alm@gmail.com">nomi.1970alm@gmail.com</a>
                        </td>
                        <td>
                            <a href="https://facebook.com/nomi.463" target="_blank" class="btn fab fa-facebook-f"> </a>
                            <a href="https://instagram.com/nu_man.64" target="_bank" class="btn fab fa-instagram"></a>
                            <a href="https://twitter.com" class="btn fab fa-twitter"></a>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
    </section>












    <section class="footer">
        <hr>

        <div class="box-container">

            <div class="box">
                <a href="" class="logo"><img src="alm-removebg-preview.png" alt=""><b> &nbsp; Alif Laam Meem Printing
                        Press</b></a>
                <p>If your are looking for premium quality online printing and business printing services, then you are
                    at
                    right place.</p>
                <div class="share">
                    <a href="#" class="btn fab fa-facebook-f"></a>
                    <a href="#" class="btn fab fa-twitter"></a>
                    <a href="#" class="btn fab fa-instagram"></a>
                    <a href="#" class="btn fab fa-linkedin"></a>
                </div>
            </div>
            <div class="vl"></div>
            <div class="box">
                <h3>Our location</h3>
                <div class="links">
                    <a href="#">Lahore</a>
                    <a href="#">Karachi</a>
                    <a href="#">Islamabad</a>
                    <a href="#">Multan</a>
                </div>
            </div>
            <div class="vl"></div>
            <div class="box">
                <h3>Quick links</h3>
                <div class="links">
                    <a href="final.php">home</a>
                    <a href="final.php #product1">products</a>
                    <a href="Deal.php">Calculations</a>
                    <a href="contact.php">contact</a>
                </div>
            </div>
            <div class="vl"></div>
            <div class="box">
                <h3>Download app</h3>
                <div class="links">
                    <a href="#">google play</a>
                    <a href="#">window xp</a>
                    <a href="#">app store</a>
                </div>
            </div>

        </div>

        <h1 class="credit"> Created By: <span> KAKI GANG ( A project of <i><b>Soft Solutions </b></i>) </span> | All
            rights reserved! </h1>

    </section>



    <script src="script.js"></script>
</body>

</html>