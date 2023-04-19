# DATABASE

## collegare Laravel ad un database

apro il file .env e compilo le informazioni relative a: 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=root
DB_PASSWORD=

# Migration

Le migration sono i files che Laravel ci mette a disposizione per definire le tabelle del nostro database

-> Per collegarsi al database con un client per avere le tabelle in modo visuale installare TablePlus

- php artisan migrate: è il comando per eseguire le funzioni up() che sono all'interno dei file in database/migrations
- php artisan migrate:rollback: è il comando per eseguire le funzioni down() che sono all'interno dei file in database/migrations


## Come creo la tabella comics

1. devo dare il comando per creare il file di migration: php artisan make:migration create_comics_table
( con questo comando scritto esattamente così' io dico a Laravel di creare un file di migrazione con nome "comics")

2. andiamo a definire i campi della tabella

3. andiamo a lanciare il comando php artisan migrate (con php artisan migrate:status controllo quali migrations devono essere eseguite)


## Form e invio dati

## Memorizzazione nel database

# Model 
-> è una classe speciale che si interfaccia direttamente con le tabelle del nostro database

-> Il nome del model deve essere al singolare: Comic (la tabella al plurale)

Per usare la tabella comics devo creare il model Comic -> questa classe mi permetterà di fare tutte le operazioni necessarie su quella tabella

## Come si crea un model
php artisan make:model Comic

## Per memorizzare i dati nella tabella comics

- devo creare un oggetto della classe Comic
- memorizzare i dati che provengono dal form in quell'oggetto
- salvare i dati nel database con la funzione preposta


## Eloquent: ORM
Object Relational Mapper -> va a mappare una classe con una tabella del database



## tinker
è uno strumento che laravel ci mette a disposizione per eseguire comandi sul database
Lo faccio partire con: php artisan tinker


## Mass Assignment

è una tecnica che ci consente di assegnare valori ad un modello in unico passaggio proteggendo
solo i dati che devono essere passati e non altri

Le caratteristiche principali sono:
- array $fillable (nel model): è un array che fa da guardia, cioè non fa passare attributi che non ho specificato

- funzione create ( Comic::create()) 



# MVC

Pattern 
- Model 
- View
- Controller


# Convention over Configuration
è un paradigma di programmazione che prevede una configurazione minima iniziale per il programmatore e serve a fare in modo 
che il programmatore prenda meno decisioni possibili in modo da ridurre la capacità di errore: segua delle regole prestabilite


## File Storage

Comando di drop di tutte le tabelle del database: php artisan migrate:fresh

Per passare in tipo di input file alla richiesta sono necessarie 2 cose:
1. Attributo enctype nel tag form <form ... enctype="multipart/form-data">
2. l'input type del dato immagine (doc, pdf) deve essere type="file"

Dopo che i dati del form sono arrivati al server per quanto riguarda il file immagine devo:

1. salvare i file in una cartella dove saranno contenuti tutti i file (img, pdf, mp3, docx)
2. Dopo aver salvato il file salveremo sul database il path

3. Mostrare l'immagine nel fronted:

1. rendere disponibile la cartella storage/app/public in /public con il comando:
   php artisan storage:link (questo comando va eseguito solo una volta per creare il link)


## Recap
Prendere un dato di tipo immagine
1. Includere nel form di creazione un input con type="file"
2. inserire all'apertura del tag form un attributo enctype
3. utilizzare il metodo $request->file()->store() nel controller

Visualizzare l'immagine nel frontend
1. lanciare il comando php artisan storage:link per rendere disponibile l'immagine nel frontend
2. richiamare l'immagine nella vista con la funzione Storage::url()



## Validation (validazione dei dati)

Vogliamo stabilire a priori delle regole per ogni campo da inserire.

1. creiamo una nuova Form Request con php artisan make:request ComicRequest 
   Cos'è una Form Request? è il luogo in cui andiamo a stabilire le regole di validazione 
   dei campi del nostro form

2. compiliamo l'array rules[]: è un array chiave valore in cui le chiavi sono i nostri campi di input

3. quando viene trovato un errore otteniamo una risposta http che contiene un oggetto con dentro un
   array che si chiama $errors:
   $errors = [
    'title.required' => "mesaggio di errore"
   ]

4. Possiamo personalizzare i messaggi di errore inserendo la funzione messages() all'interno della nostra
   ComicRequest

5. Voglio conservare i valori dei campi che ho inserito nel form qualora mi venissero restituiti 
   degli  errori   



# Recap

Creiamo una tabella degli editors

Ogni volta che gestiamo una tabella abbiamo bisogno:

Migration | Model | Controller

php artisan make:migration create_editors_table
php artisan make:model Editor
php artisan make:controller EditorController

Con il seguente comando li faccio tutti e 3

php artisan make:model Editor -mc
