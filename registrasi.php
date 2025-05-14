<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #CEE0F4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background: #A7C1E1;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
}

label {
    font-weight: bold;
    display: block;
    text-align: left;
    margin: 5px 0;
}

input, select {
    width: 100%;
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 10px;
}

button {
    background-color: #2f486d;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
    width: 100%;
}

button:hover {
    background-color: #2f486d;
}

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
<form action="proses_registrasi.php" method="POST">
    <h2>Tambah Admin</h2>
    
    <label>ID:</label>
    <input type="text" name="id" required><br><br>
    
    <label>Nama:</label>
    <input type="text" name="nama" required><br><br>

    <label>Username:</label>
    <input type="text" name="username" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    
    <label>Level: </label>
    <select name="level">
        <option value="admin">Admin</option>
        <option value="member">Member</option>
    </select><br>

    <button type="submit">Tambah Admin</button><br><br>
</form>
</body>
</html>