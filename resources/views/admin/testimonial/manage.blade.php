@extends('admin.master')
@section('title')
manage-product
@endsection
@section('body')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Default Datatable</h4>
                

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                {{-- <table id="datatable" class="table table-bordered  " > --}}
                    <thead>
                    <tr>
                        <th>SL No.</th>
                        <th> Name</th>
                        <th> Comment</th>
                        <th>Image</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>


                    <tbody>

                        @foreach ($testimonials as $testimonial)

                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $testimonial->name}}</td>                           
                            <td>{{ $testimonial->comment }}</td>
                            <td>
                                <img src="{{asset($testimonial->image)}}" alt="" height="50" width="50">
                            </td>
                           
                            <td>
                                <a href="{{ route('testimonial.edit',['id'=>$testimonial->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('testimonial.delete',['id'=>$testimonial->id]) }}" class="btn btn-danger   btn-sm"
                                   >
                                    <i class="fa fa-trash"></i>
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