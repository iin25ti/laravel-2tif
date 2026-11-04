<form action="/submit-data" method="POST" style="margin-top: 20px;">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Submit</button>
</form>