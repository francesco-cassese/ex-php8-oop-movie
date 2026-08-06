# 🎬 MovieFlix — Collezione Film OOP in PHP

Applicazione web in PHP puro per gestire una piccola collezione di film usando la programmazione a oggetti. Esercizio della specializzazione PHP: l'obiettivo è esercitarsi con classi, proprietà tipizzate, costruttori, trait e organizzazione del codice a oggetti.

Nessun framework, nessuna dipendenza esterna, nessun database: solo PHP 8 e classi, con i dati definiti direttamente nel codice come istanze di oggetti.

## ✨ Funzionalità

- Visualizzazione della collezione film come galleria di card, con locandina, titolo, genere, durata e anno
- Collezione a tema corse automobilistiche (7 film, da "Le Mans '66" a "Cars"), ciascuno con una locandina propria invece di un'immagine segnaposto condivisa
- Classe `Movie` con proprietà tipizzate (titolo, generi, durata, anno, locandina) e costruttore, con locandina segnaposto di default se non specificata
- Classe `Genre` per rappresentare i generi cinematografici (nome e descrizione)
- Supporto a generi multipli per ogni film, con elenco generato dinamicamente (`getGenresList()`)
- Trait `Rateable` riutilizzabile per aggiungere un sistema di valutazione (voto da 1 a 10) a qualsiasi classe, con validazione dell'intervallo e gestione della proprietà non ancora inizializzata
- Metodo `getFullDetails()` per ottenere una descrizione testuale completa del film
- Markup semantico e accessibile: lista film come `<ul>`/`<li>`, skip link per saltare al contenuto principale, testo alternativo delle locandine generato dal titolo del film
- Layout responsive con meta viewport e fogli di stile basati su variabili CSS (colori, ombre) per una gestione centralizzata del tema
- Card con altezza del titolo fissa, in modo che le righe Genere/Durata/Voto siano allineate tra le card anche con titoli di lunghezza diversa

## 📸 Screenshot

| Collezione film |
|---|
| ![Collezione film](img/library.png) |

## 🎯 Obiettivi del workshop

La traccia dell'esercizio richiedeva di creare un file `index.php` in cui:

- è definita la classe `Movie`
  - all'interno della classe sono dichiarate delle variabili d'istanza
  - all'interno della classe è definito un costruttore
  - all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti `Movie` e stampati a schermo i valori delle relative proprietà
- è definita una classe `Genre`
  - all'interno della classe sono dichiarate delle variabili d'istanza
  - all'interno della classe è definito un costruttore
- ogni film ha un genere

**Bonus 1** — Modificare la classe `Movie` in modo che accetti più di un genere.

**Bonus 2** — Aggiungere un Trait alla classe `Movie` con almeno una proprietà e un metodo.

**Bonus 3** — Creare un layout completo per stampare a schermo una lista di film.

La traccia suggeriva inoltre di curare l'organizzazione del codice suddividendolo in file e cartelle dedicati, ad esempio: un file dedicato ai dati (`db.php`), una cartella `Models/` con una classe per file, e un layout separato tra struttura e contenuti. Ho seguito questa indicazione riorganizzando il progetto in `db.php` e `Models/`, con `index.php` ridotto a semplice entry point di presentazione.

## 🛠️ Stack tecnico

- PHP 8 (nessun framework), con type hinting su proprietà e costruttori
- HTML5 semantico e accessibile / CSS3 con variabili custom
- Programmazione a oggetti: classi, trait, incapsulamento delle proprietà

## 📁 Struttura del progetto

```
ex-php8-oop-movie/
├── css/
│   └── style.css        # Stili dell'applicazione
├── img/
│   ├── poster-placeholder.jpg   # Locandina segnaposto di default
│   ├── poster-le-mans-66.jpg
│   ├── poster-rush.jpg
│   ├── poster-giorni-di-tuono.jpg
│   ├── poster-senna.jpg
│   ├── poster-gran-turismo.jpg
│   ├── poster-taxi.jpg
│   └── poster-cars.jpg          # Locandine dei singoli film
├── Models/
│   ├── Genre.php         # Classe Genre (nome, descrizione)
│   ├── Movie.php         # Classe Movie (usa il trait Rateable)
│   └── Rateable.php      # Trait per la gestione del voto (1-10)
├── db.php                 # Istanze di esempio (generi e film)
├── index.php               # Entry point: presenta la collezione film
└── README.md
```

## 🚀 Come avviare il progetto

### Requisiti

- PHP 8.0 o superiore
- Un server web (es. XAMPP, Apache, Nginx) oppure il server integrato di PHP

### Con XAMPP

1. Clona o copia il progetto nella cartella `htdocs` di XAMPP:
   ```
   git clone https://github.com/francesco-cassese/ex-php8-oop-movie.git
   ```
2. Avvia Apache dal pannello di controllo di XAMPP
3. Visita `http://localhost/ex-php8-oop-movie/`

### Con il server integrato di PHP

```
git clone https://github.com/francesco-cassese/ex-php8-oop-movie.git
cd ex-php8-oop-movie
php -S localhost:8000
```

Poi visita `http://localhost:8000`.

## 🔎 Come funziona

- `db.php` crea le istanze di `Genre` e di `Movie` della collezione (7 film a tema corse automobilistiche), assegnando a ciascun film uno o più generi, una locandina dedicata e un voto tramite `setVote()` (fornito dal trait `Rateable`).
- `index.php` include `db.php`, ottiene l'elenco dei film e ne stampa una card per ciascuno, mostrando titolo, generi (tramite `getGenresList()`), durata, anno e valutazione (tramite `getRatingStars()`).
- La classe `Movie` usa il trait `Rateable` per ereditare la logica di valutazione senza duplicare codice, mentre `getFullDetails()` costruisce una descrizione testuale completa del film.
- Il trait `Rateable` valida che il voto sia compreso tra 1 e 10 e gestisce il caso in cui la proprietà `vote` non sia ancora stata impostata, restituendo un messaggio di default.

## 👤 Autore

Francesco Cassese
