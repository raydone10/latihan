<html>
<body>
<form method="POST" action="{{url('formhitung');}}">
      @csrf
    <input type="text" name ="panjang"placeholder="Isi Panjang"><br><br>
    <input type="text" name ="lebar"placeholder="Isi Panjang"><br><br>
    <input type="submit" value="proses">
</form>
</body>
</html>
