<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //para crear esta tabla ya semi hecha se ejecuto el comando php artisan make:migration create_zoologicoz_tabla
        //si llegamos a actualizar o agregar una columan en una tabla y hacemos php artisan migrate y no funciona por favor hacer el comando php artisan migrate:fresh
        Schema::create('zoologicos', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("descripcion"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zoologicos');
    }
}
