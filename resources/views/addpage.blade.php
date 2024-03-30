@extends('layouts.default')

@section('page_name', 'Add Users Data')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Add User Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ url('/') }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="input01" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>คุณ</option>
                            <option>นาย</option>
                            <option>นางสาว</option>
                            <option>นาง</option>
                            <option>เด็กชาย</option>
                            <option>เด็กหญิง</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="input01" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input01">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="input01" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input01">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="input01" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input01">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="input01" class="col-sm-2 col-form-label">Avatar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="input01">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
                <a href="{{ url('/') }}" class="btn btn-default float-right">Cancel</a>
                <button type="reset" class="btn btn-default float-right mr-2">Reset</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->
@endsection
