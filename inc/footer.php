<!--start footer-->
  <footer class="footer pt-5 pb-4">
    <!--start container -->
    <div class="container">
      <div class="footer_top">
        <div class="row">
          <div class="col-md-3 col-12">
            <div class="about_ftr me-3">
              <h6>About us</h6>
              <p>Ruaanya Fintech Private Limited Is Leading Service Provider For Aadhaar Payments And Money Transfer Services. We
                Are Serving All Banking Services And Utility Services Like Recharge, Bill Payments, Travel Booking
                (Hotel / Bus / Flight) Etc.</p>

              <div class="social_ftr">
				  <a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a>
				  <a href="https://www.linkedin.com/in/suvidhaa-group-74b300289/" target="_blank"><i class="fa fa-linkedin"></i></a>
				  <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.instagram.com/suvidhaa_group/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i class="fa fa-instagram"></i></a>
                  <!-- <a href="https://www.instagram.com/suvidhaa_group/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i class="fa fa-youtube"></i></a> -->
                 
				</div>
            </div>

          </div>


          <div class="col-md-3 col-6">
            <div class="fmenu_cl ms-4">
              <h6>Services</h6>
              <ul class="list-unstyled m-0 p-0">
                <li><a href="banking-service.php">Banking Services</a></li>
                <li><a href="utility-bill-payment.php">Utility Bill Payments</a></li>
                <li><a href="insurance.php">Insurance Services</a></li>
                <li><a href="egovernment-Services.php">E-Governance Services</a></li>
                <li><a href="neo-banking.php">Neo Banking Services</a></li>
              </ul>
            </div>

          </div>

          <div class="col-md-2 col-6">
            <div class="fmenu_cl otherlink">
              <h6>Other Links</h6>
              <ul class="list-unstyled m-0 mb-3 p-0">
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="certificates.php">Certificate</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
              </ul>
              <!-- <a href="memberlogin.php" class="btn min_w144 text-white">Partner Login</a> -->
            </div>

          </div>

          <div class="col-md-4 col-12">
            <div class="contactinfo text-end">
              <h6>Contact Info</h6>

            

              <div class="address mb-4">
                <strong class="fontwgh600 dark_color">Corporate Office</strong>
                <p class="m-0">  <p class="m-0">S1,2nd Floor,D242,Sector 63,Noida-201301 <br></p>
              </div>

              <div class="helpdesk mb-4">
                <strong class="fontwgh600 dark_color">12x7 Help Desk</strong>
                <p class="m-0"><a href="tel:+91 9205621622">+91-9911611346</a>
                  </p>
              </div>

              <div class="mailus">
                <strong class="fontwgh600 dark_color">Mail us</strong>
                <p class="m-0">
                  <a href="support@suvidhaagroup.com" class="d-block">support@suvidhaagroup.com</a>
                 
                </p>
              </div>

            </div>

          </div>


        </div>

      </div>

      <hr class="mt-4 mb-4">

      <div class="footer_bottom">
        <div class="row">
          <div class="col-md-4 order-md-2 logo_ftr text-end"><a href="#"><img src="images_2022/logo2.png" alt="img" height="40px" width="30px"></a></div>

          <div class="col-md-8 order-md-1"><span class="dark_color"> © Ruaanya Fintech Private Limited.</span> <a
              href="privacy-policy.php"  class="ms-2">Privacy Policy</a> &nbsp; <a href="terms-and-conditions.php">Terms &
              Conditions</a></div>

        </div>

      </div>

    </div>
    <!--end container -->
  </footer>
  <!--end footer-->
  <a href="#header" class="backtop"><i class="fa fa-angle-up"></i></a>
  <script src="js_2022/jquery.js" ></script>
  <script src="js_2022/lazysizes.min.js" async></script>
  <script src="js_2022/bootstrap.min.js"></script>
  <script src="js_2022/owl.carousel.min.js" async></script>
	
  <script src="js_2022/jquery.validate.min.js"></script>
  <script src="js_2022/wow.min.js" ></script>
  <script src="js_2022/custom.js"></script>
  <script src="../cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" ></script> 
  <script src="js_2022/count.js" async></script>
  <script>
    /*

     */
  
    function ezeeframe(div) {
      var iframe = document.createElement('iframe');
      iframe.setAttribute('src', 'https://www.youtube.com/embed/' + div.dataset.id + '?autoplay=1');
      iframe.setAttribute('frameborder', '0');
      iframe.setAttribute('allowfullscreen', '1');
      iframe.setAttribute('allow', 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture');
      div.parentNode.replaceChild(iframe, div);
    }
  
    function initYouTubeVideos() {
      var playerElements = document.querySelectorAll('.youtube-player');
      for (var n = 0; n < playerElements.length; n++) {
        var videoId = playerElements[n].dataset.id;
        var div = document.createElement('div');
        div.setAttribute('data-id', videoId);
        var thumbNode = document.createElement('img');
        thumbNode.src = '//i.ytimg.com/vi/ID/hqdefault.jpg'.replace('ID', videoId);
        div.appendChild(thumbNode);
        var playButton = document.createElement('div');
        playButton.setAttribute('class', 'play');
        div.appendChild(playButton);
        div.onclick = function () {
          ezeeframe(this);
        };
        playerElements[n].appendChild(div);
      }
    }
  
    document.addEventListener('DOMContentLoaded', initYouTubeVideos);
    $(document).ready(function() {
            $(".video img").attr("alt", "ezeepay video");
         });
  </script>
  <style>
    .youtube-player {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      max-width: 100%;
      background: #000;
      margin: 5px;
    }
  
    .youtube-player iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 100;
      background: transparent;
    }
  
    .youtube-player img {
      object-fit: cover;
      display: block;
      left: 0;
      bottom: 0;
      margin: auto;
      max-width: 100%;
      width: 100%;
      position: absolute;
      right: 0;
      top: 0;
      border: none;
      height: auto;
      cursor: pointer;
      -webkit-transition: 0.4s all;
      -moz-transition: 0.4s all;
      transition: 0.4s all;
    }
  
    .youtube-player img:hover {
      -webkit-filter: brightness(75%);
    }
  
    .youtube-player .play {
      height: 48px;
      width: 68px;
      left: 50%;
      top: 50%;
      margin-left: -34px;
      margin-top: -24px;
      position: absolute;
      background: url('../i.ibb.co/j3jcJKv/yt.png') no-repeat;
      cursor: pointer;
    }
  </style>
</body>

</html>