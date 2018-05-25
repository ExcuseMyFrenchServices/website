<div>
	<h3>{{ ucfirst($name) }} {{ ucfirst($famillyName) }} send an job application !</h3>
	<div>
		<h4>Informations about the client :</h4>
		<ul>
			<li>Phone Number : {{ $tel }}</li>
			<li>Email : {{ $email }}</li>
			<li>CV : {{ echo  $mail->embed($cv) }}</li>
		</ul>
	</div>
</div>