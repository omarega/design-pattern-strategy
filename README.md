# Design pattern strategy

Ce projet a pour objectif d'illustrer l'implémentation du design pattern Strategy dans le contexte des paiements. En utilisant ce pattern, nous fournissons une structure flexible pour gérer différentes méthodes de paiement telles que Wave, Orange Money, PayPal, et les cartes de crédit. Chaque méthode de paiement est encapsulée dans une classe dédiée, permettant une extensibilité aisée et la possibilité de sélectionner dynamiquement la méthode de paiement souhaitée.

## Installation

1. **Clonez le projet :**

    ```bash
    git clone https://github.com/omarega/design_pattern_strategy.git
    ```

2. **Accédez au répertoire du projet :**

    ```bash
    cd design_pattern_strategy
    ```

3. **Installez les dépendances PHP :**

    ```bash
    composer install
    ```

4. **Installez les dépendances front-end :**

    ```bash
    npm install && npm run dev
    ```

5. **Configurez l'environnement :**

    - Copiez le fichier `.env.example` en un nouveau fichier `.env` :

        ```bash
        cp .env.example .env
        ```

    - Générez la clé d'application Laravel :

        ```bash
        php artisan key:generate
        ```

    - Configurez votre base de données dans le fichier `.env`.

6. **Exécutez les migrations et les seeds :**

    ```bash
    php artisan migrate --seed
    ```

## Utilisation

1. **Démarrez le serveur Laravel Valet :**

    ```bash
    php artisan serve
    ```
   Vous pouvez utiliser également ```docker```, ```valet``` etc.

2. **Accédez au projet dans votre navigateur :**

   [http://votre-projet.test](http://votre-projet.test)

## Contribuer

Si vous souhaitez contribuer à ce projet, veuillez lire notre [Guide de contribution](CONTRIBUTING.md).

## Licence

Ce projet est sous licence [Licence MIT](LICENSE).
