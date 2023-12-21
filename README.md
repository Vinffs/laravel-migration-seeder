<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# LARAVEL MIGRATION SEEDER

- Creiamo un database da phpmyadmin (es. train_db)
- Creiamo una tabella trains e relativa Migration <br>

<br>
Ogni treno dovrà avere: <br>

- Azienda
- Stazione di partenza
- Stazione di arrivo
- Orario di partenza
- Orario di arrivo
- Codice Treno
- Numero Carrozze
- In orario
- Cancellato
<br>

È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto. <br>

Create il Model Train e Aggiungete un seeder per la classe Train usando FakerPHP. <br>
Create relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna. <br>

## Bonus:
Create relativo Controller e rotta per mostrare tutti i treni che sono in partenza dalla data odierna.
