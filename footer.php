<!-- ========== Start Footer ========== -->
<section class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-desc text-center"> <a href="tel:+919560639503" class="ftr-tel">Call: +91 9560 639 503</a>
          <p class="text-uppercase">RERA NO: UKREP09170000018 6</p>
          <p class="text-uppercase">WWW.UHUDA.ORG.IN</p>
         <!--  <p><a href="https://up-rera.in/" target="_blank"> www.up-rera.in </a></p> -->
          <p>Disclaimer : The content mentioned in this website is for information purposes only, prices mentioned are subject to change without notice & properties<br/> mentioned are subject to availability. Images are for representation purposes only. This is not the official website. <br/>We may also send updates to the mobile / email id registered with us. All Rights Reserved. </p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="copywrite">
  <p class="ftr-address">Digital Media Planned by <a href="http://monarchindia.co.in/" target="_blank">Monarch India</a>&nbsp;/&nbsp;<a href="privacy-policy.php">Privacy Policy </a></p>
</div>
<!-- ==== // ===== -->
<!-- <div class="rt-icon-settings an_bounce">
  <div class="qr-text" data-toggle="modal" id="form-query" data-target="#query"> Enquire Now </div>
</div> -->
<div class="whatsapp_chat an_bounce" data-toggle="modal" id="form-query" data-target="#query"> 
<a><i class="fas fa-envelope-open-text"></i><span> </span> </a>
</div>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- <script type="text/javascript" src="assets/js/jquery.magnific-popup.js"></script> -->
<script type="text/javascript" src="assets/js/popup-gallery.js"></script>
<!-- <script type="text/javascript">
$(document).ready(function() {
  $('.floor-img,.pr-location,.gallery-images,.home-gallery,.pr-floor').magnificPopup({
    delegate: 'a',
    type: 'image',
    // tLoading: 'Loading image #%curr%...',
    // mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
      }
    }
  });
});
</script> -->
<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.swiper-container', {
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
</script>
<script type="text/javascript">
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  // document.getElementById("main").style.marginLeft = "250px";
  // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}
/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  // document.getElementById("main").style.marginLeft = "0";
  // document.body.style.backgroundColor = "white";
}
</script>
<script type="text/javascript">
$('#query').modal({
  backdrop: 'static',
  keyboard: false
});
</script>
<script type="text/javascript">
// $(window).scroll(function() {
//   var sticky = $('.pr-nav'),
//     scroll = $(window).scrollTop();
//   if(scroll >= 130) {
//     sticky.addClass('fixed');
//   } else {
//     sticky.removeClass('fixed');
//   }
// });
$(window).scroll(function() {
  var sticky = $('.new_footer'),
    scroll = $(window).scrollTop();
  if(scroll >= 130) {
    sticky.addClass('fixed_footer');
  } else {
    sticky.removeClass('fixed_footer');
  }
});
$(function($) {
  let url = window.location.href;
  $('nav ul li a').each(function() {
    if(this.href === url) {
      $(this).addClass('activenav');
    }
  });
});
</script>
<!-- Brochure -->
<?php if(isset($error) and $error=="true"){ ?>
  <script type="text/javascript">
  $("#brochure").modal();
  </script>
  <?php } ?>
    <!-- Price -->
<?php if(isset($errorp) and $errorp=="true"){ ?>
  <script type="text/javascript">
  $("#pricelist").modal();
  </script>
  <?php } ?>
<!-- SideQuery -->
<?php if(isset($errorsq) and $errorsq=="true"){ ?>
  <script type="text/javascript">
  $("#query").modal();
  </script>
<?php } ?>


<script>
    $(document).ready(function(){
        $('#lightgallery,#lightgallery1').lightGallery(); 
    });
</script>
</body>

</html>