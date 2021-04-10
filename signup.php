
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
                        <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-700 text-uppercase sm-margin-ten-bottom">Signup</h5>
      <form action="#" id="user_signup" >

						

                            <div class="row">
                                <div class="col-12">
                                    <div id="success-project-contact-form" class="mx-0"></div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="name" id="name" placeholder="Name" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>   
   <div class="col-12 col-lg-6">
                                    <input type="number" name="phone" id="phone" placeholder="Phone" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>	
  <div class="col-12 col-lg-12">
                                    <input type="text" name="email" id="email" placeholder="E-mail" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>	

 <div class="col-12 col-lg-6">
                                    <input type="password" name="password" id="password" placeholder="Password" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>								
								
 <div class="col-12 col-lg-6">
                                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm password" class="bg-transparent border-color-medium-dark-gray medium-input">
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
    $('#user_signup').validate({
      rules: {
        name: {
          required: true
        },
		password: {
          required: true
        },
		confirmPassword: {
          required: true,
		  equalTo : "#password"

        },
		 phone: {
          required: true,
		  digits: true
        },
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        name: 'Please enter Name',
        phone: 'Please enter Number',
        password: 'Please enter Password',
        confirmPassword: 'Password doesnt match',
 
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        }
      },
      submitHandler: function (form) {
		Signupfunction();
      }
    });
  });
  
  
 
 function Signupfunction(){
		  var currentLocationValidation = "http://physiquemafia.in/server.php";
		  var user_name  = $("#name").val();
		  var user_phone  = $("#phone").val();
		  var user_email  = $("#user_email").val();
		  var user_password  = $("#user_confirmPassword").val();
		  var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = dd + '-' + mm + '-' + yyyy;

		  		  var user_token = "signup";

		  


        $.ajax({
            type: "POST",
            url: currentLocationValidation,
            dataType: "json",
            data: {user_token:user_token,user_name:user_name,user_email:user_email, user_phone:user_phone, user_password:user_password, today:today},
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
