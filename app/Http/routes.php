<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', function () {
        return view('Aud_Planificacion', [
            'Aud_Planificacion' => Task::orderBy('created_at', 'asc')->get()
        ]);
    });

    /**
     * Add New Task
     */
    Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'Nombre_Auditoria' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);

        }

        $task = new Task;
        $task->Anio_Plan = $request->Anio_Plan;
        $task->Nombre_Auditoria = $request->Nombre_Auditoria;
        $task->Id_Division = $request->Id_Division;
        $task->Id_Departamento = $request->Id_Departamento;
        $task->Id_Filial = $request->Id_Filial;
        $task->Ultima_Auditoria = $request->Ultima_Auditoria;
        $task->Tipo = $request->Tipo;
        $task->Fecha_Inicio_Plan = $request->Fecha_Inicio_Plan;
        $task->Fecha_Inicio_Real = $request->Fecha_Inicio_Real;
        $task->Fecha_Fin_Plan = $request->Fecha_Fin_Plan;
        $task->Fecha_Fin_Real = $request->Fecha_Fin_Real;
        $task->Fecha_Emision_Informe = $request->Fecha_Emision_Informe;
        $task->Id_Calificacion_Informe = $request->Id_Calificacion_Informe;
        $task->Estatus_Segun_Plan = $request->Estatus_Segun_Plan;
        $task->Estatus_Actual = $request->Estatus_Actual;
        $task->Horas_Planeacion = $request->Horas_Planeacion;
        $task->Horas_Ejecucion = $request->Horas_Ejecucion;
        $task->Horas_Cierre = $request->Horas_Cierre;
        $task->Horas_Total_Presupuestadas = $request->Horas_Total_Presupuestadas;
        $task->Horas_Planeacion_Real = $request->Horas_Planeacion_Real;
        $task->Horas_Ejecucion_Real = $request->Horas_Ejecucion_Real;
        $task->Horas_Cierre_Real = $request->Horas_Cierre_Real;
        $task->Horas_Total_Real = $request->Horas_Total_Real;
        $task->Fecha_Comite_Plan = $request->Fecha_Comite_Plan;
        $task->Fecha_Comite_Real = $request->Fecha_Comite_Real;
        $task->Codigo_Auditoria = $request->Codigo_Auditoria;
        $task->Comentarios = $request->Comentarios;
        $task->Frecuencia = $request->Frecuencia;
        $task->Fecha_Creacion = $request->Fecha_Creacion;
        $task->Usuario_Creacion = $request->Usuario_Creacion;
        $task->save();

        return redirect('/');
    });

    /**
     * Delete Task
     */
    Route::delete('/task/{id}', function ($id) {
        Task::findOrFail($id)->delete();

        return redirect('/');
    });
});
