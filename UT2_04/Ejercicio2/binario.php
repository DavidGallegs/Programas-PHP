<html>
    <link rel="stylesheet" href="style.css">
</html>

    <?php


    $num = $_POST["numero"];

    $numBinario = str_pad(decbin($num), 8, "0", STR_PAD_LEFT);

    print("<div class='div_php'>");
    print("<h1 class='h1_php'> CONVERSOR BINARIO </h1>");
    print("Numero Decimal: " . $num . "<br>");
    print("Numero Binario: " . $numBinario);
    print("</div>");

    ?>
    

