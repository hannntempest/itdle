<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credits</title>
    <link rel="stylesheet" href="{{ asset('css/creditsstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6sA2Jb9P3jzG5fmJlG9A6STW8SOlI4u6M5EjQ" crossorigin="anonymous"></script>
</head>
<body>
    @include('navbar')
    <p id="group"><b>Credits</b></p>
    <ul>
        <li>Taking inspiration from <a href="https://wordlegame.org/">Wordle</a></li>
        <li>Some of the source codes come from <a href="https://github.com/ImKennyYip/Wordle">Kenny Yip's Github</a></li>
        <li>Also from <a href="https://youtu.be/ckjRsPaWHX8?si=vfy35PVcBSLkwe7d">Kenny Yip's Youtube</a></li>
    </ul>
</body>
</html>