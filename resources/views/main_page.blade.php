<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITDle</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    @include('navbar')
    <p id="welcome" class="text-warning"><b>Welcome to ITDle, {{auth()->user()->name }}!</b></p>
    <p id="welcome" class="text-warning"><b>You Only Get 7 Guesses!</b></p>
    <br>
    <div id="ITdle">
        <form action="/guess_word" method="post">
        @csrf
        <div class="mx-auto" style="width: 250px;">
            <label for="guess"></label>
            <input type="text" id="guess" name="guess" class="form-control" placeholder="Enter your guess" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            <br>
            <button type="submit" id="guessButton" class="btn btn-outline-warning">Guess</button><br>
        </div>
        <br>
        <h5><b> <?php 
                    echo session('message');
            ?></b></h5>
            <h5><b>
                <?php 
                    use Illuminate\Support\Facades\DB;
                    $row = DB::table('stats')->orderBy('id', 'desc')->first();
                    $currentGuesses = $row->attempt;
                    if($currentGuesses >= 2){
                        echo session('h1');
                    }
                ?>
            </b></h5><br>
            <h5><b>
                <?php 
                    $row = DB::table('stats')->orderBy('id', 'desc')->first();
                    $currentGuesses = $row->attempt;
                    if($currentGuesses >= 4){
                        echo session('h2');
                    }
                ?>
            </b></h5><br>
            <h5><b>
                <?php 
                    $row = DB::table('stats')->orderBy('id', 'desc')->first();
                    $currentGuesses = $row->attempt;
                    if($currentGuesses >= 6){
                        echo session('h3');
                    }
                ?>
            </b></h5>
        </form>
    </div>
</body>