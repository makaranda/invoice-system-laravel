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
                    <div class="col-12 col-md-12">
                        <div class="nav nav-fill mb-4 mt-4">
                            <label for="" class="nav-link shadow-sm step-lists step0 border ml-2">
                              Step One
                            </label>
                            <label for="" class="nav-link shadow-sm step-lists step1 border ml-2">
                              Step Two
                            </label>
                            <label for="" class="nav-link shadow-sm step-lists step2 border ml-2">
                              Step Three
                            </label>
                         </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="card">
                            <h5 class="card-header">Invoice Module</h5>
                            <div class="card-body">
                                <form method="POST" class="employee-form" action="">


                                    <div class="form-section">
                                        <input type="text" name="products_array"/>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Search Products</label>
                                                    <select class="form-control select_product" name="select_product">
                                                        <option value="aaaaa">aaaaaa</option>
                                                        <option value="bbbbbb">bbbbbb</option>
                                                    </select>
                                                </div></div>
                                            <div class="col-12 col-md-3">
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Product qty</label>
                                                    <input type="number" class="form-control" name="product_qty">
                                                </div></div>
                                            <div class="col-12 col-md-3 align-self-center">
                                                <button type="button" class="btn btn-success btn-sm mt-4 add_product">Add Product</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="bg-light">
                                                        <tr class="border-0">
                                                            <th class="border-0">Product Code</th>
                                                            <th class="border-0">Product Name</th>
                                                            <th class="border-0">Quantity</th>
                                                            <th class="border-0">Unit Price</th>
                                                            <th class="border-0">Value</th>
                                                            <th class="border-0">Sub Total</th>
                                                            <th class="border-0">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Product #1 </td>
                                                            <td>id000001 </td>
                                                            <td>20</td>
                                                            <td>$80.00</td>
                                                            <td>27-08-2018 01:22:12</td>
                                                            <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Customer Name</label>
                                            <input id="inputText3" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Email address</label>
                                            <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText4" class="col-form-label">Phone</label>
                                            <input id="inputText4" type="text" class="form-control" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">Address</label>
                                            <input id="inputAddress" type="text" placeholder="Address" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-section">
                                        <div class="mb-3 mt-3">
                                        <label for="address" class="form-label">Address:</label>
                                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
                                        </div>
                                        <div class="mb-3">
                                        <label for="website" class="form-label">Website:</label>
                                        <input type="text" class="form-control" id="website" placeholder="Enter website" name="website" required>
                                        </div>
                                    </div>
                                    <div class="form-navigation mt-3">
                                        <button type="button" class="previous btn btn-warning float-left">Previous</button>
                                        <button type="button" class="next btn btn-primary float-right">Next</button>
                                        <button type="submit" class="btn btn-primary float-right">Submit</button>
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-section{
      display: none;
    }
    .form-section.current{
      display: inline;
    }
    .parsley-errors-list{
      color: red;
    }
    .nav-fill label{
        align-self: center;
        margin-bottom: 0px;
    }
    .select2-container {
        box-sizing: border-box;
        display: block;
        margin: 0;
        position: relative;
        vertical-align: middle;
    }
  </style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function(){
        $('.select_product').select2();

        $('.add_product').on('click',function(){

        });
     });

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
