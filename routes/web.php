<?php

use App\Livewire\About;
use App\Livewire\Contacts;
use App\Livewire\EditClient;
use App\Livewire\Learn;
use App\Livewire\Services;
use Illuminate\Support\Facades\Route;

Route::get('/site',Learn::class)->name("home");
Route::get('/site/about',About::class)->name("about");
Route::get('/site/services',Services::class)->name("services");
Route::get('/site/contacts',Contacts::class)->name("contacts");
Route::get('/site/edit/{id}',EditClient::class)->name("edit");
