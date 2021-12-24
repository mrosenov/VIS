@extends('components.layout')

@section('section')
    <div class="card border-primary mb-3">
        <div class="card-header">Справка на личният състав</div>
        <div class="card-body">
            <table class="table table-hover" style="text-align: center;">
                @if ($employees->count() <=0)
                    <div class="alert alert-dismissible alert-danger">Няма въведени данни за личен състав</div>
                @else
                    <tr>
                        <td>Име</td>
                        <td>Бащино Име</td>
                        <td>Фамилия</td>
                        <td>Чин</td>
                        <td></td>
                    </tr>

                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->secondname }}</td>
                            <td>{{ $employee->lastname }}</td>
                            <td>{{ $employee->rank }}</td>
                            <td><a href="employee/{{ $employee->id }}"> <i class="fa-solid fa-user-gear"></i> </a></td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection

