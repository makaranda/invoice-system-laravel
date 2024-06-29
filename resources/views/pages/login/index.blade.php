@extends('layouts.login')
@section('content')
<span id="loading_response" class="col-12 d-none"><div class="textloading col-12">Processing......</div></span>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section text-uppercase">Invoicing System</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">

              <form action="#" class="signin-form" id="loginForm">
                  <div class="form-group">
                      <input type="text" class="form-control" placeholder="Username" required>
                  </div>
            <div class="form-group">
              <input id="password-field" type="password" class="form-control" placeholder="Password" required>
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
            </div>
          </form>
          </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('css')

@endpush
@push('scripts')
    <script>
        $(document).ready(function(){
            $('#loginForm').on('click',function(e){
                e.preventDefault();

                //alert();
            });
        });
    </script>
@endpush
