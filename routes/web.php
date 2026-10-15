<?php

use App\Http\Controllers\MateriaController;

Route::resource('materias', MateriaController::class);

Route::get('/', function () {
    return redirect()->route('materias.index');
});