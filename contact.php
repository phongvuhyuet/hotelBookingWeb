<?php include 'header.php';?>
<div class="container">

<h1 class="title">Contact</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">
		   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14895.728950522154!2d105.77649592584201!3d21.035397175914692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4a5e274ded%3A0x27fa4d31a0cef9a9!2zROG7i2NoIFbhu41uZyBI4bqtdSwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1617744883493!5m2!1svi!2s" width="100%" height="300" frameborder="0"></iframe>			
       	


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		
			<h5 class="sent-not"></h5>
       		<h4>Write to us</h4>
			<form id="myForm" method="POST" role="form" action="contact-handle.php">
			<div class="form-group">	
			<input type="text" class="form-control" id="name" placeholder="Name">
			</div>
			<div class="form-group">
			<input type="email" class="form-control" id="email" placeholder="Enter email">
			</div>
			<div class="form-group">
			<input type="subject" class="form-control" id="subject" placeholder="Phone">
			</div>
			<div class="form-group">
			<textarea type="email" id="body" class="form-control"  placeholder="Message" rows="4"></textarea>
			</div>
					
			<button type="submit" class="btn btn-default">Send</button>
			</form>
			</div>
			<script> src="https://code.jquery.com/jquery-3.4.1.min.js"  </script>

			<script type="text/javascript">
				function sendEmail() {
					var name = $("#name");
					var email = $("#email");
					var subject = $("#subject");

					if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(phone) && isNotEmpty(body)) {
						$.ajax({
							url: 'sendEmail.php',
							methode: 'POST',
							dataType: 'json',
							data:{
								name: name.val(),
								email: email.val(),
								subject: subject.val(),
								body: body.val()
							}, success: function(response) {
								$('myForm')[0].reset();
								$('sent-not').text("Sent successfully")
							}
						});
					}
				}
				function isNotEmpty(caller) {
					if (caller.val()=="") {
						caller.css('boder','1px solid red');
						return false;
					}
					else {
						caller.css('boder', '');
						return true;
					}
				}
			</script>
       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>