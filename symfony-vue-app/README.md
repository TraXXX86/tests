# Test Agents Cursor - Application Symfony + Vue.js

Une petite application PHP Symfony avec Vue.js pour tester les fonctionnalités des Agents Cursor. L'application propose des boutons qui ouvrent des popups avec des messages génériques (succès, information, avertissement, erreur, etc.).

## Prérequis

- PHP 8.1 ou supérieur
- Composer

## Installation

```bash
cd symfony-vue-app
composer install
```

## Lancement

```bash
# Option 1 : Serveur PHP intégré
php -S localhost:8000 -t public

# Option 2 : Symfony CLI (si installé)
symfony serve
```

Puis ouvrez http://localhost:8000 dans votre navigateur.

## Fonctionnalités

- **6 boutons** : Chaque bouton ouvre une popup avec un type de message différent :
  - Succès
  - Information
  - Attention
  - Erreur
  - Message de bienvenue
  - Message générique

- **Interface moderne** : Design sombre avec accents colorés
- **Vue.js 3** : Intégré via CDN pour la réactivité des popups

## Structure du projet

```
symfony-vue-app/
├── config/           # Configuration Symfony
├── public/           # Point d'entrée web (document root)
├── src/
│   └── Controller/   # Contrôleurs
├── templates/        # Templates Twig
└── composer.json
```

> **Note** : Si Composer n'est pas installé, exécutez d'abord l'installation de Composer et PHP sur votre système.
