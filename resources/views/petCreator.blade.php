<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>
    PET CREATOR
  </h1>
  <form method="post" action="/pets">
    {{ csrf_field() }}
    Name: <input type="text" placeholder="Name" name="name">
    Food: <input type="text" placeholder="Food" name="food">
    Age: <input type="number" placeholder="Age" name="age">
    <button type="submit">Submit</button>
  </form>
</body>
</html>