<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Groeicafe</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>
        <img src="media/samsulek.png" class="main-image">
        <div class="image-overlay-dashboard">
            <div class="groeicafe-text-container">
                <h1 class="groeicafe-text">HET GROEICAFE</h1>
            </div>
            <div class="producten-container">
                <div class="products">

                </div>
                <div class="products">
                    
                </div>
                <div class="products">
                    
                </div>
                <?hpp
                if (isset($_POST['submit-button'])) {

                $dsn = 'mysql:dbname=menu;host=127.0.0.1';
                $user = 'root';
                $password = '';

                $dbh = new PDO($dsn, $user, $password);


                $titel = $_POST['titel'];
                $prijs = $_POST['prijs'];
                $omschrijving = $_POST['omschrijving'];

                $dbh->prepare("INSERT INTO menu(Titel, Omschrijving, Prijs) VALUES(?, ?, ?)");
                $dbh->exec([$titel, $omschrijving, $prijs]);
                }
                ?>
            </div>
        </div>
    <div class="footer-gold-bar">
    </div>
    <div class="footer">
        <h1 class="footer-main-text">HET GROEICAFE</h1>
        <div class="footer-main-container">
            <div class="footer-1-containers">
                <h1 class="footer-containers-main-text">VOLG ONS<h1>
                <h1 class="footer-containers-second-text">IG/Snp/YT</h1>
            </div>
            <div class="footer-2-containers">
                <h1 class="footer-containers-main-text">LINKS<h1>
                <h1 class="footer-containers-second-text">Home</h1>
                <h1 class="footer-containers-second-text">Shop</h1>
                <h1 class="footer-containers-second-text">Zoekopdracht</h1>
            </div>
            <div class="footer-3-containers">
                <h1 class="footer-containers-main-text">KLANTENSERVICE<h1>
                <h1 class="footer-containers-second-text">Contact</h1>
                <h1 class="footer-containers-second-text">Verzendbeleid</h1>
                <h1 class="footer-containers-second-text">Terugbetalingsbeleid</h1>
                <h1 class="footer-containers-second-text">Servicevoorwaarden</h1>
                <h1 class="footer-containers-second-text">Privacybeleid</h1>

            </div>
            <div class="footer-4-containers">
               <h1 class="footer-containers-main-text">NIEUWSBRIEF<h1>
               <h1 class="footer-containers-second-text">Promoties, nieuwe producten en uitverkoop. Rechtstreeks in uw inbox.<h1>
                <input class="mail-input" placeholder="E-mail">
                </input>
            </div>
        </div>
        <div class="footer-onder-container">
            <img class="payment-methods-image" src="media/payment-methods.png">
        </div>
</div>