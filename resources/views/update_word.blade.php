<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kata</title>
</head>
<body>
    <h1>Update Kata</h1>
    <form action="/update-kata/{{ $kata->id }}" method="post">
        @csrf
        @method('PUT')
        <label for="word">Kata:</label>
        <input type="text" name="word" value="{{ $kata->word }}" required><br><br>

        <label for="hint1">Hint 1:</label>
        <input type="text" name="hint1" value="{{ $kata->hint1 }}" required><br><br>

        <label for="hint2">Hint 2:</label>
        <input type="text" name="hint2" value="{{ $kata->hint2 }}" required><br><br>

        <label for="hint3">Hint 3:</label>
        <input type="text" name="hint3" value="{{ $kata->hint3 }}" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
