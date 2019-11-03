@extends('layouts.app')
@section('title', 'Danh sách nhóm')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Nhóm Nhân Viên</h1>
            </div>
            <table class="table table-striped" border="1">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên Nhóm</th>
                    <th scope="col">Số Nhân Viên</th>
                </tr>
                </thead>
                <tbody>
                @if(count($groupOfEmployees) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($groupOfEmployees as $key => $groupOfEmployee)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $groupOfEmployee->name }}</td>
                            <td>{{count($groupOfEmployee->employees)}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
