# Hoofdmonitor Applicatie

Hoofdmonitor is een Laravel-gebaseerde applicatie die is ontwikkeld voor het Techniek College Rotterdam. De applicatie biedt een overzicht van taken en stelt docenten in staat om hun uren en taken te beheren. De applicatie bevat functies zoals het toewijzen van taken, het beheren van deadlines, en het bijhouden van uren per docent. De applicatie is afgestemd op het onderwijssysteem en maakt gebruik van rollen en rechtenbeheer om de toegangscontrole te waarborgen.

## Functies
- Overzicht van taken en subtaken
- Zelf uren toewijzen aan taken als er voldoende beschikbaar zijn
- Beheren van deadlines voor taken en subtaken
- Uren per docent beheren op basis van taken
- Jaarkalender met overzicht van taken per maand
- Aangepaste rol- en rechtenstructuur voor toegang tot functies
- Ondersteuning voor @tcrmbo.nl en @zadkine.nl e-mailadressen

## Vereisten
Voordat je deze applicatie installeert, zorg ervoor dat je systeem voldoet aan de volgende vereisten:

- PHP 8.1 of hoger
- Composer
- Node.js en NPM
- MySQL of een andere database ondersteund door Laravel

## Installatie-instructies
Volg deze stappen om de applicatie lokaal op te zetten:

### 1. Clone de repository
Clone de repository en navigeer naar de projectmap



### 2. Installeer PHP-afhankelijkheden met Composer

```bash
composer install
```

### 3. Installeer front-end afhankelijkheden met NPM

```bash
npm install
```

### 4. Kopieer het .env voorbeeldbestand
Maak een kopie van `.env.example` en hernoem deze naar `.env`:

```bash
cp .env.example .env
```

### 5. Genereer de applicatiesleutel
Voer het volgende Artisan-commando uit om de applicatiesleutel te genereren:

```bash
php artisan key:generate
```

### 6. Configureer de database
Open het `.env` bestand en pas de database-instellingen aan volgens je lokale omgeving:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hoofdmonitor
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Migreer de database en seed de gegevens
Voer de database-migraties uit en seed de voorbeeldgegevens:

```bash
php artisan migrate --seed
```

### 8. Compileer de front-end assets
Compileer de front-end bestanden met behulp van Laravel Mix:

```bash
npm run dev
```

### 9. Start de lokale server
Je kunt nu de applicatie draaien via de ingebouwde Laravel server:

```bash
php artisan serve
```

Bezoek de applicatie op [http://localhost:8000](http://localhost:8000).
