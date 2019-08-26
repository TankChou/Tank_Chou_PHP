<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php_20190813_02_string</title>
</head>
<body>

    <?php
        
        // PHP的字串標示方式可以用雙引號("")或是單引號('')，兩者的使用方式不同
        // 雙引號標示內若包含變數，會顯示變數直，單引號則否
        // 通常沒有特殊用途的時候，會使用單引號('')

        $name = 'Tank';
        $str1 = "Hello $name"; //雙引號
        $str2 = 'Hello $name'; //單引號

        echo "$str1 <br> $str2";

    ?>

</body>
</html>