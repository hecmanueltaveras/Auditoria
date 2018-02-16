<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAud_PlanificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Aud_Planificacion', function (Blueprint $table) {

            $table->integer('Anio_Plan');
            $table->string('Nombre_Auditoria',100);
            $table->integer('Id_Division');
            $table->integer('Id_Departamento');
            $table->integer('Id_Filial');
            $table->dateTime('Ultima_Auditoria');
            $table->integer('Tipo');
            $table->dateTime('Fecha_Inicio_Plan');
            $table->dateTime('Fecha_Inicio_Real');
            $table->dateTime('Fecha_Fin_Plan');
            $table->dateTime('Fecha_Fin_Real');
            $table->dateTime('Fecha_Emision_Informe');
            $table->integer('Id_Calificacion_Informe');
            $table->string('Estatus_Segun_Plan');
            $table->integer('Estatus_Actual');
            $table->integer('Horas_Planeacion');
            $table->integer('Horas_Ejecucion');
            $table->integer('Horas_Cierre');
            $table->integer('Horas_Total_Presupuestadas');
            $table->integer('Horas_Planeacion_Real');
            $table->integer('Horas_Ejecucion_Real');
            $table->integer('Horas_Cierre_Real');
            $table->integer('Horas_Total_Real');
            $table->dateTime('Fecha_Comite_Plan');
            $table->dateTime('Fecha_Comite_Real');
            $table->string('Codigo_Auditoria');
            $table->string('Comentarios');
            $table->integer('Frecuencia');
            $table->dateTime('Fecha_Creacion');
            $table->string('Usuario_Creacion');
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
        Schema::drop('Aud_Planificacion');
    }
}
