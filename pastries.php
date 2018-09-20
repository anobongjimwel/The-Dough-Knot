<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Dough Knot - Home</title>
        <link rel="stylesheet" href="semantic/semantic.css" />
        <script src="jquery/jquery.js"></script>
        <script src="semantic/semantic.js"></script>
        <style>
            * {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                font-family: Helvetica;

            }

            body {
                margin: 0;
                padding-top: 40px;
            }


            #headerImg {
                background-image: url("images/homebg.jpg");
                width: 100%;
                height: 100vh;
                background-repeat: no-repeat;
                background-size: cover;
                color: red;
                text-align: center;
                text-shadow: 0 0 10px darkgray;

            .ui.container {

            }
        </style>
    </head>
    <body>
        <div class="ui top attached menu" style="position: fixed; z-index: 1000000; top: 0; left: 0; right: 0; height: 50px !important;">
            <div class="ui dropdown icon item">
                <i class="wrench icon"></i>
                <div class="menu">
                    <div class="item">
                        <i class="dropdown icon"></i>
                        <span class="text">New</span>
                        <div class="menu">
                            <div class="item">Document</div>
                            <div class="item">Image</div>
                        </div>
                    </div>
                    <div class="item">
                        Open...
                    </div>
                    <div class="item">
                        Save...
                    </div>
                    <div class="item">Edit Permissions</div>
                    <div class="divider"></div>
                    <div class="header">
                        Export
                    </div>
                    <div class="item">
                        Share...
                    </div>
                </div>
            </div>
            <div class="right menu">
                <div class="ui right aligned category search item">
                    <button class="ui button green" id="cart"><?php echo $_SESSION['cart']?></button>&nbsp;&nbsp;
                    <button class="ui button red" onclick="location.href='logout.php'">Logout</button>
                </div>
                </div>
            </div>
            <div class="ui container fluid" style="padding: 10px;">
            <div class="ui four cards">
                <div class="card">
                    <div class="image">
                        <img src="images/Black-forest-cake-1-Kg-800x800.jpg">
                    </div>
                    <div class="content">
                        <div class="header">Black Forest</div>
                        <div class="meta">
                            <a>Pastry</a>
                        </div>
                        <div class="description">
                            Gubat ni Lomboy
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="buttons">
                        <div class="ui green button fluid" onclick="dagdaganMoYungCart()">Add to Cart</div>
                    </div>
                </div>

            </div>
                <div class="card">
                    <div class="image">
                        <img src="images/caramel-cake-1.jpg">
                    </div>
                    <div class="content">
                        <div class="header">Caramel Cake</div>
                        <div class="meta">
                            <a>Pastry</a>
                        </div>
                        <div class="description">
                            Caramel Cake na JPEG
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="buttons">
                            <div class="ui green button fluid" onclick="dagdaganMoYungCart()">Add to Cart</div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="image">
                        <img src="images/dough.jpg">
                    </div>
                    <div class="content">
                        <div class="header">Dough</div>
                        <div class="meta">
                            <a>Pastry</a>
                        </div>
                        <div class="description">
                            Basta Dough
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="buttons">
                            <div class="ui green button fluid" onclick="dagdaganMoYungCart()">Add to Cart</div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="image">
                        <img src="images/dsc04191.jpg">
                    </div>
                    <div class="content">
                        <div class="header">Basta Bread</div>
                        <div class="meta">
                            <a>Pastry</a>
                        </div>
                        <div class="description">
                            with Nuts
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="buttons">
                            <div class="ui green button fluid" onclick="dagdaganMoYungCart()">Add to Cart</div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="image">
                        <img src="images/Guinness-Chocolate-Cupcakes-with-Nutella-Cream-Cheese-Frosting-Big-1.jpg">
                    </div>
                    <div class="content">
                        <div class="header">Choco na Cupcake</div>
                        <div class="meta">
                            <a>Pastry</a>
                        </div>
                        <div class="description">
                            With Nutella
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="buttons">
                            <div class="ui green button fluid" onclick="dagdaganMoYungCart()">Add to Cart</div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="image">
                        <img src="images/IndiaTv18c857_doughnuts.jpg">
                    </div>
                    <div class="content">
                        <div class="header">Pagkain sa India</div>
                        <div class="meta">
                            <a>Pastry</a>
                        </div>
                        <div class="description">
                            Food in India
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="buttons">
                            <div class="ui green button fluid" onclick="dagdaganMoYungCart()">Add to Cart</div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="image">
                        <img src="images/th%20(1).jpg">
                    </div>
                    <div class="content">
                        <div class="header">Food 1.jpg</div>
                        <div class="meta">
                            <a>Pastry</a>
                        </div>
                        <div class="description">
                            Peanut bread
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="buttons">
                            <div class="ui green button fluid" onclick="dagdaganMoYungCart()">Add to Cart</div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="image">
                        <img src="images/th%20(5).jpg">
                    </div>
                    <div class="content">
                        <div class="header">Food 2.jpg</div>
                        <div class="meta">
                            <a>Pastry</a>
                        </div>
                        <div class="description">
                            Cake 2
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="buttons">
                            <div class="ui green button fluid" onclick="dagdaganMoYungCart()">Add to Cart</div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="image">
                        <img src="images/th%20(8).jpg">
                    </div>
                    <div class="content">
                        <div class="header">Mallows</div>
                        <div class="meta">
                            <a>Pastry</a>
                        </div>
                        <div class="description">
                            Cookies
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="buttons">
                            <div class="ui green button fluid" onclick="dagdaganMoYungCart()">Add to Cart</div>
                        </div>
                    </div>

                </div>
                <div class="card"  >
                    <div class="image">
                        <img src="images/ultimate-cupcake-recipe-simple-cupcake-flavors-gourmet-super-moist-vanilla-cupcakes-recipes-best-baking-delicious-cupcakes-wedding-cupcake-stand.jpg">
                    </div>
                    <div class="content">
                        <div class="header">Strawberry Icing</div>
                        <div class="meta">
                            <a>Pastry</a>
                        </div>
                        <div class="description">
                            Cupcakes
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="buttons">
                            <div class="ui green button fluid" onclick="dagdaganMoYungCart()">Add to Cart</div>
                        </div>
                    </div>

                </div>
        </div>

        <script>
            $('.ui.dropdown')
                .dropdown();

            setInterval(function(){
                var cart = document.getElementById("cart");
                var XMLhttp = new XMLHttpRequest();
                XMLhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        cart.innerText = this.response;
                    }
                };
                XMLhttp.open("GET","cartCounter.php", false);
                XMLhttp.send();
            }, 100);

            function dagdaganMoYungCart() {
                var XMLhttp = new XMLHttpRequest();
                XMLhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {

                    }
                };
                XMLhttp.open("GET","cartAdder.php", false);
                XMLhttp.send();
            }
        </script>
    </body>
</html>