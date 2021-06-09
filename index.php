<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 2.6 condition</title>
    </head>
    <body >
        <p>
            <?php
            $age=21;
            if( $age >= 18)
            {
                echo ('Tu es majeur');
            }
            else
            {
                echo ('Tu n\est pas majeur');
            }
            ?>
       </p>
    </body>
</html>