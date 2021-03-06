@extends('layout.layout')
@section('page_title','Produce - ')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Produce</h1>
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
                            <form name="produce_add" id = "produce_add" method = "POST" action="/produce/edit">
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
                                    <input type="hidden" name="id" value={{$data['produce_id']}}>
                                    <div class="form-group">
                                        <label for="produce_name">Amount</label>
                                        <input required type="text" class="form-control" value={{$data['amount']}} name="amount" id="amount" placeholder="Enter Produce Amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="role_desc">ProduceDate</label>
                                        <input required type="text" class="form-control" value={{$data['produce_date']}} name="produce_date" id="produce_name" placeholder="Enter Date">
                                    </div>
                                    <div class="form-group">
                                        <label for="role_desc">UserID</label>
                                        <input required type="text" class="form-control" value={{$data['user_id']}} name="user_id" id="user_id" placeholder="Enter UserID">
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
