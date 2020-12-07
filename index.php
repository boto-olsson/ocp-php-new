<html>
 <head>
 <style>
 body {background-color: gray;}
h1   {color: white;}
p    {color: white;}
</style>
 <h1 style="font-size:300%;">This is the new application version</h1>
 </head>
 <body>
 <?php echo "<p> <font color=blue font face='arial' size='20pt'>'App Version: 30.0. Pod IP: '</font> </p>"; ?>
 <?php echo "<p> <font color=blue font face='arial' size='20pt'> $_SERVER['SERVER_ADDR']; '</font> </p>" ?>
 <?php echo ' PHP Version: ' . phpversion(); ?>
 </body>
</html>
