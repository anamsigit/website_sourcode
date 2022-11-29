<html>
<head>
    <?php
    $ambilkalimat = $_POST["name"];
    ?>

    <?php
    // membuat file
    $myfile = fopen("transite.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $ambilkalimat);
    fclose($myfile);
    ?>
</head>

<body>
<center>

    <?php
    $command = escapeshellcmd('python kodepython.py');
    $output = shell_exec($command);

    echo $output;

    $newURL = 'https://www.google.com/search?q='.$output ;
    header('Location: '.$newURL);

    ?>

</center>
</body>
</html>