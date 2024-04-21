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
<div class="promo-top">
        <div class="promo1">
            <h1 class="promo-text">Voor 23:45 besteld morgen in huis</h1>
        </div>
        <div class="promo2">
            <h1 class="promo-text">Achteraf betalen met klarna</h1>
        </div>
        <div class="promo3">
            <h1 class="promo-text">100% Hoogwaardige ingredienten</h1>
        </div>
        <div class="promo4">
            <h1 class="promo-text">Bestellingen van €30+ gratis verzending</h1>
        </div>
        <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="button-login-dropdown">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
          
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
    </div> 