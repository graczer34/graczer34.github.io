<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>10 Block Layout</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">

    <div class="block">
        <h2>Zad 1</h2>
        <form action="" method="post">
            <label for="num1">Liczba 1:</label>
            <input type="text" name="num1" id="num1"><br>
            <label for="num2">Liczba 2:</label>
            <input type="text" name="num2" id="num2"><br>
            <label for="JD">Jakie działanie:</label>
            <select name="JD" id="JD">
                <option value="+">Suma</option>
                <option value="-">Różnica</option>
                <option value="*">Iloczyn</option>
                <option value="/">Iloraz</option>
            </select><br>
            <input type="submit" value="Oblicz">
        </form>

        <?php
            if(isset($_POST["num1"],$_POST["num2"],$_POST["JD"])){
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $JD = $_POST['JD'];
                    
                    switch ($_POST['JD']) {
                        case "+":
                            echo $num1 + $num2;
                          break;
                        case "-":
                            echo $num1 - $num2;
                          break;
                        case "*":
                            echo $num1 * $num2;
                          break;
                        case "/":
                            echo $num1 / $num2;
                          break;
                    }
                }
            }
            
        ?>
    </div>

    <div class="block">
        <h2>Zad 2</h2>
        <form action="" method="post">
            
        </form>

        <?php
            
        ?>
    </div>

    <div class="block">
        <h2>Zad 3</h2>
        <form action="" method="post">

            
        </form>

        <?php
            
        ?>
    </div>

    <div class="block">
        <h2>Zad 4</h2>
        
        <form action="" method="post">
            
        </form>

        <?php
            
        ?>
    </div>

    <div class="block">
        <h2>Zad 5</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 6</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 7</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 8</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 9</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 10</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 11</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 12</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 13</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 14</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 15</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 16</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 17</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    <div class="block">
        <h2>Zad 18</h2>

        <form action="" method="post">
            
        </form>

        <?php
            
        ?>

    </div>

    

    
  </div>
</body>
</html>
