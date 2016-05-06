<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Rock at Gunn</title>
    <link rel="stylesheet" type="text/css" href="CSS/generalCSS.css" />
    <link rel="stylesheet" type="text/css" href="CSS/homeCSS.css" />
</head>
<body>
    <?php include "modules/page-header.php"; ?>
    <div class="wrapper" id="body-wrapper">
        <div id="slideshow-container">
            <div id="active-container" style="background-image: url('image-assets/home-1.jpg')">
                <div id="slideshow-caption">
                    <div class="title">
                        Stuff
                    </div>
                    More Stuff
                </div>
            </div>
            <div id="waiting-container">
                <ul id="slide-list" class="unconventional-list">
                    <li id="currentSlide" style="background-image: url('image-assets/home-1.jpg')"></li>
                    <li style="background-image: url('image-assets/home-2.jpg')"></li>
                    <li style="background-image: url('image-assets/filler-1.jpg')"></li>
                    <li style="background-image: url('image-assets/filler-2.jpg')"></li>
                    <li style="background-image: url('image-assets/filler-3.jpg')"></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="text-container">
                <span class="title">What is Rock?</span>
                <p>
                    We are students who are committed to listening and talking with other students about anything and everything. We are here to listen and share our experiences. ROCK is a peer advisory group/student support group that is completely student-run. We are also an outreach group that hopes to create connections around campus and build a strong campus community in which all students feel welcomed.
                </p>
            </div>
            <div class="image-container">
                <img src="image-assets/home-1.jpg"/>
            </div>
        </div>
        <div class="container">
            <div class="image-container">
                <img src="image-assets/home-2.jpg"/>
            </div>
            <div class="text-container">
                <span class="title">What does ROCK stand for?</span>
                <p>
                    R-each<br/>
                    O-ut<br/>
                    C-are<br/>
                    K-now<br/>
                </p>
            </div>
        </div>
    </div>
    <?php include "modules/footer.php"; ?>
</body>
</html>
