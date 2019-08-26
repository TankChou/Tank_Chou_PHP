<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php_20190813_01_const</title>
</head>
<body>

    <?php
        // PHP的常數分成三類，一般常數/系統常數/自訂常數
        
        // define，自訂常數，define(常數名稱, 常數內容, 常數名稱是否不區分大小寫)
        // 常數名稱通常都用大寫英文字表示，若遇到複合字中間使用underscore( _ )分開
        // 常數值在設定後不可變更
        // 浮點數都是近似值
        define("MY_CONSTANT", 0.3333333333333333333);

        // PHP的變數在使用前可以不用宣告，為自動型別
        // PHP變數有個特色，在變數前必須要有美金符號($)
        // 另外PHP變數的命名規則跟一般程式語言一樣，但第一個字母不可以是數字
        $a = 22;
        
        // 一般常數就是數值：0 , -9 , 2.5 , "abc" 等

        echo 5+19;
        echo '<br>';

        // php的加號(+)，只做數值的相加，字串相加要用點符號(.) **重要**
        // echo (5+19)+'<br>'; 錯的寫法
        // 另外php對敘述結束的分號(;)很重視，一定要加

        echo (5+14).'<br>';

        // __DIR__ 為系統預設常數，PHP預設的常數，查看在哪個資料夾
        echo __DIR__;
        echo '<br>';

        // __FILE__ 為系統預設常數，查看檔案的實體路徑
        echo __FILE__;
        echo '<br>';

        // __LINE__ 為系統預設常數，查看在哪一行，方便DeBug
        echo __LINE__;
        echo '<br>';

        echo MY_CONSTANT;
        echo '<br>';

        echo $a;
        echo '<br>';

    ?>

</body>
</html>