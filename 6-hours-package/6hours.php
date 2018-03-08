<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Globuzzer - 6-hours</title>

    <!------ STYLESHEETS ------->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:900" rel="stylesheet">
    <!-- Simple grid -->
    <link rel="stylesheet" href="../css/simple-grid.css">
    <!-- Own stylesheet -->
    <link rel="stylesheet" href="../css/style.css">

    <!------ SCRIPTS ------->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<body>
<header>
    <div>
    <div class="menu">
        <div class="logo"><a href="#"><img src="../img/globuzzerLogo.png" alt="gb-logo"></a></div>
        <div id="mobilemenu" class="show-mobile"><span class="fa fa-bars"></span></div>
        <ul id="mainmenu" class="nav-bar">
            <li><a href="#">Home</a></li>
            <li><a href="#">My package</a></li>
        </ul>
    </div>
    <div class="img-header package-view">
        <div class="intro">
            <p class="curr-package"><span>06</span> hours package</p>
            <h2>Discover Sweden<br>
                in 6 hours
            </h2>
        </div>
        <div id='header-moving-down'>
            <i  class="fas fa-chevron-circle-down"></i>
        </div>
    </div>
    <div class="white-box"></div>
</div>
</header>

<div class="brochure-viewer">
    <div class="container">
        <div class="row">
            <div class='col-6 welcome-text'>
                <div>
                    <h1>Welcome!</h1>
                    <p>Are you interested in discovering Sweden?</p>
                    <p>Just open the brochure, take a look at our</p>
                    <p>services and choose the ones you like.</p>
                </div>
            </div>

            <div class="arrow">
                <img class='normalArrow' src="../img/secondPage-arrow.png" alt="arrow">
            </div>
            <div class="arrow">
                <img class='mobileArrow' src="../img/mobile-secondPage-arrow.png" alt="arrow">
            </div>

            <div class='col-6'>
                <img class='img-responsive' src="../img/BROCHURE 6 hours mockup.jpg" alt="BROCHURE">
            </div>        
        </div>
        <div id="moving-down-icon">
            <p>Or jump to see all the services</p>
            <i  class="fas fa-chevron-circle-down"></i>
        </div>
    </div>

</div>
<div id='supplementalDiv'></div>

<div id='mobileButtons'>
        <div id="filterButton">Filters</div>
        <div id="featureButton">Featured</div>
</div>

<div class="container" id='filterForm'>
            <form id="filter" method="POST">
                <select name="filter" >
                    <option value="filter" selected>Filters</option>
                    <option value="arts-museums">Arts & Museums</option>
                    <option value="city-tour">City Tour</option>
                    <option value="food-related">Food Related</option>
                    <option value="inside-programs">Inside Programs</option>
                    <option value="outside-programs">Outside Programs</option>
                    <option value="water-related">Water Related</option>
                </select>
            </form>
 
            <form id="featured" method="POST">
                <select name="featured" class="pink-select">
                    <option value="featured" selected hidden disabled>Featured</option>
                    <option value="oslo">Oslo</option>
                </select>
            </form>
</div>   

<div id='services-block' class="container">
    <hr class="fine-hr">
    <div class="row">
        <div class="services">
            <div class="thumbnail-container">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service1.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Bus Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service2.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Boat Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service3.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Surf Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service4.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Cabin Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
        </div>
    </div>
    <div class="row">
        <div class=" services">
            <div class="thumbnail-container ">
                <div class="hover-container ">
                    <div class="thumbnail" style="background-image:url(../img/service5.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Museum Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service6.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Forest Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service7.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Dessert Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
            <div class="thumbnail-container">
                <div class="hover-container">
                    <div class="thumbnail" style="background-image:url(../img/service8.jpg)"></div>
                    <div class="color-overlay"></div>
                    <div class="service-desc">
                        <h3>Fun Park Trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                        <a class="button-pink"><img src="../img/icon3_book.png" alt="book"> Read more</a>
                    </div>
                </div>
                <img src="../img/icon3_check.png" alt="check" class="check">
                <img src="../img/icon3_hearth.png" alt="heart" class="heart">
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="privacy-copyright">
        <ul class="socialmedia">
            <li><a href="https://www.globuzzer.com/"><img class="gb-icon" src="../img/GB%20icon.png" alt="gb-icon"></a></li>
            <li><a href="https://www.facebook.com/Globuzzer/"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/globuzzer"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.pinterest.at/globuzzer/"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="https://www.linkedin.com/company/globuzzer"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
        <ul class="nav-bar">
            <li><a href="#">Home</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
        <br>
        <p class="copyright">&copy; Copyright statement</p>
    </div>
</footer>

<script>

$(document).ready(function () {
    var mobileFilterItems= '<div>'+
                    '<p value="All" style="text-decoration:underline">All</p>'+
                    '<p value="arts-museums">Arts & Museums</p>'+
                    '<p value="city-tour">City Tour</p>'+
                    '<p value="food-related">Food Related</p>'+
                '</div>'
                   //  '<li value="inside-programs">Inside Programs</li>'+
                   //  '<li value="outside-programs">Outside Programs</li>'+
                   // '<li value="water-related">Water Related</li>'+
    function responsiveFilters(){
        if( $('.normalArrow').css('display')=='none'){ //when the screen is small
            $('#supplementalDiv').show();
            $('#mobileButtons').show();
            $('#filter select').replaceWith(mobileFilterItems)

            $('#featured select').replaceWith(
               '<ul name="featured"  style="list-style-type:none;display:none">'+
                    '<li value="oslo">Oslo</li>'+
                '</ul>' 
            )
        }else{
            $('#supplementalDiv').hide();
            $('#mobileButtons').hide();
            $('#filter div').replaceWith(
               '<select name="filter" >'+
                    '<option value="filter" selected hidden disabled>Filters</option>'+
                    '<option value="arts-museums">Arts & Museums</option>'+
                    '<option value="city-tour">City Tour</option>'+
                    '<option value="food-related">Food Related</option>'+
                    '<option value="inside-programs">Inside Programs</option>'+
                    '<option value="outside-programs">Outside Programs</option>'+
                    '<option value="water-related">Water Related</option>'+
                '</select>'
            )

            $('#featured ul').replaceWith(
              '<select name="featured" class="pink-select">'+
                   '<option value="featured" selected hidden disabled>Featured</option>'+
                    '<option value="oslo">Oslo</option>'+
                '</select>'
            )
        }
    }

    responsiveFilters()
    $(window).resize(responsiveFilters)

    if( $('.normalArrow').css('display')=='none'){
        $('#featureButton').click(function(){
            $(this).css('background-color','#949494');
            $('#filterButton').css('background-color','#BDBDBD');
            $('#filter div').replaceWith('<div><p>Oslo</p></div>');
        })
        $('#filterButton').click(function(){
            $(this).css('background-color','#949494');
            $('#featureButton').css('background-color','#BDBDBD');
            $('#filter div').replaceWith(mobileFilterItems)
        })
    }
    
});
</script>

</body>