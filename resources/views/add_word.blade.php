<!-- resources/views/tambah-pegawai.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kata</title>
</head>
<body>
    <h1>Tambah Kata</h1>
    <form action="" method="post">
        @csrf
        <label for="word">Word:</label>
        <input type="text" name="word" required><br><br>

        <label for="hint1">Hint 1:</label>
        <input type="text" name="hint1" required><br><br>

        <label for="hint2">Hint 2:</label>
        <input type="text" name="hint2" required><br><br>

        <label for="hint3">Hint 3:</label>
        <input type="text" name="hint3" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
