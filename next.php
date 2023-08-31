<?php
if (!empty($_POST['userName'] && $_POST['age'])) {
    extract($_POST);
    // for write only the last user only
    // $f = fopen("data.txt", "w");
    // To write all users using appand
    $f = fopen('data.txt', 'a');
    fwrite($f, 'Hello Every One! My name is ' . $_POST['userName'] . "\n");
    fwrite($f, 'My age is ' . $_POST['age'] . "\n");
    fclose($f);
} else {
    header('location:home.php?error=empty');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
      <?php
      readfile("data.txt");
      echo "<br>*****<br>";
      ?>
    </p>

    <p>
    <?php
    $f = fopen("data.txt", "r");
    // fgets: file get single line
    $line = fgets($f);
    echo $line;
    fclose($f);
    echo "<br>*****<br>";
    ?>
    </p>
     <!-- fgetc: file get single character -->

    <p>

    <?php
    $f = fopen("data.txt", "r");
    // fgets: file get single line
    while($line = fgets($f))
    echo $line."<br>";
    fclose($f);
    ?>
    </p>

            <!-- write and read file can you use it in excel -->
    <p>
        <?php
        $f = fopen("data.csv", "a");
        fwrite($f,$_POST['userName'] .",". $_POST['age']."\n");
        fclose($f);
        ?>
    </p>

    <p>
        <?php
        $f = fopen("data.csv", "r");
        while($line=fgets($f)){
            $arr = explode("," , $line);
            echo $arr[0]." ".$arr[1]."<br>";
        }
        fclose($f);
        ?>
    </p>
</body>
</html>
  




  