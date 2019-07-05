<!DOCTYPE html>
<html>
<head></head>
<body>
{{ json_decode($User['email']) }}
<h1>Hello View</h1>
{{ $User['data'] }}
<br/>
<br/>
<form method="POST" action="/process">
    <input type="hidden" name="csrf_name" value="{{ $User['name'] }}">
    <input type="hidden" name="csrf_value" value="{{ $User['value'] }}">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" value="Go">
</form>
{{ dd($User['db']) }}
</body>
</html>
