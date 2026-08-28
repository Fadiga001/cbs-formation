# CBS Formation — Site Web

Site web professionnel du Cabinet CBS Formation.

## Structure du projet

```
cbs-formation/
├── index.html          <- Page principale (toutes les 5 pages en SPA)
├── send_mail.php       <- Traitement formulaire de contact
├── .htaccess           <- Configuration Apache (compression, cache)
├── css/custom.css      <- Styles additionnels
├── js/main.js          <- Scripts additionnels
└── img/                <- Placez vos images ici
```

## Lancement

### Ouvrir localement
Double-cliquez sur `index.html`

### Serveur local
```bash
python -m http.server 8000
# ou
php -S localhost:8000
```

## Images (dossier img/)

| Fichier | Usage |
|---|---|
| `favicon.ico` | Icône d'onglet du navigateur (16/32/48 px) — généré depuis le vrai logo CBS |
| `apple-touch-icon.png` | Icône iOS/Android (180 px) |
| `logo.png` | Logo officiel CBS Formation (fond blanc) — extrait de votre catalogue, fond nettoyé |
| `logo-transparent.png` | Logo officiel en fond transparent — pour usages sur fond coloré |
| `logo-icon.png` | Le monogramme seul (CBS + toque), fond transparent — utilisé dans la navbar et le footer |
| `about-formation.jpg` | Vraie photo d'une séance de formation, extraite de votre catalogue — page "À propos" |
| `team-1.jpg`, `team-2.jpg`, `team-3.jpg` | Visuels des formateurs sur la page "À propos" |
| `partners/*.png` | 11 logos partenaires (Banque Atlantique, PASP, Port Autonome d'Abidjan, Côte d'Ivoire Économie, Orange, Moov, COOPEC, SOTRA, MTN, Fraternité Matin, Ministère de la Défense) — section "Nos Partenaires" |

**Origine des images.** Le logo, la photo de formation et les logos partenaires ont été extraits directement de votre catalogue Word officiel (ce sont vos propres contenus). Le logo a été nettoyé (fond transparent, sans halo) et décliné en plusieurs formats.

**⚠️ Visuels des formateurs.** `team-1/2/3.jpg` sont des monogrammes (initiales sur fond dégradé), pas de vraies photos — nous n'avions pas de photos de Jean Kouadio, Aïcha Traoré et Mamadou Diabaté. À remplacer dès que possible par de vraies photos professionnelles (mêmes noms de fichiers).

**⚠️ Logos partenaires.** Vérifiez que les partenariats affichés sont toujours d'actualité et que vous avez l'autorisation d'afficher chaque logo (en particulier celui du Ministère de la Défense).

**Images volontairement écartées.** Votre catalogue contient d'autres photos décoratives (transport, marketing, comptabilité, diplômés CQP) qui sont des photos de banque d'images (stock) trouvées sur internet — deux d'entre elles portent d'ailleurs un filigrane visible (© Abidjan.net et 123RF). Les publier sur le site engagerait votre responsabilité en matière de droit d'auteur ; elles n'ont donc pas été reprises.

## Contact
- Email : cbsformation0@gmail.com
- Tel : +225 01 41 58 58 12
- Adresse : Bingerville, Cote d'Ivoire

(c) 2025 CBS Formation
