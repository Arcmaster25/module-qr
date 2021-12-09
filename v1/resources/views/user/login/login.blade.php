<h1>Login</h1>
<form action="/login" method="POST">
    @csrf
		<fieldset>
      <label for="name">User</label>
      <input type="text" name="name" id="name" minlenght="8" maxlenght="20" required>
    </fieldset>
		<fieldset>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" minlenght="8" maxlenght="20" required>
    </fieldset>
		<button type="submit">Login</button>
</form>