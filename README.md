# Réaliser une interface admin gestion clients

Cette partie de site admin a pour but de permettre aux administrateurs des Maisons des ligues, de recenser leurs clients. 
Pour ce faire, il faut créer une interface admin qui permet d’ajouter un client, modifier sont profile ou le supprimer

![Ajouter un client]()

Les structures html des pages doit respecter les normes w3c. 
Les pages doivent être accessibles et s’adapter à tous les écrans. 
Trouvez la meilleure solution pour les structurer. 
Les fichiers doivent porter l’extension « .php » et ils doivent être interprétés coté serveur (localhost).

## Aspect fonctionnel
Vous devez créer toute la partie gestion. Pour les enregistrements à publier il faut créer une page avec un formulaire de 4 champs : Nom, Prénom, Age et adresse mail. Tous les champs sont obligatoires. 
Afficher un warning dans le cas l’administrateur ne renseigne pas un champ.

![Créer un utilisateur]()
## BDD
La base de données vous sera nommée « client_ligue » la table la nommer « clients » et doit contenir : id_client : int, nom : varchar, prenom : varchar, age : int, email : varchar.
Coté publication vous devez afficher l’identifiant, le nom, prénom, age et email.
N’oubliez pas d’ajouter, des liens à côté « modifier ou supprimer ».

![Mettre à jour un client]()
## Aspect technique

1. Les technologies autorisées sont : html5 css3 et php orienté objet.
2. Police de caractères : ‘Open Sans’, sans-serif.
3. Iconographies obligatoires:
    - Couleur des boutons : #09599A(blue), #00614E(vert) et #d63031(rouge).
    - La couleur des thèmes doivent être indexée dans des variables css.
4. Utilisez Visual Studio Code et phpMyAdmin pour la bdd.
    - Le code HTML généré doit être valide selon les normes du W3C et tester également pour les spécificités de la WAI et du WCAG (accessibilité).

    - Votre rendu sera publié sur un dépôt Github. Celui-ci doit avoir une structure logique, contenir un readme.md avec présentation du projet et un fichier « .gitignore » si besoin.

5. L’ergonomie et la finition des interfaces seront prises en compte dans la notation, tout comme la propreté et la clarté de votre code et du nommage des éléments.