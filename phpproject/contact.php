<?php

include 'header.php';
?> 

<div class="container mt-5">
	<div class="row">
		<div class="col-6 p-5 mt-5" style="background-color: orange;">
				<h3>
					Get in touch
				</h3>
                <div class="footer_about_text pt-2">
                 <p>
                   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                 </p>
                </div>
                <div>
                  <i class="fas fa-phone-volume fa-phone"></i>
                    <span style="color: black;">+000 00000 000</span>
                </div>
                <div class="mt-2">
                  <i class="far fa-envelope fa-envelop-custom"></i>
                  <span style="color: black;padding-left: 4px;">info@shopposite.com</span>
                </div>
                <div class="mt-2">
                  <i class="fas fa-map-marker-alt fa-map-custom"></i>
                  <span style="color: black;padding-left: 4px;">Main Str. no 45-46, b3</span>
                </div>
			
		</div>
		<div class="col-6">
			<form action="rough.php" method="POST" >
					<div class="container mt-5">
						<div class="row" >			
								<div class="col-md-6 pt-3">
										<div class="form-group">
											
											<input class="form-control" type="text" name="username" required="" placeholder="Name">
										</div>
								</div>
								<div class="col-md-6 pt-3">
									<div class="form-group">
										
										<input class="form-control" type="password" name="Email" required="" placeholder="E-mail">
									</div>
								</div>
					
						</div>
						<div class="form-group">
							
								<input class="form-control" type="text" name="subject" required="" placeholder="Subject">
						</div>
						<div class="form-group">
							
								<textarea name="message" rows="5" cols="5" placeholder="Message" class="form-control" required=""></textarea>
						</div>
						<div class="form-group">
								<input type="submit" name="Submit" value="Signup" class="btn  btn-block custom-button btn-lg ">
						</div>
								
			</div>								
			
		</div>
		
	</div>
</div>

<!--Google MAp-->

<div class="container mt-5">
	
		<img src="images/map.jpg" width="100%">

</div>
<?php 
include 'footer.php';
?>