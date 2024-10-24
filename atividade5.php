<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function form() {
        echo
            "<form method=\"post\">
                <label for=\"nome\">Nome:</label>
                <input type=\"text\" name=\"nome\">

                <select name=\"escolha\" id=\"escolha\">
                    <option value=\"pedra\">pedra</option>
                    <option value=\"papel\">papel</option>
                    <option value=\"tesoura\">tesoura</option>
                </select>
                
                <input type=\"submit\">
            </form>";
    }
    function exibirGanhador($status, $escolha, $maqEscolha) {
        if ($status == "ganhou") {
            echo "<h2>Voce Ganhou!</h2>";

            if ($escolha == "pedra") {
                echo "<p>Sua escolha:</p>";
                echo "<img src=\"pedra.png\">";
            } else if ($escolha == "tesoura") {
                echo "<p>Sua escolha:</p>";
                echo "<img src=\"tesoura.png\">";
            } else if ($escolha == "papel") {
                echo "<p>Sua escolha:</p>";
                echo "<img src=\"papel.png\">";
            }

            if ($maqEscolha == "pedra") {
                echo "<p>Escolha do oponente:</p>";
                echo "<img src=\"pedra.png\">";
            } else if ($maqEscolha == "tesoura") {
                echo "<p>Escolha do oponente:</p>";
                echo "<img src=\"tesoura.png\">";
            } else if ($maqEscolha == "papel") {
                echo "<p>Escolha do oponente:</p>";
                echo "<img src=\"papel.png\">";
            }

        } else if ($status == "empate") {
            echo "<h2> Empatou!<h2>";
            if ($escolha == "pedra") {
                echo "<p>Sua escolha:</p>";
                echo "<img src=\"pedra.png\">";
            } else if ($escolha == "tesoura") {
                echo "<p>Sua escolha:</p>";
                echo "<img src=\"tesoura.png\">";
            } else if ($escolha == "papel") {
                echo "<p>Sua escolha:</p>";
                echo "<img src=\"papel.png\">";
            }

            if ($maqEscolha == "pedra") {
                echo "<p>Escolha do oponente:</p>";
                echo "<img src=\"pedra.png\">";
            } else if ($maqEscolha == "tesoura") {
                echo "<p>Escolha do oponente:</p>";
                echo "<img src=\"tesoura.png\">";
            } else if ($maqEscolha == "papel") {
                echo "<p>Escolha do oponente:</p>";
                echo "<img src=\"papel.png\">";
            }

        } else {
            echo "<h2>Voce perdeu</h2>";

            if ($escolha == "pedra") {
                echo "<p>Sua escolha:</p>";
                echo "<img src=\"pedra.png\">";
            } else if ($escolha == "tesoura") {
                echo "<p>Sua escolha:</p>";
                echo "<img src=\"tesoura.png\">";
            } else if ($escolha == "papel") {
                echo "<p>Sua escolha:</p>";
                echo "<img src=\"papel.png\">";
            }

            if ($maqEscolha == "pedra") {
                echo "<p>Escolha do oponente:</p>";
                echo "<img src=\"pedra.png\">";
            } else if ($maqEscolha == "tesoura") {
                echo "<p>Escolha do oponente:</p>";
                echo "<img src=\"tesoura.png\">";
            } else if ($maqEscolha == "papel") {
                echo "<p>Escolha do oponente:</p>";
                echo "<img src=\"papel.png\">";
            }
        }
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $suaEscolha = $_POST["escolha"];
        $opcoes = ["pedra", "papel", "tesoura"];
        $maqEscolha = $opcoes[array_rand($opcoes)];

        if (($suaEscolha == "pedra" && $maqEscolha == "tesoura") ||($suaEscolha == "papel" && $maqEscolha == "pedra") ||($suaEscolha == "tesoura" && $maqEscolha == "papel")) {
            exibirGanhador("ganhou", $suaEscolha, $maqEscolha);
        } elseif ($suaEscolha == $maqEscolha) {
            exibirGanhador("empate", $suaEscolha, $maqEscolha);
        } else {
            exibirGanhador("perdeu", $suaEscolha, $maqEscolha);
        }
    } else {
        form();
    }
    ?>
</body>
</html>