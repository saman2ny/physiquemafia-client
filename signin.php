
<!doctype html>
<html class="no-js" lang="en">
    <head>
  
			<?php include 'includes/meta.php';?>

			<?php include 'includes/css.php';?>

    </head>
    <body class="width-100">
        <!-- start header -->
       		<?php include 'includes/header.php';?>
        <!-- end header -->

    
		
		

		
		   <!-- start contact form -->
        <section id="contact" class="wow fadeIn p-0 bg-extra-dark-gray" style="margin-top: 100px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 cover-background md-height-450px sm-height-350px wow fadeIn" style="background: url(assets/img/web-photos/c2.JPG)"></div>
                    <div class="col-12 col-lg-6 text-center padding-six-lr padding-five-half-tb md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow fadeIn">
                        <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-700 text-uppercase sm-margin-ten-bottom">Login</h5>
      <form action="#" id="user_signin" >

						

                            <div class="row">
                                <div class="col-12">
                                    <div id="success-project-contact-form" class="mx-0"></div>
                                </div>
      	
  <div class="col-12 col-lg-12">
                                    <input type="text" name="name" id="name" placeholder="E-mail or username or phone number" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>	


								
 <div class="col-12 col-lg-12">
                                    <input type="password" name="password" id="password" placeholder="Password" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>	
								
                                <div class="col-12 text-center">
                                    <button  type="submit" id="submit" class="btn btn-deep-pink btn-medium margin-15px-top">submit</button>
                                </div>
                            </div>
                    </div>
					</form>
                </div>
            </div>
        </section>
        <!-- end contact form -->
		
		
		
			<!-- quick contact start -->
				       		<?php include 'includes/quickcontact.php';?>

		<!-- quick contact end -->
		
        <!-- start footer --> 
		       		<?php include 'includes/footer.php';?>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
				       		<?php include 'includes/js.php';?>

<script>



 $(document).ready(function () {
    $('#user_signin').validate({
      rules: {
        name: {
          required: true
        },
		password: {
          required: true
        }
	
      },
      messages: {
        name: 'Please enter Username',
        password: 'Please enter Password',
      },
      submitHandler: function (form) {
		Signinfunction();
      }
    });
  });
  
  
 
 function Signinfunction(){
		  var currentLocationValidation = "http://physiquemafia.in/server.php";
		  var user_name  = $("#name").val();
		  var user_phone  = $("#phone").val();
		  var user_email  = $("#user_email").val();
		  var user_password  = $("#user_confirmPassword").val();
		  var user_token = "signin";


        $.ajax({
            type: "POST",
            url: currentLocationValidation,
            dataType: "json",
            data: {user_token:user_token, user_name:user_name,user_email:user_email, user_phone:user_phone, user_password:user_password},
            success : function(data){
                if (data.code == "200"){
						$("#loading-wrap").hide();
						toastr.success(data.msg);
						localStorage.clear();
						redirect();



                } else {
						$("#loading-wrap").hide();
						toastr.error(data.msg);
						localStorage.clear();
					

                }
            }
        });
									// $("#loading-wrap").hide();


  }
  
  
  	function redirect(){
								setTimeout(
								function(){
					window.location.href = "http://physiquemafia.in/";
								}, 2000);
	}
  
  </script>
       
    </body>
</html>
