<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php_20190813_03_for</title>
</head>
<body>
    
    <table border="1">
        <?php for($i=1 ; $i<10 ; $i++){ ?>
        <tr>
            <!-- 直接註解，會很醜 -->
            <!-- <td><?php echo $i ?></td> --> 
          
            <!-- 可以使用下方的多行註解方式，缺點就是不能包兩層註解 -->
            <?php /*
            <td><?php echo $i ?></td>
            */ ?>
          
            <td><?php echo $i ?></td>
          
            <!-- 當php後面接echo的時候，可以使用簡略的寫法如下，相當於php的標籤後面加echo -->
            <td><?= $i ?></td>

        </tr>
        <?php } ?>
    </table>
    
    <!-- 上面的寫法，也可以寫成下面這樣，在PHP內的空白，都會輸出到原始碼內，但HTML上面看不出來 -->
    <table border="1">
        <?php for($i=1 ; $i<10 ; $i++){
            echo "<tr><td>$i</td></tr>";
        } ?>
    </table>

</body>
</html>