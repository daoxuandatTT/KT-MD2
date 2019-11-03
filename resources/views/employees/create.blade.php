@extends('layouts.app')
@section('title', 'Thêm một khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới nhân viên</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('employees.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Group</label>
                        <select class="form-control" name="groupOfEmployee">
                            @foreach($groupOfEmployees as $groupOfEmployee)
                                <option value="{{ $groupOfEmployee->id}}">{{ $groupOfEmployee->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter name">
                        <div class="error-message">
                            @if($errors->has('name'))
                                <p class="alert-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="gender" class="form-control">
                            <option value="nam">Nam</option>
                            <option value="nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter phone">
                        <div class="error-message">
                            @if($errors->has('phone'))
                                <p class="alert-danger">{{$errors->first('phone')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label>ID_Code</label>
                        <input type="number" class="form-control" name="id_code" placeholder="Enter id_code">
                        <div class="error-message">
                            @if($errors->has('id_code'))
                                <p class="alert-danger">{{$errors->first('id_code')}}</p>
                            @endif
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                        <a href="{{route('employees.index')}}">
                            <button type="button" class="btn btn-dark">Trở lại</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
