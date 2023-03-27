</main>
<!--Start footer-->
<footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20px">ShopHouse</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, ad.</p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20px">Newslatter</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email *">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="col-lg col-12">
                <h4 class="font-rubik font-size-20px">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14px text-white-50 pb-1">About Us</a>
                    <a href="#" class="font-rale font-size-14px text-white-50 pb-1">Delivery information</a>
                    <a href="#" class="font-rale font-size-14px text-white-50 pb-1">Privacy policy</a>
                    <a href="#" class="font-rale font-size-14px text-white-50 pb-1">Term & Condition</a>
                </div>
            </div>
            <div class="col-lg col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14px text-white-50 pb-1">About Us</a>
                    <a href="#" class="font-rale font-size-14px text-white-50 pb-1">Order history</a>
                    <a href="#" class="font-rale font-size-14px text-white-50 pb-1">Wish List</a>
                    <a href="#" class="font-rale font-size-14px text-white-50 pb-1">Somebullshit</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
    <p>&copy; Copyrights 2023. Designed by <a href="#" class="color-second">DumDumb</a></p>
</div>
<!--Start footer-->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Owl-carousel-Javascript-CDN-->
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--isoplugin-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--Custom Javasript-->
<script src="index.js"></script>
<script>
    <?php 
    if(isset($_SESSION['message'])) 
    {
      ?>
        alertify.set('notifier','position', 'top-right');
        alertify.success('<?= $_SESSION['message'] ?>');
      <?php
        unset($_SESSION['message']);
    } 
   ?>
  </script>
</body>
</html>