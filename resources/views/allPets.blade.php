<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  ALL PETS
  <ul>
    @foreach ($list as $pet)
      <li>
        <h3>
          {{ $pet->name }}
        </h3>
        -
        <span>
          Age: {{ $pet->age }}
        </span>
        -
        <span>
          Food: {{ $pet->food }}
        </span>
      </li>
    @endforeach
  </ul>
</body>
</html>