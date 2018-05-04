<html>
    <head><title>Incluir CSS</title>
    <style>
        .estilodeconteo{
            text-align: center;
            background-color: darkcyan;
            color: ghostwhite;    
            width: 300px;
            box-shadow: 0 0 10px #01DF01;
            border-radius: 5px 5px 5px 5px;
        }
        h3{
            font-size: 100px;
            padding: 20px;
            margin: -20px;
            text-shadow: 2px 2px black;
            color: white;
            
        }
        
    </style>
        
    </head>
    
<body>
<!--Modulo PHP-->    
<?php
require 'conteo.php';
   
 echo "
 <center>
 <div class=\"estilodeconteo\">
 <h1>Contador de Visitas</h1>
 <h3 >$contador</h3>
 </div>
 </center>
 ";   


?>
    
</body>
</html>