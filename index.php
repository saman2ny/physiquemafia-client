
<!doctype html>
<html class="no-js" lang="en">
    <head>
  
			<?php include 'includes/meta.php';?>

			<?php include 'includes/css.php';?>

    </head>
    <body class="width-100" >
        <!-- start header -->
       		<?php include 'includes/header.php';?>
        <!-- end header -->

        <!-- start hero section -->
        <section class="wow fadeIn p-0 mobile-height parallax" data-stellar-background-ratio="0.5" style="background-image: url('assets/img/homepage-option18-banner.jpg')">
            <div class="container text-center one-third-screen lg-height-350px md-height-500px sm-height-auto sm-padding-40px-top sm-padding-50px-bottom">
                <div class="row">
                    <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center one-third-screen lg-height-350px md-height-500px sm-height-auto text-center wow bounceInLeft sm-height-auto sm-margin-30px-bottom">
                        <img alt="" src="assets/img/web-photos/abt1.png" style="max-width: 75%;">
                    </div>
                    <div class="col-12 col-md-9 d-flex flex-column align-items-center justify-content-center one-third-screen lg-height-350px md-height-500px sm-height-auto text-center wow bounceInRight sm-height-auto">
                        <div class="font-weight-300 alt-font title-large text-extra-dark-gray d-inline-block align-bottom mx-auto">I'm <span class="font-weight-600 text-bold-underline position-relative">Jagadeesh</span></div>
                        <div class="text-medium-gray text-small text-uppercase margin-40px-top letter-spacing-2 alt-font sm-margin-10px-top">International mens physique athelete, lifestyle and fitness coach</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		 <!-- start instagram style 01 section --> 
        <section class="wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden w-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Instagram Page </span>
                        </div>
                    </div>
                </div>
                <!-- start instagram images --> 
                <div class="row" id="instaFeed-style1"></div>
                <!-- end instagram images --> 
            </div>
        </section>
        <!-- end instagram style 01 section -->
		
		
		
		
		
		
	
		
		  <div class="modal fade" id="myModal" >
      <div class="modal-dialog modal-md modal-dialog-centered" role="document" >
            <div class="modal-content">
              
				
                <div class="modal-body" style="background: url(assets/img/web-photos/modal-header.jpg)">
                            <p class="margin-four text-center">We are on a planet of seven billion people, five billion mobile subscriptions.</p>

    <div class="alert alert-danger display-error" style="display: none"></div>
    <div class="alert alert-success display-success" style="display: none"></div>



					      <div class="col-12 col-lg-12">
                                    <div class="select-style bg-transparent border-color-medium-dark-gray medium-select">

								<select name="currency" id="currency" class="bg-transparent mb-0">
										<option value="INR">₹	INR</option>
										<option value="USD">$	USD</option>
										<option value="EUR">€	EUR</option>
										<option value="JYP">¥	JYP</option>
								</select>

                                </div>
                                </div>
								
					      <div class="col-12 col-lg-12">
                                    <input type="text" name="email" id="email" required placeholder="Email" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div> 
													      <div class="col-12 col-lg-12 text-center">

							                            <a class="btn btn-medium btn-rounded btn-dark-gray popup-modal-dismiss" type="submit" id="submit" >Submit</a>
														                                </div> 


                </div>
               
            </div>
      </div>
</div>
		
		
		
		

        <!-- start modal pop-up section -->
      <!-- start modal pop-up -->
                        <div id="modal-popup2" class="zoom-anim-dialog mfp-hide col-xl-3 col-lg-6 col-md-7 col-11 mx-auto bg-white text-center modal-popup-main padding-50px-all">
                            <span class="text-extra-dark-gray text-uppercase alt-font text-extra-large font-weight-600 margin-15px-bottom d-block">Modal dialog</span>
                            <p class="margin-four">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <a class="btn btn-medium btn-rounded btn-dark-gray popup-modal-dismiss" href="#">Dismiss</a>
                        </div>
                        <!-- end modal pop-up -->  
        <!-- end modal pop-up section -->
		
		
		
		<!-- quick contact start -->
				       		<?php include 'includes/quickcontact.php';?>

		<!-- quick contact end -->
		
        <!-- end portfolio section -->
        <!-- start footer --> 
		       		<?php include 'includes/footer.php';?>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
				       		<?php include 'includes/js.php';?>


       
	   
	   <script type="text/javascript">
  $(document).ready(function() {


      $('#submit').click(function(e){
		  var currrencyTrail  = $("#currency").val();
		var currrency  = JSON.stringify(currrencyTrail);
		  localStorage.setItem('currrency', currrency);

		  var currentLocationValidation = window.location.href + "formProcess";
		  console.log(currentLocationValidation, "currentLocationValidation");
		  
	

        e.preventDefault();

        var email = $("#email").val();


        $.ajax({
            type: "POST",
            url: currentLocationValidation,
            dataType: "json",
            data: {email:email},
            success : function(data){
                if (data.code == "200"){
					sendMail(email)
						// $(".display-success").html("Email Sent Successfully");
						// $(".display-success").css("display","block");
						// $('#myModal').modal('hide');
						// $.cookie('pop', '1');


                } else {
                    $(".display-error").html("<ul>"+data.msg+"</ul>");
                    $(".display-error").css("display","block");
                }
            }
        });


      });
  });
  
  				function sendMail(email){
						  
		  var currentLocationSendMail = window.location.href + "sendMail";
		  console.log(currentLocationSendMail, "currentLocationSendMail")
		  console.log(email, "email")
		  

					        $.ajax({
            type: "POST",
            url: currentLocationSendMail,
            dataType: "json",
            data: {email:email},
            success : function(mail){
				console.log(mail, "data");
                if (mail.code == "200"){
					// sendMail()
						$(".display-success").html("Email Sent Successfully");
						$(".display-success").css("display","block");
						$('#myModal').modal('hide');
						$.cookie('pop', '1');


                } else {
                    $(".display-error").html("<ul>"+mail.msg+"</ul>");
                    $(".display-error").css("display","block");
                }
            },
			
        error: function (textStatus, errorThrown) {
			console.log(textStatus, "textStatus")
			console.log(errorThrown, "errorThrown")

        }
        });
		
					}
</script>

    </body>
</html>

