<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <?php
        for($date = 2022; $date >= 1905; $date--){
            echo "<option>$date</option>";
        };
        ?>
    </select>
    <ul>
        <?php
        $array = [
            "name" => " zabir raihan",
            "ame" => " rakib raihan",
            "nme" => " etu raihan",
            "nae" => " shawkat raihan",
            "nam" => " shofik raihan",
        ];
        foreach ($array as $ind => $data){
            echo "<li>". $ind . $data."</li> <br>";
        }
        ?>
    </ul>
</body>
</html>

