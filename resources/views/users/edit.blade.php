@extends('layout.layout')
@section('page_title','Users - ')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit User</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form name="edit_user" id = "edit_user" method = "POST" action="/user/edit">
                            @csrf
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif 
                        
                                <div class="card-body">
                                    <input type="hidden" name="id" value={{$data['user_id']}}>
                                    <div class="form-group">
                                        <label for="national_id">NationalID</label>
                                        <input required type="text" class="form-control" value={{$data['national_id']}} name="national_id" id="national_id" placeholder="Enter NationalID">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input required type="text" class="form-control" value={{$data['name']}} name="name" id="name" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input required type="email" class="form-control" value={{$data['email']}} name="email" id="email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input required type="password" class="form-control" value={{$data['password']}} name="password" id="password" placeholder="Enter Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input required type="number" class="form-control" value={{$data['phone']}} name="phone" id="phone" placeholder="Enter Phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="birthdate">BirthDate</label>
                                        <input required type="date" class="form-control" value={{$data['birth_date']}} name="birth_date" id="birth_date" placeholder="Enter BirthDate">
                                    </div>
                                    <div class="form-group">
                                        <label for="roll_id">RollID</label>
                                        <input required type="number" class="form-control" value={{$data['roll_id']}} name="roll_id" id="roll_id" placeholder="Enter RollID">
                                    </div>
                                   
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')

@endpush

@push('styles')

@endpush
