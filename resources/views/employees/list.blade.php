@extends('layouts.app')
@section('title', 'Hiển thị danh sách nhân viên')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách nhân viên</h1>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <div class="col-6">
                <form class="navbar-form navbar-left" action="{{route('employees.search')}}">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-outline-primary">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <table class="table table-striped" border="1">
                    <thead>
                    <tr>
                        <th scope="col">Mã Nhân Viên</th>
                        <th scope="col">Nhóm Nhân Viên</th>
                        <th scope="col">Họ Tên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Số Điện Thoại</th>
                        <th scope="col">Số Chứng Minh</th>
                        <th scope="col">Chức Năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($employees) === 0)
                        <tr>
                            <td colspan="4">Không có dữ liệu</td>
                        </tr>
                    @else
                        @foreach($employees as $key => $employee)
                            <tr>
                                <td scope="row">{{++$key}}</td>
                                <td>{{$employee->groupOfEmployees['name']}}</td>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->gender}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>{{$employee->id_code}}</td>
                                <td>
                                    <a href="{{route('employees.edit', ['id' =>$employee->id])}}"
                                       class="btn badge-info">Edit</a>
                                    <a href="{{route('employees.delete', ['id'=>$employee->id])}}"
                                       class="btn badge-danger" onclick="return confirm('Xóa?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="m-3">
        <a href="{{route('employees.create')}}" class="btn btn-primary">Thêm mới</a>
    </div>
    {{ $employees->appends(request()->query()) }}
@endsection
