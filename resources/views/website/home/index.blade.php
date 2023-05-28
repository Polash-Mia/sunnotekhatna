@extends('website.master')

@section('body')
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset($setting->logo) }}" class="logo" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#section-one">section-1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#section-two">section-2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#section-three">section-3</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#section-four">section-4</a>
                      </li>
                      
                     
                    
                    </ul>

                    <a href="#section-five">
                        <button class="btn btn-info text-white" type="submit">Contact</button>
                    </a>

                      
                    
                  </div>
                </div>
              </nav>
        </div>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slides as $key => $slide)
                    <div class="carousel-item {{ $key == 0 ? 'active' : ' ' }}">
                        <img src="{{asset($slide->image)}}" class="d-block w-100" alt="Slide Image">
                    </div>
              @endforeach
             
             
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </header>

    <div class="up_arrow">
        <a href="#"><i class="fa-solid fa-circle-chevron-up"></i></a>
    </div>
    <section class="header py-5 " id="section-one">
        <div class="container">
            <div class="box p-3">
                <h2 class="header-title text-warning">সম্মানিত অভিভাবক.... <br>
                    <img src="{{ asset('/') }}website/assets/img/1f4a5.svg" alt="" class="sun-list">
                    আপনার বাবুর খতনা করাতে ভয় পাচ্ছেন...
                </h2>
                <h2 class="py-4 text-white">খতনা পরবর্তী আপনার ছেলেকে তাড়াতাড়ি সুস্থ দেখতে চান...? <br>
                     <img src="{{ asset('/') }}website/assets/img/1f4a5.svg" alt="" class="sun-list">খতনা পরবর্তী সুন্দর ফিনিশিং চান?      <br>
                     <img src="{{ asset('/') }}website/assets/img/1f4a5.svg" alt="" class="sun-list">কম কষ্টকর ও ঝুঁকিমুক্ত খতনা নিশ্চিত করতে চান?      <br>
                     <img src="{{ asset('/') }}website/assets/img/1f4a5.svg" alt="" class="sun-list">কসমেটিক খতনা সার্জারীতে সবচেয়ে অভিজ্ঞতা সম্পন্ন বিশেষজ্ঞ ডাক্তার চান?    <br>
                     <img src="{{ asset('/') }}website/assets/img/1f4a5.svg" alt="" class="sun-list">সঠিক, আধুনিক ও যুগোপযোগী সেবা চান?     <br>
                     <img src="{{ asset('/') }}website/assets/img/1f4a5.svg" alt="" class="sun-list"> সঠিক সিদ্ধান্তই পারে আপনার সন্তানের নিরাপদ ও সুন্দর খতনার প্রাপ্তি— যা তার সুস্থ ও সুখী জীবনের জন্য অত্যাবশ্যক।     <br>
                </h2>
                <div class="text-center">
                    <a href="#section-five" class="btn btn-info text-white">রেজিস্ট্রেশন কনফার্ম করুন</a>
                </div>
                <div class="owl-carousel owl-theme py-3">

                    @foreach ($slidestwos as $slidestwo)
                    <div class="item">
                        <img src="{{ asset($slidestwo->image) }}" alt="">
                    </div>
                    @endforeach
                  
              </div>
            </div>
        </div>
    </section>
   
    <section class="py-5" id="section-two">
        <div class="container">
            <div class="box-2 text-center p-3 text-danger "> <h2>আমাদের বৈশিষ্ট্য......</h2>
            </div>
            <div class="row p-3 ">
                <div class="col-md-3 text-center">
                    <img src="{{ asset('/') }}website/assets/img/Khatnabd.jpg" alt="">
                </div>
                <div class="col-md-9">
                    <h4>
                        <img src="{{ asset('/') }}website/assets/img/1fa78.svg" alt="" class="sun-list">১দিন বয়স থেকে মুসলমানী করা হয়।      <br>
                        <img src="{{ asset('/') }}website/assets/img/1fa78.svg" alt="" class="sun-list">সম্পূর্ণ শরীর অজ্ঞান করার প্রয়োজন হয় না।   <br>
                        <img src="{{ asset('/') }}website/assets/img/1fa78.svg" alt="" class="sun-list">মুসলমানী করানোর পর কোন ড্রেসিং করার প্রয়োজন হয় না।  <br>
                        <img src="{{ asset('/') }}website/assets/img/1fa78.svg" alt="" class="sun-list">অবস করার আগে ব্যথা না হওয়ার জন্য স্প্রে করা হয় এবং পরবর্তীতে জায়গা অবস করার জন্য লোকাল এনেস্থশিয়া ব্যবহার করা হয়।  <br>
                    </h4>
                    
                </div>
            </div>
            <h2 class="text-center charecter">ঘরে বসে বিশেষজ্ঞ সার্জনের দ্বারা আদরের সন্তানের কসমেটিক খতনা এখন কোন স্বপ্ন নয় বরং সত্যি। এবং এর খরচ সকলের হাতের নাগালে।</h2>
        </div>
        <div class="text-center">
            <a href="#section-five" class="btn btn-info text-white">রেজিস্ট্রেশন কনফার্ম করুন</a>
        </div>
    </section>
    <section class="py-5 specail" id="section-three">
        <div class="container">
            <div class="row ">
                <div class="col-md-6  mb-4 ">
                    <div class="box p-3">
                    <h2 class="text-center headline">যাদের জন্য মুসলমানী করা জরুরী.....</h2>
                    <h4 class="text-white">
                        <img src="{{ asset('/') }}website/assets/img/1f449.svg" alt="" class="sun-list">১যাদের প্রসাবে কষ্ট হয়।      <br>
                        <img src="{{ asset('/') }}website/assets/img/1f449.svg" alt="" class="sun-list">যাদের প্রসাবের ছিদ্র একেবারে ছোট।    <br>
                        <img src="{{ asset('/') }}website/assets/img/1f449.svg" alt="" class="sun-list">যাদের ছিদ্র দিয়ে সাদা পুঁজের মত বের হয়। <br>
                        <img src="{{ asset('/') }}website/assets/img/1f449.svg" alt="" class="sun-list">যাদের ডাক্তার বলেছেন;প্রসাবে ইনফেকশন আছে।  <br>
                        <img src="{{ asset('/') }}website/assets/img/1f449.svg" alt="" class="sun-list">যে বাচ্চা হাত দিয়ে সবসময় চুলকায়। <br>
                        <img src="{{ asset('/') }}website/assets/img/1f449.svg" alt="" class="sun-list">যাদের চামড়ার নীচে টিউমারের মত গোল দেখা যায়।
                        যাদের পুরো চামড়া কাটা হয়নি।<br>
                       
                    </h4>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="box p-3">
                    <h2 class="text-center headline">বিশেষ আকর্ষণ.....</h2>
                    <h4 class="text-white">
                        <img src="{{ asset('/') }}website/assets/img/1f449.svg" alt="" class="sun-list">মুসলমানীর জন্য চেম্বারে আসার প্রয়োজন নেই।
                        সরাসরি বাসায় গিয়ে মুসলমানি করানো হয়।      <br>
                        <img src="{{ asset('/') }}website/assets/img/1f449.svg" alt="" class="sun-list">আমাদের আছে কসমেটিক খতনা সার্জারীতে সবচেয়ে অভিজ্ঞতা সম্পন্ন বিশেষজ্ঞ সার্জন।<br>
                        
                       
                    </h4>
                </div>
            </div>
            </div>
           <div class="py-5">
            <div class="box text-center p-3 mobile "> <h2>বিস্তারিত জানতে কল করুন 01894-688848</h2>
            </div>
           </div>
           <div class="text-center">
            <a href="#section-five" class="btn btn-info text-white">রেজিস্ট্রেশন কনফার্ম করুন</a>
            </div>
        </div>
    </section>
    <section id="section-four">
         <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <!-- <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6> -->
                <h1 class="mb-5">TESTIMONIALS!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                @foreach ($testimonials as $testimonial)
                    
               
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset($testimonial->image) }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">{{ $testimonial->name  }}</h5>
                    
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">{{ $testimonial->comment }}</p>
                    </div>
                </div>

                @endforeach
               
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    </section>
    <section class="py-5 bg-info" id="section-five">
        <div class="container">
           <div class="py-3">
            <div class="box-2 bg-dark">
                <h2 class="text-center py-3 text-white">নিচের ফর্মটি পূরণ করে সুন্নাতে খাৎনার জন্য রেজিস্ট্রেশন সম্পূর্ণ করুন</h2>
            </div>
           </div>
            <div class="registation-form py-3">
                <form action="{{ route('regForm') }}" method="POST">
                    @csrf
                    <div class="row px-3 ">
                        <div class="col-6 mb-4">
                            <label for="">খাতনা প্রার্থির নাম <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="খাতনা প্রার্থির নাম ">
                            <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                        </div>
                        <div class="col-6 mb-4">
                            <label for="">বয়স  <span class="text-danger">*</span></label>
                            <input type="number" name="age" class="form-control" placeholder="বয়স">
                            <span class="text-danger">{{ $errors->has('age') ? $errors->first('age') : '' }}</span>
                        </div>
                        
                    </div>
                    <div class="row px-3 ">
                        <div class="col-6 mb-4">
                            <label for="">জরুরী ফোন নাম্বার <span class="text-danger">*</span></label>
                            <input type="text" name="emgMobile" class="form-control" placeholder="01737115041">
                            <span class="text-danger">{{ $errors->has('emgMobile') ? $errors->first('emgMobile') : '' }}</span>
                        </div>
                        <div class="col-6 mb-4">
                            <label for="">
                                ফোন নাম্বার  </label>
                            <input type="text" name="mobile" class="form-control" placeholder="01737115041">

                        </div>
                        
                    </div>
                    <div class="row px-3 ">
                        <div class="col-6 mb-4">
                            <label for="">পিতার নাম <span class="text-danger">*</span></label>
                            <input type="text" name="father" class="form-control" placeholder="পিতার নাম">
                            <span class="text-danger">{{ $errors->has('father') ? $errors->first('father') : '' }}</span>
                        </div>
                        <div class="col-6 mb-4">
                            <label for="">পেশা   <span class="text-danger">*</span></label>
                            <input type="text" name="fatherWork" class="form-control" placeholder="পেশা">
                            <span class="text-danger">{{ $errors->has('fatherWork') ? $errors->first('fatherWork') : '' }}</span>
                        </div>
                        
                    </div>
                    
                    <div class="row px-3 ">
                        <div class="col-6 mb-4">
                            <label for="">মাতার নাম <span class="text-danger">*</span></label>
                            <input type="text" name="mother" class="form-control" placeholder="মাতার নাম">
                            <span class="text-danger">{{ $errors->has('mother') ? $errors->first('mother') : '' }}</span>
                        </div>
                        <div class="col-6 mb-4">
                            <label for="">পেশা  </label>
                            <input type="text" name="motherWork" class="form-control" placeholder="পেশা">
                        </div>
                    </div>
                    <div class="row px-3 ">
                        <div class="col-12 mb-4">
                            <label for="">বর্তমান ঠিকানা <span class="text-danger">*</span></label>
                            <input type="text" name="address" class="form-control" placeholder="বর্তমান ঠিকানা">
                            <span class="text-danger">{{ $errors->has('address') ? $errors->first('address') : '' }}</span>
                        </div>
                        
                    </div>
                    <div class="row px-3 ">
                        <div class="col-6 mb-4">
                            <label for="">খাৎনার তারিখ<span class="text-danger">*</span></label>
                            <input type="date" name="date" class="form-control" placeholder="খাৎনার তারিখ">
                            <span class="text-danger">{{ $errors->has('date') ? $errors->first('date') : '' }}</span>
                        </div>
                        <div class="col-6 mb-4">
                            <label for="">খাৎনার বার  </label>
                            {{-- <input type="" name="week" class="form-control" placeholder="খাৎনার বার"> --}}
                            <select name="week" id="" class="form-control">
                                <option value="শনিবার">শনিবার</option>
                                <option value="রবিবার">রবিবার</option>
                                <option value="Monday">সোমবার </option>
                                <option value="সোমবার">মঙ্গলবার </option>
                                <option value="বুধবার">বুধবার </option>
                                <option value="বৃহস্পতিবার">বৃহস্পতিবার</option>
                                <option value="শুক্রবার">শুক্রবার</option>
                                
                            </select>
                            <span class="text-danger">{{ $errors->has('week') ? $errors->first('week') : '' }}</span>
                        </div>
                    </div>
                    <div class="row px-3 ms-2">
                        <div class="col-12 py-3 mb-4">
                            <label for="">সঠিক ইনফরমেশন দিয়ে সহায়তা করুন<span class="text-danger">*</span></label>
                        </div>
                        
                        <div class="row bg-white py-2">
                            <div class="col-8">১. কেটে বা ছিড়ে গেলে রক্তপাত বন্ধ হতে স্বাভাবিকের চেয়ে বেশি সময় লাগে কি?</div>
                            
                            <div class="col-2">
                                <input type="radio" name="one" value="1">  &nbsp; হ্যা
                            </div>
                            <div class="col-2">
                                <input type="radio" name="one" value="0">  &nbsp; না
                            </div>
                            <span class="text-danger">{{ $errors->has('one') ? $errors->first('one') : '' }}</span>
                        </div>
                        <div class="row bg-dark text-white py-2">
                            <div class="col-8">২. জ্বর বা খোসপঁচড়া আছে কি?</div>
                            <div class="col-2">
                                <input type="radio" name="two" value="1">  &nbsp; হ্যা
                            </div>
                            <div class="col-2">
                                <input type="radio" name="two" value="0"> &nbsp;  না
                            </div>
                            <span class="text-danger">{{ $errors->has('two') ? $errors->first('two') : '' }}</span>
                        </div>
                        <div class="row bg-white py-2">
                            <div class="col-8">৩. এপিআই শিডিউল অনুযায়ী সবগুলো টিকা দেয়া আছে কি?</div>
                            <div class="col-2">
                                <input type="radio" name="three" value="1"> &nbsp; হ্যা
                            </div>
                            <div class="col-2">
                                <input type="radio" name="three" value="0"> &nbsp; না
                            </div>
                            <span class="text-danger">{{ $errors->has('three') ? $errors->first('three') : '' }}</span>
                        </div>
                        <div class="row py-3">
                            <div class="col-12 text-danger"><strong>রেজিস্ট্রেশন সম্পূর্ণ করতে বাটনে ক্লিক করুন</strong> </div>
                            
                        </div>
                        
                    </div>
                    <div class="p-3">
                        <button type="submit" class="btn btn-success">রেজিস্ট্রেশন কনফার্ম করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


@endsection