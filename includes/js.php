 <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/js/modernizr.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/js/skrollr.min.js"></script>
        <script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
        <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="assets/js/bootsnav.js"></script>
        <script type="text/javascript" src="assets/js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="assets/js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="assets/js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="assets/js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="assets/js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="assets/js/classie.js"></script>
        <script type="text/javascript" src="assets/js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="assets/js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="assets/js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="assets/js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="assets/js/jquery.easypiechart.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="assets/js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/assets/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/assets/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/assets/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/assets/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/assets/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/assets/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="assets/js/main.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="http://openexchangerates.github.io/money.js/money.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>




		<script>
		
		   
				
		$(document).ready(function(){
										  console.log("its its");

									  var getCurrency = localStorage.getItem('currrency');
												  console.log(getCurrency, "1");

									 loadHide(getCurrency);

var getCurrencyFinal = JSON.parse(getCurrency);
$("select#currency").val(getCurrencyFinal);

				
				
    $('#currency').change(function(){
				  var currrencyTrail  = $("#currency").val();
		var currrency  = JSON.stringify(currrencyTrail);

    		  localStorage.setItem('currrency', currrency);
			  var getCurrencyFinal = localStorage.getItem('currrency');
			  												  // console.log(getCurrency, "2");


			  loadHide(getCurrencyFinal);

    });
});

function loadHide(finale){
		// $(".INRValue").hide();
		// $(".USDValue").hide();
		// $(".EURValue").hide();
		// $(".JYPValue").hide();

 if(JSON.parse(finale) === "INR"){
	 

			$(".INRValue").show();
			$(".USDValue").hide();
			$(".EURValue").hide();
			$(".JYPValue").hide();
 }
 if(JSON.parse(finale) === "USD"){

			$(".USDValue").show();
			$(".INRValue").hide();
			$(".EURValue").hide();
			$(".JYPValue").hide();
 }
 if(JSON.parse(finale) === "EUR"){
			$(".USDValue").hide();
			$(".INRValue").hide();
			$(".EURValue").show();
			$(".JYPValue").hide();

 }
  if(JSON.parse(finale) === "JYP"){
			$(".USDValue").hide();
			$(".INRValue").hide();
			$(".EURValue").hide();
			$(".JYPValue").show();

 }
 
		// $(".JYPValue").show();
 // }
									  



}
		</script>