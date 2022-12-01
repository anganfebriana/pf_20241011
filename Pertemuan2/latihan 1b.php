<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 1B</title>
</head>
<style>
    .warna-baris {
        background-color: aquamarine;
    }
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i<= 3; $i++) : ?>
            <?php if ( $i %2 == 1) : ?>
            <tr class="warna-baris">
            <?php for( $j = 1; $j <=5; $j++) : ?>
                <td><?= "$i, $j"; ?></td>
                <?php endfor;?>
                </tr>/.warna-baris 
                <?php endfor; ?>
    </table>

    
</body>
</html>