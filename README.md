# 📘 Laravel Relations Project - README

Ce projet contient des exemples pratiques des relations Eloquent dans Laravel :
- 🔁 One to One
- 🔁 One to Many
- 🔁 Many to Many

## ⚙️ Lancer le projet en local

1. Cloner le dépôt :
```bash
git clone https://github.com/votre-utilisateur/nom-du-repo.git
cd nom-du-repo
```

2. Installer les dépendances PHP :
```bash
composer install
```

3. Configurer la base de données :
- Crée une base de données (ex: `relations_laravel`)
- Renomme `.env.example` en `.env`
- Mets à jour les infos DB dans `.env`

4. Générer la clé de l'application :
```bash
php artisan key:generate
```

5. Lancer les migrations (et seed si besoin) :
```bash
php artisan migrate
```

6. Démarrer le serveur :
```bash
php artisan serve
```

7. Accéder à l'application :
```
http://127.0.0.1:8000/
```

---

## 🧪 Tester les relations

### 🔸 One to One
```text
http://127.0.0.1:8000
```
> Affiche les informations d’un formateur avec son profil (relation one to one)

### 🔸 One to Many
```text
http://127.0.0.1:8000/show1
```
> Affiche une classe avec tous les élèves liés à elle (relation one to many)

### 🔸 Many to Many
```text
http://127.0.0.1:8000/show2
```
> Affiche les cours et les étudiants associés (relation many to many)

---

## 🙌 Contributions
Pull requests bienvenues. Pour les changements majeurs, merci d'ouvrir une issue.

---

## 🛡️ Licence
Ce projet est open-source et sous licence [MIT](LICENSE).
