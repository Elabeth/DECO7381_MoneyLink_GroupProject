<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ action('RemindersController@postRemind') }}" method="POST">
    <input type="email" name="email">
    <input type="submit" value="Send Reminder">
</form>
</body>
</html>
