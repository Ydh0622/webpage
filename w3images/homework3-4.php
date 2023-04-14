<html>
<body>

homework3-4 <br>
triangle = <?php echo $_POST["width"]*$_POST["height"]/(2);
?><br>
Rectangle = <?php echo $_POST["width"]*$_POST["height"];
?><br>  
circle = <?php echo $_POST["pi"]*$_POST["radius"]**(2);
?><br>
cuboid = <?php echo $_POST["width"]*$_POST["length"]*$_POST["height"];
?><br>
cylinder = <?php echo $_POST["pi"]*$_POST["radius"]**(2)*$_POST["height"];
?><br>
globe = <?php echo (4/3)/$_POST["pi"]*$_POST["radius"]**(3);
?><br>
</body>
</html> 