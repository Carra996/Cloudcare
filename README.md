
## Versione ambiente di Sviluppo

PHP 8.1.12
Laravel 9.43

## Accesso tramite Postman

<img src="https://github.com/Carra996/cloud-care/blob/main/resources/img/postman%201.png" alt="Postman 1">

Effettuando il login con username e password viene generato e restituito un token di autentizazione.

<img src="https://github.com/Carra996/cloud-care/blob/main/resources/img/postman%202.png" alt="Postman 2">

Il token ottenuto precedentemente viene utilizzato per autorizzare la call che contatta Punk API e restituisce una lista di birre.

## Accesso tramite Navigazione

<img src="https://github.com/Carra996/cloud-care/blob/main/resources/img/login.png" alt="Schermata di Login">

Una volta effettuato l'accesso al sito si viene reindirizzati alla schermata di login, una volta sottoscritta la form vengono convalidati e parametri e generato un token di autorizzazione, utilizzato per autenticare la chiamata all'API interna.

<img src="https://github.com/Carra996/cloud-care/blob/main/resources/img/beers.png" alt="Birre">

L'API interna restituisce una lista di birre in formato JSON, utilizzato per popolare una tabella.

<img src="https://github.com/Carra996/cloud-care/blob/main/resources/img/pagination.png" alt="Navigation">

Tramite le frecce poste sotto la tabella è possibile scorrere avanti e/o indietro le pagine di birre.

<img src="https://github.com/Carra996/cloud-care/blob/main/resources/img/page%202.png" alt="Pagina 2">

