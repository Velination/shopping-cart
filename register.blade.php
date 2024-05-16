@extends('style')

@section('content')
@include('preloader')

<div class="checkout-section mt-150 mb-150">
    <div class="container">
        <div class="row">

          <div class=" col-lg-8">
             <div class="checkout-accordion-wrap">
                <div class="accordion" id="accordionExample">
                    <div class="card single-accordion">

                       <div class="card-header" id="headingone">
                          <h5 class="mb-0">
                              Register
                          </h5>
                       </div>

                       <div id="collapseOne" class="collapse show">
                         <div class="card-body">
                          <div class="billing-addess-form">
                            <form class="billing-addess-form" method="post" action="{{Route('register.data')}}">
                             @csrf
                             @if($errors->has('address'))
                              {{$errors->first('address')}}
                              @endif
                            <p> <input type="text" placeholder="Name" name="name"></p>
                            <span style="color:red;">
                              @if($errors->has('name'))
                              {{$errors->first('name')}}
                              @endif
                            </span>
                            <p><input type="email" placeholder="Email" name="email"></p>
                            <span style="color:red;">
                              @if($errors->has('email'))
                              {{$errors->first('email')}}
                              @endif
                            </span>
                            <p><input type="password" placeholder="password" name="password"></p>
                            <p><input type="password" placeholder="confirm password" name="password_confirmation"></p>
                            <span style="color:red;">
                              @if($errors->has('password'))
                              {{$errors->first('password')}}
                              @endif
                            </span>
                            <p><input type="text" placeholder="Address" name="address"></p>
                            <span style="color:red;">
                              @if($errors->has('address'))
                              {{$errors->first('address')}}
                              @endif
                              <br>
                            </span>
                               <input type="submit" name="submit"  value="REGISTER">
                            </form>

                          </div>
                         </div>
                       </div>

                    </div>
                </div>
             </div>
          </div>
           <div class="col-lg-4">
             <div class="order-details-wrap">
                <div class="checkout-accordion-wrap">
                   <div class="accordion">
                      <div class="card single-accordion">
                        <div class="card-header">
                           <h5 class="mb-0" class="btn btn-link"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Login
                            </h5>
                        </div>
<!-- Login form -->
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingine"           data-parent="#accordionExample">
                            <div class="card-body">
                              <span style="color:red;">
                                 @if ($error=Session::get('failed_login'))
                                   {{$error}}
                                 @endif                                             
                              </span>
                                <div class="billingh-address-form">
                                    <form method="post" action="{{Route('login.data')}}">
                                       @csrf
                                        <p><input type="email" placeholder="Email" name="email_login"></p>
                                        @if ($errors->has('email_login'))
                                          {{$errors->first('email_login')}}
                                        @endif
                                        <p><input type="text" placeholder="password" name="password_login"></p>
                                        @if ($errors->has('password_login'))
                                          {{$errors->first('password_login')}}
                                        @endif
                                        <br>
                                        <input style="background:CC19C2;" type="submit" value="Login">
                                    </form>
                                </div>
                            </div>
                        </div>
                      </div>
                   </div>
                </div>
             </div>
           </div>
        </div>
    </div>
</div>

@endsection