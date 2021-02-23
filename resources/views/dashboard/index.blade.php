@extends('layouts.app')

@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>الرقم</th>
                <th>الإسم</th>
                <th>البريد الألكتروني</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>الرقم</th>
                <th>الإسم</th>
                <th>البريد الألكتروني</th >
        </tfoot>
    </table>
@endsection
