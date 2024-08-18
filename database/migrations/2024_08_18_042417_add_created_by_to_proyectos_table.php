<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedByToProyectosTable extends Migration
{
    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by')->after('monto'); // Añade la columna created_by
            $table->foreign('created_by')->references('id')->on('usuarios')->onDelete('cascade'); // Crea la relación foránea
        });
    }

    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropForeign(['created_by']); // Elimina la relación foránea
            $table->dropColumn('created_by'); // Elimina la columna
        });
    }
}
