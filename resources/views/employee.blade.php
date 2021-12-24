@extends('components.layout')

@section('section')
    <div class="card border-primary mb-3">
        <div class="card-header">Справка на {{ $employee->rank . ' '. $employee->name }}</div>
        <div class="card-body">
            <table class="table table-hover" style="text-align: center;">
                <tr>
                    <td>ID</td>
                    <td>{{ $employee->id }}</td>
                </tr>
                <tr>
                    <td>Име</td>
                    <td>{{ $employee->name }}</td>
                </tr>
                <tr>
                    <td>Бащино Име</td>
                    <td>{{ $employee->secondname }}</td>
                </tr>
                <tr>
                    <td>Фамилия</td>
                    <td>{{ $employee->lastname }}</td>
                </tr>
                <tr>
                    <td>Чин</td>
                    <td>{{ $employee->rank }}</td>
                </tr>
                <tr>
                    <td>Отпуск</td>
                    <td>{{ $employee->vacation }}</td>
                </tr>
                <tr>
                    <td>Компенсации</td>
                    <td>{{ $employee->compensation }}</td>
                </tr>
            </table>
            <a href="#" class="btn btn-warning" style="display: flex; justify-content: center; margin-bottom: 5px;">Редактирай</a>
            <a href="{{URL::asset('')}}employees" class="btn btn-secondary" style="display: flex; justify-content: center">Назад</a>
        </div>
    </div>
@endsection

