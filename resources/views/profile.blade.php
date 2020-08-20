<center><h2> The User Profile Page : </h2>

<h2 style="color:red">Welcome : {{ session('data')['name']}}</h2>
<h2 style="color:blue">Your Email Is : {{ session('data')['email']}}</h2>
<h2 style="color:green">Your Password Is : {{ session('data')['password']}}</h2>

</center>

<a style="float: right" href="logout">Logout Session</a>