<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="flex-container">

    <div class="header">
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
    </div>

    <div class="about_me">

        <h1>  <?php  echo $p  ?> </h1>

        <div class="data">
            <div class="myImg">
                <?php  echo '<img src="/image/dog_prog.jpg" alt="Трудное это дело">'; ?>
            </div>

            <div class="fullname">
                <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                    echo 'город', ' ', $city; ?>
                </p>

                <p> Мне
                    <?php  echo $age;   ?>
                    лет </p>
                <p> Мы научились создавать переменные </p>
                <p> Изучили простые операции с ними </p>
            </div>
        </div>

        <div class="knowledge">

            <?php  include 'knowledge.inc.php'; ?>
            <?php   echo $a, ' ', $b-15, ' ', $c; ?> <br>

            <?php
            $a = 10;
            $b = 20;
            $c = $a + $b * $a;
            echo '10 + 20 * 10 = ', $c;
            ?>   <br>
            <?php
            echo 'price = 15.  ', $d;
            ?>  <br>
            <?php
            echo "Обменный курс USD по ЦБ РФ на сегодня: {$data->Valute->USD->Value}\n";
            ?>

        </div>

        <div class="article">
            <p class="text">
                О сколько нам открытий чудных Готовят просвещенья дух
                И опыт, сын ошибок трудных, И гений, парадоксов друг,
                И случай, бог изобретатель.
            </p>
        </div>
    </div>

    <?php include 'footer.inc.php' ?>

</div>


</body>
</html>
