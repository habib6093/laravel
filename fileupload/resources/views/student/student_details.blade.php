<ul>                              
 @foreach ($students as $value)     
   <li>name is: {{ $value['name'] }} age is: {{ $value['age'] }}</li>
 @endforeach
</ul>