<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
    <form action="submit.php" method="POST"> 
        Firstname:<br> <input type="text" name="Firstname" value=""><br>
        Lastname:<br> <input type="text" name="Lastname" value=""><br>
        Gender: <br>
        <select name="Gender">
        <option selected disabled></option>
        <option>Male</option>
        <option>Female</option></select><br>
        Date:<br> <input type="Date" name="datepicker"><br>
        Short Biography: <br><textarea type="text" name="textarea"></textarea><br>
        Select checkbox: <input type="checkbox" name="checkbox"><br>
        <button type="Submit">Submit</button>
    </form>
</body>
</html>