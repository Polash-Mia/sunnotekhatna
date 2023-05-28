@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Client Info</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Client Name</th>
                            <th>Age</th>
                            <th>Emg-phone</th>                      
                            <th>Father</th>                         
                            <th>Address</th>
                            <th>date</th>
                            <th>print</th>
                                                 
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($clients as $client)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$client->name}}</td>
                            <td>{{$client->age}}</td>
                            <td>{{$client->emgMobile}}</td>
                            <td>{{$client->father}}</td>
                            <td>{{$client->address}}</td>                         
                            <td>{{$client->date}}</td>                         
                            <td>
                                <a href="{{route('client.print', ['id' => $client->id])}}" target="_blank" class="btn btn-primary btn-sm"  title="View Client Detail">
                                    <i class="fa fa-book-open"></i>
                                </a>
                            </td>                         
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
