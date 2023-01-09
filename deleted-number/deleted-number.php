<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <label>Enter the last number of the sequence: </label>
    <input type="number" name="lastnum">
    <br><br>
    <label>Enter the number to be deleted: </label>
    <input type="number" name="delnum">
    <br><br>
    <input type="submit" value="Submit" name="submit">
</form>


<?php
if (isset($_POST['submit'])) {
    $lastnum = $_POST['lastnum'];   
    $delnum = $_POST['delnum'];
    $arr = array();

    for ($i = 0; $i < $lastnum; $i++) {
        array_push($arr, $i + 1);
    }

    $array = $arr;
    unset($array[$delnum - 1]);
    shuffle($array);

    if (count($arr) != count($array)) {
        sort($array);
        for ($i = 0; $i < count($arr); $i++) {
            if (!isset($array[$i])) {
                $res = $arr[$i];
                break;
            }

            if ($arr[$i] != $array[$i]) {
                $res = $arr[$i];
                break;
            }
        }
    } 
    else {
        echo 0;
    }
    echo $res;
}
?>