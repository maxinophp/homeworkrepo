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
        <select name="Gender" id="Gender">
        <option>Male</option>
        <option>Female</option></select><br>
        Date:<br> <input type="text" id="datepicker" name="datepicker"><br>
        Short Biography: <br><textarea type="text" name="textarea"></textarea><br>
        Select checkbox: <input type="checkbox" name="checkbox"><br>
        <button type="Submit">Submit</button>
    </form>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
    </script>
    <script>
    $( function() {
        $( "#Gender" ).selectmenu();
    </script>
</body>
</html>