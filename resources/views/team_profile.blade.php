<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Profile</title>
    <link rel="stylesheet" href="{{ asset('css/profilestyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6sA2Jb9P3jzG5fmJlG9A6STW8SOlI4u6M5EjQ" crossorigin="anonymous"></script>
</head>
<body>
    @include('navbar')
    <p id="group"><b>Team Profile:</b></p>
    <div class="row">
        <div class="column">
          <div class="card">
            <img src="{{ asset('assets/blade.jpg') }}" alt="Hanan" style="width:100%">
            <div class="container">
              <h2>Hanandiya Putra</h2>
              <h2>1303213101</h2>
              <p class="title">Leader &amp; Front-End Developer</p>
              <p>Exceptionally proficient at Back-End Developer</p>
              <p>Currently learning Front-End Developer and Database</p>
              <p>hanandiyaputra@gmail.com</p>
              <p><button class="button"><a href="https://wa.me/6285772309193">Contact</a></button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="{{ asset('assets/kafka.jpg') }}" alt="Dechan" style="width:100%">
            <div class="container">
              <h2>Dechan Gamelio S.</h2>
              <h2>1303213097</h2>
              <p class="title">Back-End Developer</p>
              <p>Moderatly proficient at Back-End Developer</p>
              <p>Currently learning Front-End Developer and Cloud Computing</p>
              <p>gamelio27cirebon@gmail.com</p>
              <p><button class="button"><a href="https://wa.me/6281931266940">Contact</a></button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="{{ asset('assets/luocha.jpg') }}" alt="Dzikyan" style="width:100%">
            <div class="container">
              <h2>Muhammad Dzikyan</h2>
              <h2>1303210158</h2>
              <p class="title">Documentaion</p>
              <p>Proficient at MS Word, Excel, and Power Point</p>
              <p>Currently learning Front-End Developer and Back-End Developer</p>
              <p>dzikyann@gmail.com</p>
              <p><button class="button"><a href="https://wa.me/6289653746323">Contact</a></button></p>
            </div>
          </div>
        </div>

        <div class="column">
            <div class="card">
              <img src="{{ asset('assets/stelle.jpg') }}" alt="Kevin" style="width:100%">
              <div class="container">
                <h2>Kevin Yoel B.</h2>
                <h2>1303210087</h2>
                <p class="title">Database</p>
                <p>Proficient at MySQL, Arduino, and Canva</p>
                <p>Currently learning Front-End Developer and Back-End Developer</p>
                <p>kkevinganteng070@gmail.com</p>
                <p><button class="button"><a href="https://wa.me/628112405775">Contact</a></button></p>
              </div>
            </div>
          </div>
      </div>  
</body>
</html>
