<!-- ================== calculator.php : below ================== -->
<?php
$first_num;
$second_num;
$operator;
$result;
//===== TODO: write your code below =====


//===== TODO: write your code above =====
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>PHP Calculator</title>
</head>
<body>
<div class="container">
    <form action="calculator.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-2">
                <input type="number" class="form-control" id="first_num" name="first_num" value="<?php echo $first_num; ?>">
            </div>
            <div class="form-group col-md-1">
                <select class="form-control" id="operator" name="operator">
                    <option <?php if($operator == 0){ echo "selected"; } ?> value="0">+</option>
                    <option <?php if($operator == 1){ echo "selected"; } ?> value="1">-</option>
                    <option <?php if($operator == 2){ echo "selected"; } ?> value="2">✕</option>
                    <option <?php if($operator == 3){ echo "selected"; } ?> value="3">÷</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <input type="number" class="form-control" id="second_num" name="second_num" value="<?php echo $second_num; ?>">
            </div>
            <label class="col-md-1 col-form-label">=</label>
            <label class="col-md-1 col-form-label"><?php echo $result; ?></label>
        </div>
        <button type="submit" class="btn btn-primary">Caluculate</button>
    </form>
</div>
</body>
</html>
<!-- ================== calculator.php : abobe ================== -->