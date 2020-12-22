
  <!-- start: footer area -->
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
          <div class="footer-column one">
            <div class="footer-column-items">
              <h4 class="footer-item-title">Visffor</h4>
              <ul class="footer-links d-flex flex-wrap">
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Why us</a></li>
                <li><a href="#">Tutoring Jobs</a></li>
                <li><a href="#">Head Teacher</a></li>
              </ul>
            </div>
            <div class="footer-column-items">
              <h4 class="footer-item-title">Subject</h4>
              <ul class="footer-links d-flex flex-wrap">
                <li><a href="#">Math</a></li>
                <li><a href="#">English</a></li>
                <li><a href="#">Science</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
          <div class="footer-column two">
            <div class="footer-column-items">
              <h4 class="footer-item-title">Student</h4>
              <ul class="footer-links d-flex flex-wrap">
                <li><a href="<?=base_url();?>signup">Sign up</a></li>
                <li><a href="<?=base_url();?>find-tutor">Find Teacher</a></li>
                <li><a href="#">Explore course</a></li>
                <li><a href="<?=base_url();?>book-lesson">Book a lesson</a></li>
              </ul>
            </div>
            <div class="footer-column-items">
              <h4 class="footer-item-title">Tutor</h4>
              <ul class="footer-links d-flex flex-wrap">
                <li><a href="<?=base_url();?>find-student">Find Student</a></li>
                <li><a href="#">Send offer page</a></li>
                <li><a href="<?=base_url();?>become-tutor">Become a tutor</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
          <div class="footer-column three">
            <div class="footer-column-items">
              <h4 class="footer-item-title">Location</h4>
              <div class="location">
                <h6 class="footer-item-subtitle">United Kingdom</h6>
                <p class="address">
                  City Point, 1 Solly Street, Sheffield, S1 4BX. 
                  <span class="phone">TEL:(+44)07455962168</span>
                </p>
              </div>
              <div class="location">
                <h6 class="footer-item-subtitle">China</h6>
                <p class="address">
                  007-47-25 Yuetan South Street, Xicheng, Beijing. 100032.
                  <span class="phone">Landline: (+86)-010-57173657</span>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-xl-4">
          <div class="footer-column four">
            <div class="footer-column-items">
              <h4 class="footer-item-title">Subscribe us now</h4>
              <div class="subscription">
                <p class="subscrip-text text-white">
                  Sign up with your email address to receive news and updates
                </p>
                <form action="" class="subscription-form" id="myForm">
                  <input type="email" name="email" id="email" placeholder="Enter your email address" id="email" class="cleartext">
                  <input type="submit" class="submit-btn text-uppercase" id="btnsave" value="Subscribe" name="submit">
                </form>
              </div>
            </div>

            <div class="footer-column-items">
              <h4 class="footer-item-title">Connect with us</h4>
              <ul class="social-links d-flex">
                <li>
                  <a href="https://www.facebook.com/" target="_blank" class="social-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="https://twitter.com/" target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" target="_blank" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/" target="_blank" class="social-link"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>                        
          </div>
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-xl-2">
          <div class="footer-column five">
            <div class="footer-column-items">
              <h4 class="footer-item-title">Get visffor app</h4>
              <p class="app-text text-white">
                Download our app from ISO or Android free cost
              </p>
              <div class="footer-app-logos">
                <a href="#">
                  <img src="assets/img/iconic-appstore.png" alt="appstore-logo">
                </a>
                <a href="#">
                  <img src="assets/img/icoinc-playstore.png" alt="playstore-logo">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- start: copyright -->
      <div class="row mt-3 mt-lg-5">
        <div class="col-12">
          <div class="copyright text-capitalize text-white">
            Copyright &#169; 2020 EduVisffor. All rights reserved. <a href="#" class="policy-link">Privacy policy</a>
          </div>
        </div>
      </div>
      <!-- end: copyright -->
    </div>
  </footer>
  <!-- end: footer area -->
  
  
  
  <!-- scroll to top button -->
  <button type="button" id="scrollTop"><i class="fas fa-chevron-up"></i></button>
  
  
  
  
  
    <!--vendor js-->
    <script src="<?=base_url();?>assets/js/vendor.js"></script>
    <!--custom js-->
    <script src="<?=base_url();?>assets/js/main.js"></script>

    <script type="text/javascript">
      $("#myForm").submit(function(event){
       event.preventDefault();
       var formData = new FormData();
           var contact = $(this).serializeArray();

               $.each(contact, function (key, input) {
                   formData.append(input.name, input.value);
               });

               $.ajax({
                       type:'POST',
                       url:"<?php echo base_url(); ?>home/subscribe_email",
                       data: formData,
                       cache: false,
                       contentType: false,
                       processData: false,
                       dataType: 'JSON',
                       success:function(data){
                         if(data.success)
                         {
                             $(".cleartext").val("");
                         }

                           alert (data.message);
                     //      window.location.href ="file_name_list.php";
                 }
               });

         });
    </script>
    <script type="text/javascript">

   $('.ChangeGroups').on('change', function() {
       document.forms['submitforms'].submit();
    });
</script>
</body>
</html>