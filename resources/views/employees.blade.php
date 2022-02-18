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
                        <td>#</td>
                        <td>Име</td>
                        <td>Чин</td>
                        <td></td>
                    </tr>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->names }}</td>
                            <td>{{ $employee->rank }}</td>
                            <td><a href="employee/{{ $employee->id }}"> <i class="fa-solid fa-user-gear"></i> </a></td>
                        </tr>
                    @endforeach
                @endif

            </table>
            {{ $employees->links() }}
        </div>
    </div>
@endsection

