<form action="login" method="post">@csrf
	<input type="text" name="name" placeholder="Enter Name" required>
	<input type="email" name="email" placeholder="Enter Email" required>
	<input type="password" name="password" placeholder="Enter Password" required>
	<button type="submit">Login</button>
</form>