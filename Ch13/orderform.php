<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>San Joaquin Valley Town Hall</title>
        <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/slicknav.css">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#nav_menu').slicknav({prependTo:"#mobile_menu"});
            });
        </script>
    </head>
    <body>
        <header>
            <img src="images/town_hall_logo.gif" alt="Town Hall Logo" height="80">
            <h2>San Joaquin Valley Town Hall</h2>
		    <h3>Celebrating our <em id="shadow">75<sup>th</sup></em> Year</h3>
        </header>
        <nav id="mobile_menu"></nav>
        <nav id="nav_menu">
            <ul>
                <li class="current"><a href="index.html">Home</a></li>
                <li><a href="">Speakers</a></li>
                <li><a href="luncheons.html">Luncheons</a></li>
                <li><a href="tickets.html">Tickets</a></li>
                <li><a href="">About Us</a>
                    <ul>
                        <li><a href="">Our History</a></li>
                        <li><a href="">Board of Directors</a></li>
                        <li><a href="">Past Speakers</a></li>
                        <li><a href="">Contact Information</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <main>
            <aside>
                <h2>Guests Speakers</h2>
                <div>
                    <h3>October 19, 2011<br>
                    <a href="speakers/toobin.html"> Jeffrey Toobin</a></h3>
                    <img src="images/toobin75.jpg" alt="Toobin" width="75">
                    <h3>November 16, 2011<br>
                    <a href="speakers/sorkin.html">Andrew Ross Sorkin</a></h3>
                    <img src="images/sorkin75.jpg" alt="Sorkin" width="75"><br>
                    <h3>January 18, 2012<br>
                    <a href="speakers/chua.html">Amy Chua</a></h3>
                    <img src="images/chua75.jpg" alt="Chua" width="75">
                    <h3>February<br>
                    <a href="speakers/sampson.html">Scott Sampson</a></h3>
                    <img src="images/sampson75.jpg" alt="Sampson" width="75">
                </div>
            </aside>
            <section>
                <p>
                    Hi <?php echo $_POST["First-Name"]; ?> <?php echo $_POST["Last-Name"]; ?><br>
                    Your email is: <?php echo $_POST["Email"];?><br>
                    Address is: <?php echo $_POST["Address"];?><br>
                    City: <?php echo $_POST["City"];?><br>
                    State: <?php echo $_POST["State"]?><br>
                    Zip Code: <?php echo $_POST["Zip-Code"]?><br>
                    Phone: <?php echo $_POST["Phone-Number"]?><br>
                    Order Type: <?php echo $_POST["Order-Type"]?><br>
                    Number of Tickets: <?php echo $_POST["Number-of-Tickets"]?><br>
                    Payment Method: <?php echo $_POST["Payment-Method"]?><br>
                    Card Type: <?php echo $_POST["Card-Type"]?><br>
                    Card Number: <?php echo $_POST["Card-Number"]?><br>
                    Expiration date: <?php echo $_POST["Expiration-Date"]?><br>
                </p>
            </section>
        </main>
        <footer>
            <p>&copy; 2012, San Joaquin Valley Town Hall, Fresno, CA 93755</p>
        </footer>
    </body>
</html>