<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// para crear una migracion se ejecuta el comando php make:migration y seguido del nombre de la tabla
class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //realizar una accion
    public function up()
    {
        //para crear esta migracion se hacer php make:migration cursos
        //el metodo create espera dos parametos la primera el nombre de la tabla y la segunda funcion anonima
        //para revertir cambio en este caso lo que haria una ves creada y lo revertimos se eliminario se haria del 
        //siguiente metodo php artisan migrate:roollback
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
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
    //revertir una accion
    public function down()
    {
        Schema::drop('cursos');
    }
}
