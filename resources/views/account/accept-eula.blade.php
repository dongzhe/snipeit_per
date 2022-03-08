<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    @if ($signature)
        <center>
            <img src="{{ $logo }}">
        </center>
    @endif
    <br>
    
    <h2>{{ $item->name }}</h2>
    
    @if ($eula)
        {!!  $eula !!}
    @endif

    <br><br>
    @if ($signature)
    <center>
        <img src="{{ $signature }}">
    </center>
    @endif
  </body>
</html>