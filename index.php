<?php
function fibonacci($num)
{
    if ($num <= 1) {
        return $num;
    }
    return fibonacci($num - 1) + fibonacci($num - 2);
}

function fibLoop($num)
{
    for ($i = 1; $i <= $num; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo fibonacci($j);
            echo " ";
        }
        echo "<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .center-me {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="center-me">
        <form action="index.php" class="input-field">
            <input id="numInput" type="text" class="validate" name="numInput">
            <label for="numInput">Number</label>
        </form>
        <div class="center-align">
            <button id="numButton" class="btn waves-effect waves-light">Test With JavaScript</button>
        </div>
        <h2 class="center-align">Hasil</h2>
        <div id="fiboElem">
            <?php
            echo '<p class="center-align">Fibonacci by PHP</p>';
            fibLoop(10);
            ?>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        const numButtonElem = document.getElementById("numButton");
        const fiboElem = document.getElementById("fiboElem");
        const numInput = document.getElementById("numInput");

        const fibonacci = (num) => {
            if (num <= 1) {
                return num;
            }
            return fibonacci(num - 1) + fibonacci(num - 2);
        }

        const fibLoop = (num) => {
            let fiboHtml = `
            <p class="center-align">Fibonacci by JavaScript</p>
            `;
            for (let i = 1; i <= num; i++) {
                for (let j = 1; j <= i; j++) {
                    fiboHtml += `${fibonacci(j)} `;
                }
                fiboHtml += `<br>`;
            }
            return fiboHtml;
        }

        numButtonElem.addEventListener("click", event => {
            fiboElem.innerHTML = fibLoop(numInput.value);
        })
    </script>
</body>

</html>