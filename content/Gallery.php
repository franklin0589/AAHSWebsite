<!-- Container for the image gallery -->
<div id="gallery_container">
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 7</div>
      <img src="media/Gallery/image1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 7</div>
      <img src="media/Gallery/image2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 7</div>
      <img src="media/Gallery/image3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 7</div>
      <img src="media/Gallery/image4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 7</div>
      <img src="media/Gallery/image5.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 7</div>
      <img src="media/Gallery/image6.jpg" style="width:100%">
  </div>
  <div class="mySlides">
    <div class="numbertext">7 / 7</div>
      <img src="media/Image.jpeg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>


  </div>
<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";
}
</script>
