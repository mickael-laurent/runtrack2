<!DOCTYPE html>
<html>
<head>
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>

    <?php
    // Fonction pour vérifier le gagnant
    function checkWinner($grid) {
        // Vérification des lignes, colonnes et diagonales
        // ... (logique pour déterminer le gagnant)
    }

    // Initialisation du tableau pour représenter la grille
    $grid = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];

    // Vérification du clic sur une case
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $row = $_POST['row'];
        $col = $_POST['col'];

        // Mettre à jour la grille en fonction du joueur
        // ... (logique pour mettre à jour la grille)

        // Vérifier s'il y a un gagnant
        // ... (utilisation de la fonction checkWinner)
    }
    ?>

    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++) { ?>
                        <td>
                            <button type="submit" name="row" value="<?php echo $i; ?>" <?php /* Ajouter d'autres attributs et logique ici */ ?>>
                                <?php echo $grid[$i][$j]; ?>
                            </button>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </form>

    <form method="post">
        <input type="submit" name="reset" value="Réinitialiser la partie">
    </form>

    <?php
    // Code PHP pour gérer la réinitialisation de la partie
    // ...

    // Affichage du message de résultat (gagnant ou match nul)
    // ...
    ?>

</body>
</html>
