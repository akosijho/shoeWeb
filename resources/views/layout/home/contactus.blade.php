<section class="sectionsT" id="contact" >
	<div class="contitleT">
		<h1 class="titleT">Contact Us</h1>
	</div>
	
	<div class="containersT">
		
	<div class="cardT">

		<div class="formT">
			<form action="contactus" method="post">
				@csrf
			<div class="emailT">
				<input type="email" name="email" placeholder="Email address" required/>
			</div>
			<div class="textT">
				<input type="text" name="name" placeholder="Full Name" required/>
			</div>
			<div class="textareaT">
				<textarea name="message" placeholder="Message" required></textarea>
			</div>
			<div class="SubmitT">
				<button type="submit" name="" value="Submit">Submit</button>
			</div>
			</form>
			
		</div>
	</div>

	
	<div class="cardT">
		<div class="card-imageT">
			<div class="MapsT">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.48130213915!2d77.06889602222955!3d28.52728034013322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi%2C%20India!5e0!3m2!1sen!2sph!4v1658285033149!5m2!1sen!2sph" 
				width="533px" height="395px" style="border:0;" allowfullscreen="" loading="lazy" 
				referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
		
		
	</div>

	
	</div>
</section>