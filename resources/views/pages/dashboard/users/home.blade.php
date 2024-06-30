@extends('layouts.app')
@section('content')

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Home Page</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ecommerce-widget">

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="card">
                            <h5 class="card-header">Invoice Module</h5>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Input Text</label>
                                        <input id="inputText3" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Email address</label>
                                        <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                                        <p>We'll never share your email with anyone else.</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Number Input</label>
                                        <input id="inputText4" type="number" class="form-control" placeholder="Numbers">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <input id="inputPassword" type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">File Input</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection
@push('css')
    <style>

    </style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // $(document).ready(function(){
    //   alert();
    //  });

    $(function(){
      var $sections=$('.form-section');
      var page_type = 'current';

      function navigateTo(index,pageType){

        $sections.removeClass('current').eq(index).addClass('current');

        $('.form-navigation .previous').toggle(index>0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [Type=submit]').toggle(atTheEnd);

        const step = document.querySelector('.step'+index);
        //alert(index+''+pageType);
        step.style.backgroundColor = "#1786b8";
        step.style.color = "#fff";

        if(index == 0 && pageType == 'previous'){

          $('.step1').css({'background-color':'#fff','color':'#0d6efd'});
          $('.step2').css({'background-color':'#fff','color':'#0d6efd'});

        }else if(index == 1 && pageType == 'previous'){

          $('.step2').css({'background-color':'#fff','color':'#0d6efd'});

        }else{
          step.style.backgroundColor = "#1786b8";
          step.style.color = "white";
        }

      }

      function curIndex(){
        return $sections.index($sections.filter('.current'));
      }

      $('.form-navigation .previous').click(function(){
        page_type = 'previous';
        navigateTo(curIndex() - 1,page_type);
      });

      $('.form-navigation .next').click(function(){
        $('.employee-form').parsley().whenValidate({
          group:'block-'+curIndex()
        }).done(function(){
          page_type = 'next';
          navigateTo(curIndex() + 1,page_type);
        });
      });

      $sections.each(function(index,section){
         $(section).find(':input').attr('data-parsley-group','block-'+index);
      });

      navigateTo(0,page_type);

    });
    </script>
@endpush
