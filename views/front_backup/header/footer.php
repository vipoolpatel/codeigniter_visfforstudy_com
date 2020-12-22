


<footer class="pr-3 pl-3">
  <div class="col-lg-8 col-xs-6 col-sm-6 address-footer d-inline-block">
    <address>United Kingdom:City Point, 1 Solly Street, Sheffield, S1 4 BX. TEL:(+44)07455962168
China: 007-47-25 Yuetan South Street,Xicheng,Beijing. 100032 Landline:(+86)-010-57173657
</address>
<p>Copyright © 2020 EduVisffor. All Rights Reserved. | Privacy Policy</p>
  </div>
  <div class="col-lg-4 col-xs-6 col-sm-6 subscribe-footer d-inline-block float-right">
    <span><?=get_phrase('sign_up_with_your_email_address_to_receice_news_and_updates')?></span>
    
        <form action="" method="post" id="myForm">
         <div class="input-group mt-4">
         <input type="email" class="form-control cleartext" id="email" name="email" placeholder="Enter your email">
         <span class="input-group-btn sub-btn">
         <button class="btn btn-theme" name="submit" id="btnsave" type="submit"><?=get_phrase('subscribe')?></button>
         </span>
          </div>
        </form>

          <div class="mb-3 mt-2">
          <a href="#" ><img src="<?=base_url()?>assets/assets/android.png"></a>
          <a href="#"><img src="<?=base_url()?>assets/assets/apple-xxl.png"></a>
          </div>
          <a href="#"><img src="<?=base_url()?>assets/assets/social-facebook-circular-button.png"></a>
          <a href="#" class="mr-1 ml-1"><img src="<?=base_url()?>assets/assets/social-twitter-circular-button.png"></a>
          <a href="#"><img src="<?=base_url()?>assets/assets/Group 66.png"></a>

  </div>
</footer>
    <script src="<?=base_url();?>assets/auth/student_register/js/jquery-3.3.1.min.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?=base_url()?>assets/js/common.js"></script>
<script type="text/javascript">

   $('.ChangeGroups').on('change', function() {
       document.forms['submitforms'].submit();
    });
</script>
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
