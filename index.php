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
 <?php echo 'App Version: 20.0. Pod IP: '; ?>
 <?php echo $_SERVER['SERVER_ADDR']; ?>
 <?php echo ' PHP Version: ' . phpversion(); ?>
 </body>
</html>
