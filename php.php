<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type=text/css></style>
</head>

<body>
    <?php




  

    ?>
    <script>

        var s = "I Love Palestine";
        var x = "Jerusalem is the capital of Palestine";
        var n1 = s.match("Love");
        var n2 = x.match("Jerusalem");
        document.write(s.charAt(7) + "<br>"); 
        document.write(s.indexOf("b") + "<br>");  
        document.write(s.indexOf("t") + "<br>"); 
        document.write(s.lastIndexOf("a") + "<br>");    
        document.write(x.search("cap") + "<br>");    
        document.write(n1 + n2 + "<br>"); 
    </script>
    <p id="demo"></p>
    <script>
        var js = 10;
        js *= 5;
        document.getElementById("demo").innerHTML = js; 
    </script>

</body>

</html>