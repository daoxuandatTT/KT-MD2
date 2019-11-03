@extends('layouts.app')
@section('title', 'Sửa thông tin khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Sửa thông tin nhan vien</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{route('employees.update', ['id' =>$employee->id])}}"
                      enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="name" value="{{$employee->name}}"
                               placeholder="Enter name" required>
                        @if($errors->has('name'))
                            {{$errors->first('name')}}
                        @endif
                    </div>
                    <div class="form-group">
                        <select name="gender" class="form-control">
                            <option value="nam">Nam</option>
                            <option value="nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" name="phone" value="{{$employee->phone}}"
                               placeholder="Enter phone" required>
                        @if($errors->has('phone'))
                            {{$errors->first('phone')}}
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Id_code</label>
                        <input type="number" class="form-control" name="id_code" value="{{$employee->id_code}}"
                               placeholder="Enter id_code" required>
                        @if($errors->has('id_code'))
                            {{$errors->first('id_code')}}
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('employees.index')}}">
                        <button type="button" class="btn btn-primary">Back</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
