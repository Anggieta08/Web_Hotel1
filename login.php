<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        /* Reset some basic styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #CEE0F4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Container for the form */
.test {
    background-color: #A7C1E1;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

/* Title styles */
h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

/* Label Styles */
label {
    font-size: 14px;
    color: black;
    text-align: left;
    display: block;
    margin-bottom: 5px;
}

/* Input Styles */
input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

/* Button Styles */
button {
    width: 100%;
    padding: 12px;
    background-color: #2f486d;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #2f486d;
}

/* Back button Styles */
.back-button {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px;
}

.back-button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <a href="beranda.php" class="back-button">⬅ Kembali ke Beranda</a>
    <div class="test">
    <h2>Login Admin</h2>
    <form action="proses_login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</div>
</body>

</html>