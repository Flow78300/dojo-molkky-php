# Énoncé du Dojo
Calculer les points au mölkky

Règles du jeu: (voir https://fr.wikipedia.org/wiki/M%C3%B6lkky)

On ne gère le score que d’un seul joueur.

- si une seule quille tombe, on ajoute au score les points de la quille
- si plus d’une quille est renversée, on ajoute au score le nombre de quille renversées
- si le joueur dépasse les 50 points, il retombe à 25
- le joueur gagne lorsqu’il atteint exactement 50 points (on affiche ‘WIN’)
- OPTION : si le joueur fait 0 point trois fois de suite, il a perdu (on affiche ‘LOST’).

On attend une classe Molkky avec une méthode getScore() qui prend en entrée un array contenant les quilles renversées et renvoie le score actuel.

Exemple de test :
$this->assertEquals(8, $molkky->getScore([
[5,4],
[4],
[6,3],
])
);

1. Écrire dans la méthode `testMolkky()` de la classe `MolkkyTest` les tests qui vérifient la règle du jeu.
2. Écrire le contenu de la méthode `getScore()`.

## Usage

```php
composer install
```

## Test
```php
./vendor/bin/phpunit MolkkyTest.php
```
