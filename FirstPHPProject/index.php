<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo 'test';
        do {
                Verbinden();
                $daten = DatenAbfragen();
                VerbindungBeenden();
            } while ($daten > 40);
        ?>
    </body>
</html>
