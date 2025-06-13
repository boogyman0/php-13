<!DOCTYPE html>
<html>
<body>

<form method="GET">
 scores : <input type="number" name="scores"><br>
 	<input type="submit" value = "ตกลง"><input type="reset" value = "ยกเลิก">
</form>
<?php
if (isset($_GET['scores'])) {
    $scores = $_GET['scores'];
    if($scores > 80){
        echo 'คุณได้เกรด A';
    }else if ($scores > 70){
        echo 'คุณได้เกรด B';
    }
    else if ($scores > 60){
        echo 'คุณได้เกรด C';
    }
    else if ($scores > 50){
        echo 'คุณได้เกรด D';
    }
    else {
        echo 'คุณได้เกรด F';
    }
} else {
    echo 'กรุณากรอกคะแนน';
}
?>
</body>
</html>