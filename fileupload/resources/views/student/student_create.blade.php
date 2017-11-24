<form Method="POST" action="create">
  {{ csrf_field() }}
  <input type="text" name="name"><br><br>
  <input type="text" name="varsity_id"><br><br>
  <input type="email" name="email"><br><br>
  <input type="password" name="password"><br><br>
  
  <input type="submit" value="create new student">

</form>