<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="table__container">
        <table id="numbers__table">
          <tr>
            <th class="main">Even Numbers</th>
            <th class="main">Odd Numbers</th>
          </tr>
            <?php for($i = 0; $i <= 10;  $i++){ ?>

                <?php if($i % 2 == 0) { ?>
                    <tr>
                        <td class="main__even"><?php echo $i ?></td>
                        <td class="main__odd"><?php if($i <= 10 - 1 ) echo $i+1 ?></td>
                    </tr>
                <?php } ?>

            <?php }?>
        </table>
    </div>

</body>
</html>