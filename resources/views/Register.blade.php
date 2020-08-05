<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form action="register/welcome" method="post">
        @csrf
        <label>First Name:</label><br>
        <input type="text" name="firstname" id=""><br><br>

        <label>Last Name:</label><br>
        <input type="text" name="lastname" id=""><br><br>

        <label>Gender</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label>
        <select id="nationality" name="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="singapura">Singapura</option>
            <option value="arab">Arab</option>
            <option value="japan">Japan</option>
        </select><br><br>

        <label for="">Languange Spoken</label><br>
        <input type="checkbox" id="indonesia" name="bahasa" value="indonesia">
        <label for="indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="bahasa" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" id="arabic" name="bahasa" value="arabic">
        <label for="arabic">Arabic</label><br>
        <input type="checkbox" id="japanese" name="bahasa" value="japanese">
        <label for="japanese">Japanese</label><br><br>

        <label for="message">Bio:</label><br>
        <textarea name="message" rows="10" cols="30"></textarea>
        <br><br>
        <input type="submit">
    </form>
</body>

</html>
