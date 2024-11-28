<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Accessors and mutators</title>
</head>

<body>
  <form action="{{ route('user.store') }}" method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <input type="email" name="email" id="email" placeholder="Enter your Email">
    <input type="password" name="password" id="password" placeholder="Enter your password">
    <input type="submit" value="Submit">
  </form>

  @forelse ($users as $user)
    {{ $user->name }} - {{ $user->email }} <br>
  @empty
    {{ 'Nothing to show' }}
  @endforelse
</body>

</html>
