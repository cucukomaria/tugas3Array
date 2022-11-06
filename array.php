<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Docoment</title>
</head>

<body>
  <form action="" method="post">
    <label for="inputIndex">In</label>
    <input type="text" name="inputIndex" id="inputIndex">
    <button type="submit" id="submit" name="submit">Proses</button>
  </form>
  <?php
  if (isset($_POST['submit'])) {
    $array = ['C', 'U', 'C', 'U', 'K', 'M', 'A', 'R', 'I', 'A',];
    $inputIndex = $_POST['inputIndex'];

    if (array_key_exists($inputIndex, $array)) {
      echo $array[$inputIndex];
    } else {
      echo "index tidak tersedia";
    }
  }
  ?>
</body>

</html>