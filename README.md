#Evaluation Framework
## Cloner le repo LARAVEL

 
1. Sur git récupérer l'URL du projet à cloner

2. Dans le terminal écrire

`git clone urlDuRepo nomDuDossier` 

3. Dans l'arborescence du projet, on change le `.env.example` en `.env` et on configure les ligne concernant la BDD.

4. Il faut installer le vendor en exécutant la cmd `composer install` dans le dossier du projet. Cette commande réinstalle le vendor à partir du fichier composer.json.

puis executer 
`php artisan migrate:fresh --seed`

## L'application

Cette application permet d'enregistrer des personnages de bande dessinée, de les modifier de les supprimer et de les associer à des dessinateurs. 
Elle permet aussi de créer des dessinateurs dans une base de donnés, de les modifier et de les supprimer si il ne sont pas associé avec un personage.


©ClaudeBuisson;)