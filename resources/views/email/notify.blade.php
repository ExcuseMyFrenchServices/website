<div>
	<h3>{{ ucfirst($name) }} booked a event !</h3>
	<div>
		<h4>Informations about the client :</h4>
		<ul>
			<li>Phone Number : {{ $tel }}</li>
			<li>Email : {{ $email }}</li>
			<li>Date : {{ $date }}</li>
			<li>Location : {{ $location }}</li>
			<li>Service Desired : {{ $service }}</li>
		</ul>
	</div>
</div>