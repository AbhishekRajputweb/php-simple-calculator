<?php

if(isset($_POST['op'])){
    $f_num = $_POST['fnum'];
    $s_num = $_POST['snum'];
    $op = $_POST['op'];
    $res = '';
    $resvar = $_POST['result'];
    switch($op){
        case '+':
            $res = $f_num+$s_num;
            break;
        case '-':
            $res =  $f_num-$s_num; 
            break;
        case 'x':
            $res =  $f_num*$s_num; 
            break;
        case '/':
            $res =  $f_num/$s_num; 
            break;
        default:
           $res = "not a number";        
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
     
    <title>PHP Calculator</title>
</head>
<body>

    <form class="container" action="" method="post">
        <div class="title">
            <h1>Simple Calculator</h1>
        </div>
        <div class="inputs">
            <div class="input-01">
                <label for="">First Number:</label>
                <input type="text" placeholder="Enter First Number" name="fnum" id="first_num" >
            </div>
            <div class="input-01">
                <label for="">Second Number:</label>
                <input type="text" placeholder="Enter Second Number" name="snum" id="sec_num">
            </div>
        </div>
        
        <div class="btns">
            <input type="submit" name="op" onclick="op()" value="+" class="btn-01">
            <input type="submit" name="op" onclick="op()" value="-" class="btn-01">
            <input type="submit" name="op" onclick="op()" value="x" class="btn-01">
            <input type="submit" name="op" onclick="op()" value="/" class="btn-01">
        </div>
        <div class="result">
            <div class="input-res">
                <label for="">Result:</label>
                <input type="text"  placeholder="" name="result" id="result" value="<?php echo $res; ?>">
            </div>
         </div>   
    </form>


    <!-- js  -->
    <script src="index.js"></script>
</body>
</html>
