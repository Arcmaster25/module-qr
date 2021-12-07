<html>
    <head>
			<meta charset="UTF-8"/>
			<meta name="description" content="App for management user system"/>
			<meta name="keywords" content="User Manager, Qr User, Module Qr"/>
			<title>App Name - @yield('title')</title>
		</head>
		<body>

			<nav>
				<button type="button">Menu</button>
				<a href="/home">App Name</a>
				<a href="/profile">Profile</a>
				<a href="/logout">Logout</a>
			</nav>

			<nav>
				<ul>
					<li>
						<a href="/qr">Qr</a>
					</li>
					<li>
						<a href="/users">Users</a>
					</li>
					<li>
						<a href="/clients">Clients</a>
					</li>
				</ul>
			</nav>

			<main>
				@section('main')
				@show
			</main>

		</body>
</html>