# 🏋️‍♂️ Gestion de Salle de Sport – Projet Symfony

Bienvenue dans ce projet Symfony de **gestion complète d'une salle de sport** ! Ce système permet de gérer efficacement les utilisateurs, les séances, les plannings, les réservations et bien plus encore. Ce projet à pour but de m'entrainer à Symfony tout en construisant une application concrète et ambitieuse. Let's go ! 🚀

## 🧠 Objectifs du projet

- Créer un système de gestion moderne pour une salle de sport
- Apprendre et mettre en pratique Symfony dans un contexte réel
- Implémenter des fonctionnalités telles que :
  - Gestion des utilisateurs (membres et coachs)
  - Création et planification de séances
  - Réservations par les membres
  - Espace administrateur
  - Tableau de bord dynamique

## 🛠️ Tech Stack

- **Framework** : Symfony (v6 ou v5)
- **Langage** : PHP 8+
- **Base de données** : MySQL (ou PostgreSQL)
- **ORM** : Doctrine
- **Template Engine** : Twig
- **Frontend** : Bootstrap *Pour le momentµ
- **Autres outils** : Webpack Encore, Symfony CLI, Faker, Fixtures

## 🚀 Installation du projet

```bash
# 1. Cloner le projet
git clone https://github.com/Athalfrid/salle_de_sport.git
cd salle_de_sport

# 2. Installer les dépendances
composer install
npm install && npm run build

# 3. Configuration de l'environnement
cp .env .env.local
# Modifier les variables d'environnement pour correspondre à ta BDD

# 4. Création de la base de données
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# 5. Lancer le serveur local
symfony server:start
