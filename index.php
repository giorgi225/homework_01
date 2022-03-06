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


<div class="form__container">
        <form action="#" method="GET">
                <input type="number" class="numberInput" name="number" id="number" placeholder="write number">
                <input type="submit" class="submit" value="See Result">
        </form>
    </div>

<div class="table__container">
        <table id="numbers__table">
          <tr>
            <th class="main">Odd Numbers</th>
            <th class="main">Even Numbers</th>
          </tr>
            <?php
              

                if(isset($_GET["number"])) {
                    $number = $_GET["number"];
                }else {
                    $number = 10;
                }
               
                $i2 = 0
            ?>
            <?php for($i = 1; $i<=$number; $i+=2):?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php if($i2+2 <= $number) echo $i2 += 2 ?></td>
                </tr>
            <?php endfor; ?>
        </table>
    </div>


</body>
</html>
