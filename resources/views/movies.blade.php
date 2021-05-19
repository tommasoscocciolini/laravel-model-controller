<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .container{
              width: 80%;
              margin: 0 auto;
              padding: 50px 0;
            }
            .flex-center{
              display: flex;
              justify-content: center;
              align-items: center;
            }
            .movie{
              width: 50%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height container">
          @foreach($movies as $movie)
          <div class="movie">
            <span>{{$movie->id}}</span>
            <span>{{$movie->title}}</span>
            <span>{{$movie->original_title}}</span>
            <span>{{$movie->nationality}}</span>
            <span>{{$movie->date}}</span>
            <span>{{$movie->vote}}</span>
          </div>
          @endforeach
        </div>
    </body>
</html>
