<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<?php
$x = '';
$y = '';
$result = '0';
$err = '';

if (isset($_GET['operation'])) {
  # code...
  $x = $_GET['number1'];
  $y = $_GET['number2'];
  $op = $_GET['operation'];
  if (is_numeric($x) && is_numeric($y)) {
    switch ($op) {
      case 'add':
        $result = $x + $y;
        break;
      case 'sub':
        $result = $x - $y;
        break;
      case 'multi':
        $result = $x * $y;
        break;
      case 'div':
        $result = $x / $y;
        break;
    }
  } else {
    $err = 'Enter a numeric number';
  }
}

?>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
</head>

<body>
  <form action="<?php $_SERVER['PHP_SELF']; ?>">
    <div>
      <label for="number1">Number 1</label>
      <input type="number" name="number1" id="number1" value='<?= $x ?>'>
    </div>
    <div>
      <label for="number2">Number 2</label>
      <input type="number" name="number2" id="number2" value='<?= $y ?>'>
    </div>
    <div>
      <label for="result">Result</label>
      <?php echo "The Result is {$result}"; ?>

    </div>
    <div>
      <input type="submit" value="add" name="operation">
      <input type="submit" value="sub" name="operation">
      <input type="submit" value="multi" name="operation">
      <input type="submit" value="div" name="operation">
    </div>
  </form>
  <?php if ($err != '') {
    echo "<h3>{$err}</h3>";
  } ?>
  <script src="" async defer></script>
</body>

</html>