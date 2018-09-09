<?php
$x = 51;
$cars = array('Toyota', 'BMW', 'make' => 'Honda', 'color' => 'Red');

echo $cars[1].'</br>';
foreach($cars as $k => $v){
    echo ucwords($k).': '.$v.'</br>';
}

for($i = 0; $i < 5; $i++){
    echo 'Pow :'.$i*$i.'</br>';
}

function f($name, $default='default'){
    return 'Function: '. $name . ' ' . $default . '</br>';
}

echo f('F');
echo f('E', 'FF');

$jsonData = file_get_contents('movies.json');
$json = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    h1{
        text-align:center;
    }
    h4{
        margin:0;
        padding: 5px;
        background: #f4f4f4;
    }
    li{
        list-style:none;
        padding-left: 5px;
    }
    #container{
        width: 600px;
        margin: auto;
        overflow: hidden;
    }
    </style>
</head>
<body>
    <div id="container">
    <h1>Movies</h1>
        <ul>
        <?php
            foreach($json['movies'] as $k => $v){
                echo '<h4>'.$v['title'].'</h4>';
                echo '<li>Year: '.$v['year'].'</li>';
                echo '<li>Genre: '.$v['genre'].'</li>';
                echo '<li>Director: '.$v['director'].'</li>';
            }
            ?>
        </ul>
    </div>
    
</body>
</html>