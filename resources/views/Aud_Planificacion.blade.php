@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Task Form -->
                    <form action="{{ url('task')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Task Name -->


                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Año Planificacion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Anio_Plan" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Nombre Auditoria</label>

                            <div class="col-sm-6">
                                <input type="text" name="Nombre_Auditoria" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">ID Division</label>

                            <div class="col-sm-6">
                                <input type="text" name="Id_Division" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">ID Departamento</label>

                            <div class="col-sm-6">
                                <input type="text" name="Id_Departamento" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">ID Filial</label>

                            <div class="col-sm-6">
                                <input type="text" name="Id_Filial" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Ultima Auditoria</label>

                            <div class="col-sm-6">
                                <input type="text" name="Ultima_Auditoria" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Tipo De Auditoria</label>

                            <div class="col-sm-6">
                                <input type="text" name="Tipo" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Fecha Inicio Planificacion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Fecha_Inicio_Plan" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Fecha Inicio Real</label>

                            <div class="col-sm-6">
                                <input type="text" name="Fecha_Inicio_Real" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Fecha Final Planificacion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Fecha_Fin_Plan" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Fecha Final Real</label>

                            <div class="col-sm-6">
                                <input type="text" name="Fecha_Fin_Real" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Fecha Emision Informe</label>

                            <div class="col-sm-6">
                                <input type="text" name="Fecha_Emision_Informe" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">ID Calificacion Informe</label>

                            <div class="col-sm-6">
                                <input type="text" name="Id_Calificacion_Informe" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Estatus Segun Planificacion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Estatus_Segun_Plan" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Estatus Actual</label>

                            <div class="col-sm-6">
                                <input type="text" name="Estatus_Actual" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Horas Planeacion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Horas_Planeacion" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Horas Ejecucion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Horas_Ejecucion" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Horas Cierre</label>

                            <div class="col-sm-6">
                                <input type="text" name="Horas_Cierre" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Horas Total Presupuestadas</label>

                            <div class="col-sm-6">
                                <input type="text" name="Horas_Total_Presupuestadas" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Horas Planeacion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Horas_Planeacion_Real" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Horas Ejecucion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Horas_Ejecucion_Real" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Horas Cierre Real</label>

                            <div class="col-sm-6">
                                <input type="text" name="Horas_Cierre_Real" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Horas Total Real</label>

                            <div class="col-sm-6">
                                <input type="text" name="Horas_Total_Real" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Fecha Comite Planificacion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Fecha_Comite_Plan" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Fecha Comite Real</label>

                            <div class="col-sm-6">
                                <input type="text" name="Fecha_Comite_Real" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Codigo Auditoria</label>

                            <div class="col-sm-6">
                                <input type="text" name="Codigo_Auditoria" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Comentarios</label>

                            <div class="col-sm-6">
                                <input type="text" name="Comentarios" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Frecuencia</label>

                            <div class="col-sm-6">
                                <input type="text" name="Frecuencia" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Fecha Creacion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Fecha_Creacion" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Usuario Creacion</label>

                            <div class="col-sm-6">
                                <input type="text" name="Usuario_Creacion" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>




                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Aud_Planificacion -->
            @if (count($Aud_Planificacion) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Aud_Planificacion
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($Aud_Planificacion as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
