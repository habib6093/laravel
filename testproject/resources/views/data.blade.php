<!DOCTYPE html>
<html>
<head>
	<title>Habibs page</title>
</head>
<body>
     <h1 align="center">Hey <?= $name ?> Welcome to the world</h1>
     <h2 align="center">value is: <?= $data ?></h2>
     
     <ul>

     @foreach ($list as $key) 
      	<li align="center">Name: {{ $key->user_name}} Task:{{$key->task_name}}</li>
     @endforeach

      </ul>
     
</body>
</html>