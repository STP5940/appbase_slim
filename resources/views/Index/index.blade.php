<!DOCTYPE html>
<html>
<head></head>
<body>
{{ json_decode($User['email']) }}
<h1>Hello View</h1>
{{ $User['data'] }}
<br/>
{{ dd($User['db']) }}
</body>
</html>
