<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sunnote khanta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/style.css">
  </head>
  <body>
   
       
        <section class="py-5" id="section-five">
            <div class="container">
                SL Number : #{{ $print->id }}
               {{-- <div class="py-3">
                <div class="box-2">
                    <h2 class="text-center py-3">নিচের ফর্মটি পূরণ করে সুন্নাতে খাৎনার জন্য রেজিস্ট্রেশন সম্পূর্ণ করুন</h2>
                </div>
               </div> --}}
                <div class="registation-form py-3">
                    <form action="{{ route('regForm') }}" method="POST">
                        @csrf
                        <div class="row px-3 ">
                            <div class="col-6 mb-4">
                                <label for="">খাতনা প্রার্থির নাম <span class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{ $print->name }}" class="form-control" placeholder="খাতনা প্রার্থির নাম ">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="">বয়স  <span class="text-danger">*</span></label>
                                <input type="number" name="age" value="{{ $print->age }}" class="form-control" placeholder="বয়স">
                                <span class="text-danger">{{ $errors->has('age') ? $errors->first('age') : '' }}</span>
                            </div>
                            
                        </div>
                        <div class="row px-3 ">
                            <div class="col-6 mb-4">
                                <label for="">জরুরী ফোন নাম্বার <span class="text-danger">*</span></label>
                                <input type="text" name="emgMobile" value="{{ $print->emgMobile }}" class="form-control" placeholder="01737115041">
                                <span class="text-danger">{{ $errors->has('emgMobile') ? $errors->first('emgMobile') : '' }}</span>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="">
                                    ফোন নাম্বার  </label>
                                <input type="text" name="mobile" value="{{ $print->mobile }}" class="form-control" placeholder="01737115041">
    
                            </div>
                            
                        </div>
                        <div class="row px-3 ">
                            <div class="col-6 mb-4">
                                <label for="">পিতার নাম <span class="text-danger">*</span></label>
                                <input type="text" name="father" value="{{ $print->father }}" class="form-control" placeholder="পিতার নাম">
                                <span class="text-danger">{{ $errors->has('father') ? $errors->first('father') : '' }}</span>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="">পেশা   <span class="text-danger">*</span></label>
                                <input type="text" name="fatherWork" value="{{ $print->fatherWork }}" class="form-control" placeholder="পেশা">
                                <span class="text-danger">{{ $errors->has('fatherWork') ? $errors->first('fatherWork') : '' }}</span>
                            </div>
                            
                        </div>
                        
                        <div class="row px-3 ">
                            <div class="col-6 mb-4">
                                <label for="">মাতার নাম <span class="text-danger">*</span></label>
                                <input type="text" name="mother" value="{{ $print->mother }}" class="form-control" placeholder="মাতার নাম">
                                <span class="text-danger">{{ $errors->has('mother') ? $errors->first('mother') : '' }}</span>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="">পেশা  </label>
                                <input type="text" name="motherWork" value="{{ $print->motherWork }}" class="form-control" placeholder="পেশা">
                            </div>
                        </div>
                        <div class="row px-3 ">
                            <div class="col-12 mb-4">
                                <label for="">বর্তমান ঠিকানা <span class="text-danger">*</span></label>
                                <input type="text" name="address" value="{{ $print->address }}" class="form-control" placeholder="বর্তমান ঠিকানা">
                                <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : '' }}</span>
                            </div>
                            
                        </div>
                        <div class="row px-3 ">
                            <div class="col-6 mb-4">
                                <label for="">খাৎনার তারিখ<span class="text-danger">*</span></label>
                                <input type="date" name="date" value="{{ $print->date }}" class="form-control" placeholder="খাৎনার তারিখ">
                                <span class="text-danger">{{ $errors->has('date') ? $errors->first('date') : '' }}</span>
                            </div>
                            <div class="col-6 mb-4">
                                <label for="">খাৎনার বার  </label>
                                {{-- <input type="" name="week" class="form-control" placeholder="খাৎনার বার"> --}}
                                <select name="week"  id="" class="form-control">
                                    <option >{{ $print->week }}</option>
                                    {{-- <option value="{{ $print->week }}">রবিবার</option>
                                    <option value="{{ $print->week }}">সোমবার </option>
                                    <option value="{{ $print->week }}">মঙ্গলবার </option>
                                    <option value="{{ $print->week }}">বুধবার </option>
                                    <option value="{{ $print->week }}">বৃহস্পতিবার</option>
                                    <option value="{{ $print->week }}">শুক্রবার</option> --}}
                                    
                                </select>
                                <span class="text-danger">{{ $errors->has('week') ? $errors->first('week') : '' }}</span>
                            </div>
                        </div>
                        <div class="row px-3">
                            <div class="col-12 py-3 mb-4">
                                <label for="">সঠিক ইনফরমেশন দিয়ে সহায়তা করুন<span class="text-danger">*</span></label>
                            </div>
                            
                            <div class="row">
                                <div class="col-8">১. কেটে বা ছিড়ে গেলে রক্তপাত বন্ধ হতে স্বাভাবিকের চেয়ে বেশি সময় লাগে কি?</div>
                                
                                <div class="col-2">
                                    <input type="radio"  {{$print->one == 1 ? 'checked' : ''}} name="one" value="1" >  &nbsp; হ্যা
                                </div>
                                <div class="col-2">
                                    <input type="radio" {{$print->one == 0 ? 'checked' : ''}} name="one" value="0" >  &nbsp; না
                                </div>
                                <span class="text-danger">{{ $errors->has('one') ? $errors->first('one') : '' }}</span>
                            </div>
                            <div class="row">
                                <div class="col-8">২. জ্বর বা খোসপঁচড়া আছে কি?</div>
                                <div class="col-2">
                                    <input type="radio" {{$print->two == 1 ? 'checked' : ''}} name="two" value="1" >  &nbsp; হ্যা
                                </div>
                                <div class="col-2">
                                    <input type="radio" {{$print->two == 0 ? 'checked' : ''}} name="two" value="0" > &nbsp;  না
                                </div>
                                <span class="text-danger">{{ $errors->has('two') ? $errors->first('two') : '' }}</span>
                            </div>
                            <div class="row">
                                <div class="col-8">৩. এপিআই শিডিউল অনুযায়ী সবগুলো টিকা দেয়া আছে কি?</div>
                                <div class="col-2">
                                    <input type="radio" {{$print->three == 1 ? 'checked' : ''}} name="three" value="1" > &nbsp; হ্যা
                                </div>
                                <div class="col-2">
                                    <input type="radio" {{$print->three == 0 ? 'checked' : ''}} name="three" value="0" > &nbsp; না
                                </div>
                                <span class="text-danger">{{ $errors->has('three') ? $errors->first('three') : '' }}</span>
                            </div>
                            {{-- <div class="row py-3">
                                <div class="col-12">রেজিস্ট্রেশন সম্পূর্ণ করতে বাটনে ক্লিক করুন</div>
                                
                            </div> --}}
                            
                        </div>
                        {{-- <div class="p-3">
                            <button type="submit" class="btn btn-success">রেজিস্ট্রেশন কনফার্ম করুন</button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </section>
    
    
  
    <footer class="py-3 bg-dark" >
        <h6 class="text-center text-white">© 2023 Sunnnate khatna | Developed by <a href="" class="text-decoration-none">Bengal-IT</a></h6>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"> </script>
    
  </body>
</html>