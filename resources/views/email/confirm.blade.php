<div>
	<h3>Thank you {{ ucfirst($name) }} for booking with us</h3>
	<div>
		<h4>Here is your booking informations :</h4>
		<ul>
			<li>Phone Number : {{ $tel }}</li>
			<li>Email : {{ $email }}</li>
			<li>Date : {{ $date }}</li>
			<li>Location : {{ $location }}</li>
			<li>Service Desired : {{ $service }}</li>
		</ul>
		<p>
			We will contact you shortly and help you organize your event based on your informations. Please do not hesitate to contact us in case these informations are wrong or if you need to update them.
		</p>
		<p>Best Regards</p>
		<p>Excuse My French Team</p>
	</div>
</div>