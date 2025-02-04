@extends('layouts.app')

@section('template_title')
    {{ $grade->name ?? 'Show Grade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="studentCard">
            {{-- <img src="https://res.cloudinary.com/dog5ljnve/image/upload/v1675023061/logoFemCole_q4mump.png" alt="Paloma Babot" class="imageStudent"> --}}

            <div class="cardFem">
                <div class="cardHeader">
                    <div class="float-left">
                        <span class="cardTitle">Show Grade</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('grades.index') }}"> Back</a>
                    </div>
                </div>

                    {{-- <div class="card-body">
                        <div class="form-group">
                            <strong>Alumno:</strong>
                            {{ $grade->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Asignatura:</strong>
                            {{ $grade->subject }}
                        </div>
                        <div class="form-group">
                            <strong>Trimestre:</strong>
                            {{ $grade->trimester }}
                        </div>
                        <div class="form-group">
                            <strong>Examen:</strong>
                            {{ $grade->exam }}
                        </div>
                        <div class="form-group">
                            <strong>Nota:</strong>
                            {{ $grade->grade }}
                        </div>
                        <div class="form-group">
                            <strong>Curso escolar:</strong>
                            {{ $grade->schoolYear }}
                        </div>
                    </div> --}}
                {{-- <table>
                    <thead class="tableHead">
                        <tr>
                            <th>Evaluación Final</th>
                            <th>Asignatura</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($finalAverages as $subject => $trimesterAverages)
                        <tr>
                            <td>{{ $subject }}</td>
                            @foreach ($trimesters as $trimester)
                            <td>{{$trimesterAverages[$trimester]}}</td>
                            @endforeach
                            <td>{{ round(array_sum($trimesterAverages) / 3, 0) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> --}}
                <div class="allT">
                    <table class="firstT box table-striped text-center">
                        <thead>
                            <tr>
                                <td rowspan="2" class="align-middle"></td>
                                <td colspan="4">TRIMESTRE</td>
                            </tr>
                            <tr class="tableNotes">
                                <td>Nota Examen 1</td>
                                <td>Nota Examen 2</td>
                                <td>Nota Examen 3</td>
                                <td>Media trimestral</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                            </tr>
                            <tr>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                            </tr>
                            <tr>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                            </tr>
                            <tr>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                            </tr>
                            <tr>
                                <td>{{ $grade->subject }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                                <td>{{ $grade->grade }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection