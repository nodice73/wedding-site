<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport"
            content="width=device-width, initial-scale=1">
        <title>Maclovia and Adam</title>
        <link rel="stylesheet" href="style.css">
    </head>
 
    <body>
        <main>
        <div class="title">
            <h1>October 7th, 2017</h1>
            <a class="sf" href="cloud.html">Santa Fe, New Mexico</a>
        </div>

        <div class="clearfix">
            <?php include("menu.html"); ?>

            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="julia.jpg">
                </div>
                <div class="mySlides fade">
                    <img src="us.jpg">
                </div>
                <div class="mySlides fade">
                    <img src="julia2.jpg">
                </div>
                <div class="mySlides fade">
                    <img src="us2.jpg">
                </div>
                <div class="mySlides fade">
                    <img src="kissy.jpg">
                </div>
            </div>
        </div>
        <a class="sf" href="goat_face.html">Stay Tuned!</a>
        </main>

        <script>
var i;
var slideIndex = 0;
showSlides();

function showSlides() {
    var slides = document.getElementsByClassName("mySlides");
    for (i=0; i<slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 7000);
}
        </script>
    </body>
</html>
