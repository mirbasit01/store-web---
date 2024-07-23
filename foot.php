<footer class="footer mt-5">
       <div class="container">
       <div class="row">
       <div class="col-md-4 col-lg-4 mt-5 d-flex justify-content-center flex-column align-items-center">
                <img src="logo.jpg" alt="">
                <div class="flex-column d-flex mt-4">
                <a href="#" class="text-decoration-none text-success fw-bold">Returns/Refunds</a>
                <a href="#" class="text-decoration-none mt-2 text-success fw-bold">Payment method</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 flex-column   d-flex justify-content-center align-items-center" style="margin-top: 130px;">
             <h4 class="fw-bold my-l-3">Pages</h4>
                <div class="flex-column mt-3 d-flex">
                    <a href="#" class="text-decoration-none text-success mt-2 fw-bold">Sign-in/Register</a>
                    <a href="#" class="text-decoration-none text-success mt-2 fw-bold">My Favourites</a>
                    <a href="#" class="text-decoration-none text-success mt-2 fw-bold">Returns/Refunds</a>
                    <a href="#" class="text-decoration-none text-success mt-2 fw-bold">Terms & Conditions</a>
                    <a href="#" class="text-decoration-none text-success mt-2 fw-bold">Privacy Policy</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 d-flex flex-column justify-content-center align-items-center"  style="margin-top: 130px;">
             <h4 class="fw-bold">Contact Us</h4>
                <div class="d-flex flex-column">
                    <a href="#" class="text-decoration-none text-success mt-2 fw-bold"><i class="bi fs-4 bi-facebook"></i> Facebook</a>
                    <a href="#" class="text-decoration-none text-success mt-2 fw-bold"><i class="bi fs-4 bi-instagram"></i> Instagram</a>
                    <a href="#" class="text-decoration-none text-success mt-2 fw-bold"><i class="bi fs-4 bi-twitter"></i> Twitter</a>
                    <a href="#" class="text-decoration-none text-success mt-2 fw-bold"><i class="bi bi-envelope-at-fill"></i> E-mail</a>
                </div>
            </div>
         
        <div class="row">
            <div class="col-md-12  mt-3 mb-2 bg-light d-flex justify-content-center align-items-center ">
            © Missrebel. All Rights Reserved.
            </div>
        </div>
       </div>
    </footer>

        
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
  cssMode: true,
  loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  mousewheel: true,
  keyboard: true,
  autoplay: {
    delay: 2500,  // 2.5 seconds
    disableOnInteraction: false,  // Continue autoplay after interaction
  },
});

</script>
<script>
        var swiper = new Swiper('.cardswiper', {

            slidesPerView: 4,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
        // when window width is <= 480px
        480: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        // when window width is <= 768px
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // when window width is <= 1024px
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        // when window width is > 1024px
        1200: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
    },
});
    </script>
     <script>
   var swiper = new Swiper(".carwiper", {
    autoplay: {
        delay: 3000, // 3000 milliseconds = 3 seconds
        disableOnInteraction: false, // Keeps autoplay running even after user interactions
    },
});

  </script>
  </body>
</html>
