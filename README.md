# Mini Gestionale Biblioteca - Laravel 007

## Descrizione progetto

Questo progetto è stato sviluppato utilizzando **Laravel** e rappresenta un piccolo gestionale per la gestione dei libri di una biblioteca.

L'applicazione permette di:

* visualizzare la lista dei libri presenti nel database
* aggiungere nuovi libri tramite un form
* salvare i libri nel database
* inviare una email quando un libro viene creato

Il progetto utilizza **Laravel, MySQL e Bootstrap** per la parte grafica.

---

## Tecnologie utilizzate

* Laravel
* PHP
* MySQL
* TablePlus
* Bootstrap
* Vite
* Blade Template Engine

---

## Struttura del progetto

Il progetto è organizzato seguendo il pattern **MVC (Model View Controller)**:

### Controller

È stato creato un **BookController** che gestisce:

* visualizzazione lista libri
* form creazione libro
* salvataggio libro nel database

---

### Model

È stato creato il modello:

```
Book
```

che rappresenta la tabella **books** nel database.

---

### Migration

È stata creata la migration:

```
create_books_table
```

con le seguenti colonne:

* id
* title
* author
* pages
* year
* created_at
* updated_at

---

### Views

Le principali viste dell'applicazione sono:

* **homepage** → pagina principale
* **books/index** → lista dei libri
* **books/create** → form per aggiungere un libro

Le viste utilizzano **Blade** e sono inserite in un **layout principale con navbar**.

---

## Rotte

Le rotte definite nel progetto sono:

```
/              → homepage
/books         → lista libri
/books/create  → form inserimento libro
/books/store   → salvataggio libro
```

---

## Funzionalità implementate

### 1. Visualizzazione libri

La pagina **Lista Libri** mostra tutti i libri presenti nel database.

---

### 2. Creazione libro

Attraverso un form è possibile inserire:

* titolo
* autore
* numero pagine
* anno

---

### 3. Validazione dei campi

Prima di salvare il libro vengono verificati i dati inseriti:

* titolo obbligatorio
* autore obbligatorio
* pagine numero intero
* anno opzionale

---

### 4. Messaggio di successo

Dopo il salvataggio del libro l'utente viene reindirizzato alla lista dei libri con un messaggio:

```
Libro creato con successo!
```

---

### 5. Invio email

Quando un libro viene creato viene inviata automaticamente una email di notifica.

---

## Obiettivo esercizio

L'obiettivo dell'esercizio era comprendere:

* utilizzo dei **Controller**
* creazione di **Migration**
* utilizzo dei **Model**
* gestione delle **Rotte**
* validazione dei form
* invio email tramite Laravel

---

## Autore

Progetto realizzato da:

**Augusto Borrello**
