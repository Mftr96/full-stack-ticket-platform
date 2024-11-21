se non li copi, scrivili beneeeeeeeeeeeeeeeeeeeeeeeeeeee i comandi 

creazione da zero :
con questo primo comando viene generato la struttura base(scaffolding) del progetto Laravel
```bash
composer create-project laravel/laravel:^10.0 . 
```
con questi comandi vengono installate le dipendenze necessarie per il progetto :
```bash
npm i
composer i
```
con questo comando viene mostrata la lista di componenti che si possono andare ad installare 
```bash
composer search breeze
```
questo comando va ad installare la struttura base di autenticazione con Laravel e Tailwind:

```bash
composer require Laravel/breeze
```
con questo comando si va ad installare i controller ed i resources di Breeze:
per il seguente comando andare a selezionare Blade with Alpine, per la modalità dark indifferente e Pest per il framework da usare
```bash
php artisan breeze:install
```
nota a margine: nel video, Fabio va a cambiare il database nel file .env, modificando il tipo di database.
In sostanza commenta la sezione database(da rigo 12 a 16) e cambia il rigo DB_CONNECTION da mysql a sqlite. La differenza è che sqlite mette il database all'interno dello scaffoldinfg rendendo il progetto più portatile.


creare il database su phpmyadmin(accendere xampp)e creare il database e copiare il nome del database nel file .env.

usare poi il comando 
```bash
php artisan  key:generate
```
!!! prima di andare al comando artisan ti  bisogna fare un aprima migrazione per fare in modo  che crei la tabella user, sennò dopo si avrà errore !

```bash
php artisan migrate
```

questo comando crea un utente registrato all'interno del progetto.
```bash
php artisan ti
```
Al lancio del comando scrivendo la seguente riga creerà l'utente(la password predefinita è 'password'):
```bash
>User::factory()->create(['email'=>'email@fittizia.com'])
```
fare exit poi per uscire dalla creazione

questi comandi installa altri pacchetti necessari:
```bash
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap --auth

```
dopo aver installato il pacchetto bootstrap è necessario eseguire di nuovo l'installazione tramite npm:
```bash
npm i
```

i comandi per far partire la visualizzazione del sito su due terminali in contemporanea :
```bash
php artisan serve
npm run dev
```
se per caso da problemi su npm run dev andare ad aggiungere nel file package.json la seguente riga:"type": "module" e andare a rinominare il file vite.config.js in vite.config.mjs






