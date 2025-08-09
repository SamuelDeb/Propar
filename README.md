# Propar

**Propar** est une application de gestion de travaux de nettoyage permettant de planifier, suivre et répartir les tâches entre différents employés.  
Elle propose un **back-office** pour l’administration et un **front-office** pour la visualisation des tâches.

---

## 🚀 Fonctionnalités

### **Back-office**
- Gestion des employés et de leurs rôles.
- Création et modification des tâches.
- Répartition des tâches par employé.
- Suivi de l’avancement des tâches (en cours, terminées, etc.).

### **Front-office**
- Visualisation des tâches.
- Affichage des employés affectés.
- Informations détaillées sur le type de tâche.

---

## 🛠️ Technologies utilisées
- **Langage** : PHP
- **Framework** : Symfony
- **Base de données** : MySQL

---

## 📦 Installation

### Prérequis
- PHP >= 8.1
- Composer
- MySQL
- (Optionnel) Docker

### Étapes d’installation
```bash
# 1. Cloner le dépôt
git clone https://github.com/SamuelDeb/Propar.git
cd Propar

# 2. Installer les dépendances
composer install

# 3. Configurer les variables d’environnement
cp .env.example .env
# Modifier .env pour correspondre à votre configuration MySQL

# 4. Créer la base de données
php bin/console doctrine:database:create

# 5. Lancer les migrations
php bin/console doctrine:migrations:migrate

# 6. Lancer le serveur Symfony
symfony serve
```
