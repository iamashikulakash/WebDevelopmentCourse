<!DOCKTYPE HTML>
<html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title></title>
        </head>

    <body>
    <?php
echo 'Hello World!<br>';
echo 'This is my first php proggram!☺<br>';
echo 'You can perform Addition, Subtraction, Multiplication, Divition<br>';
?>

<form action="functions.php" method="get">
    <input type="text" name="num01" placeholder="First Number">
    <select name="oper">
<label>Choose operation!</label>
    <option value="add">Add</option>
    <option value="sub">Sub</option>
    <option value="multiply">Multiply</option>
    <option value="divide">Divide</option>
</select>
<input type="text" name="num02" placeholder="Second Number">
<button type="submit">Calculate</button>



</form>

    </body>



</html>

