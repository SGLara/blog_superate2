var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}








// // Get the modal
// var modal1 = document.getElementById("myModal1");
// var modal2 = document.getElementById("myModal2");
// var modal3 = document.getElementById("myModal3");

// // Get the button that opens the modal
// var btn1 = document.getElementById("myBtn1");
// var btn2 = document.getElementById("myBtn2");
// var btn3 = document.getElementById("myBtn3");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btn1.onclick = function() {
//   modal1.style.display = "block";
// }

// btn2.onclick = function() {
//   modal2.style.display = "block";
// }

// btn3.onclick = function() {
//   modal3.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal1.style.display = "none";
// }

// span.onclick = function() {
//   modal2.style.display = "none";
// }

// span.onclick = function() {
//   modal3.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event1) {
//   if (event1.target == modal1) {
//     modal1.style.display = "none";
//   }
// }

// window.onclick = function(event2) {
//   if (event2.target == modal2) {
//     modal2.style.display = "none";
//   }
// }

// window.onclick = function(event3) {
//   if (event3.target == modal3) {
//     modal3.style.display = "none";
//   }
// }