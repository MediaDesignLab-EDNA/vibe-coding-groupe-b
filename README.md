# Les Nuits du Quai · site du festival (groupe B)

Festival **fictif** de musique et d'arts visuels, imaginé pour le cours **Vibe coding et collaboration** (UX UI 2e année · L'École de design Nantes Atlantique · Media Design lab). Toute la promo du groupe B travaille sur ce même site.

## Voir le site

**[▶ Voir le site](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/MediaDesignLab-EDNA/vibe-coding-groupe-b/main/playground/blueprint.json)**

Le lien ouvre le site dans **WordPress Playground** : un WordPress complet qui tourne dans votre navigateur, sans serveur ni compte. Comptez une vingtaine de secondes de chargement (« Preparing WordPress »), sur ordinateur comme sur téléphone.

- Le site montre toujours l'état de la branche `main`. Après une fusion, rouvrez le lien pour voir la correction.
- Chaque pull request a aussi son bouton **Preview** : le site avec la correction, avant la fusion.
- C'est provisoire : ce que vous changez dans Playground n'est pas gardé. On corrige dans le dépôt, jamais dans Playground.
- En séance 4, le site aura sa propre adresse, sur un vrai serveur.

## Le site

- Moteur : WordPress, avec un thème enfant (`theme/festival-child/`) du thème Twenty Twenty-Five.
- Les contenus (artistes, programme, infos pratiques) sont dans WordPress. Le code du thème est ici.

## Comment on travaille

1. On part d'un **ticket** (onglet Issues) : un bug, une amélioration, une demande du client.
2. On crée une **branche** pour ce ticket, et on y corrige le fichier sur github.com, avec Copilot.
3. On ouvre une **pull request** (« Closes #numéro » la relie au ticket) ; l'auteur du ticket la relit et la teste avec le bouton Preview.
4. Une fois fusionnée dans `main`, la modification est publiée automatiquement sur le site (à partir de la séance 4).

Règles pour l'IA : voir `AGENTS.md`. Brief du client : voir `docs/brief-client.md`.
