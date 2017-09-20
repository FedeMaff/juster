# juster
CodeIgniter 3.1.5 - preset for php7 environment

## Informazioni
Questo progetto è un installazione pulita di CodeIgniter framework 3.1.5
realizzata il 19 Settembre 2017. L'obbiettivo di questo pacchetto è avere a portata di mano un framework MVC pronto allo sviluppo con un impostazione moderna e di facile utilizzo.

Prima di immergersi a capofitto nello sviluppo però, è importante seguire i punti sotto elencati per inizializzare il progetto.

## Requisiti
*Composer aggiornato sulla macchina di sviluppo [Scaricabile da qui](https://getcomposer.org/download)
*Bower aggiornato sulla macchina di sviluppo [Scaricabile da qui](https://bower.io)
*Un WebServer con Apache2 e PHP7 [PHP7 Scaricabile da qui](http://php.net/downloads.php)

## Installazione
1. Spostare la cartella del progetto sul proprio web server.
2. Tramite "Terminale" la prima cosa da fare è installare Twig quindi, raggiungere la direcotry root del paccheto e digitare:
```
$ composer install
```
3. Sempre da terminale sarà necessario accedere al path ./theme e installare Bootstrap 4 e JQuery 3.2 eseguendo:
```
$ bower install
```
4. Se si lavora in ambiente Linux sarà necessario valorizzare i permessi della directory ./cache e delle sotto cartelle a 777
```
$ chmod -R 777 cache
```
5. Finito!