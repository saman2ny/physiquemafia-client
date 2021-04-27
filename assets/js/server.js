




		function checkSign(whatPage){
					var getLogin = localStorage.getItem('login');
						console.log(getLogin, "getLogin");
												if(getLogin != null){
															window.location = 'http://physiquemafia.in/notfound.php';
												}else{
												if(whatPage === "signin"){
													// alert("signin");
													window.location = 'http://physiquemafia.in/signin.php';
													window.stop();

												}if(whatPage === "signup"){
													window.location = 'http://physiquemafia.in/signup.php';
													window.stop();

													
												}
															
												}
				}