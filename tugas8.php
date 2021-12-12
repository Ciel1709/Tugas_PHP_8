

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            flex-wrap: wrap;
        }
        .subCon{
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
            for ($l=0; $l < 25 ; $l++) { 
                echo "<div class=\"subCon\">";
                
                    for ($i=0; $i < 10; $i++) { 
                        for ($j=10; $j > $i; $j--) { 
                            echo "_";
                        }
                        for ($k=0; $k <$i*2 ; $k++) { 
                            echo "x";
                        }
                        echo"<br>";
                    }
                    for ($i=10; $i > 0; $i--) { 
                        for ($j=$i; $j < 10; $j++) { 
                            echo "_";
                        }
                        for ($k=$i*2; $k >0 ; $k--) { 
                            echo "x";
                        }
                        echo"<br>";
                    }
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>