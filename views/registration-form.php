<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="/register">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name"><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
