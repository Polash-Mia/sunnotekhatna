@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
            
                    <h4 class="card-title mb-4">Edit Testimonial</h4>
        
                    <form action="{{route('testimonial.update',['id'=>$testimonial->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"> name</label>
                            <div class="col-sm-9">
                              <input type="text" name="name" value="{{$testimonial->name}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Comment</label>
                            <div class="col-sm-9">
                                <input type="text" name="comment" value="{{$testimonial->comment}}" class="form-control" id="horizontal-firstname-input"/>
                                
                            </div>
                        </div>
                       
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label"> Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control" id="horizontal-email-input">
                                <img src="{{asset($testimonial->image)}}" alt="" height="150" width="150">
                            </div>
                        </div>
                        
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
        
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection