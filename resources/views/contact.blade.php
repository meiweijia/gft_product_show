@extends('layouts.main')

@section('title','contact')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <h3 class="ps-section__title" data-mask="products">- C o n t a c t</h3>
                    </div>
                    <hr class="mb-4">
                    <div class="col-md-12">
                        <h3><strong>Shen Zhen Green Fire Tech Co., LTD</strong></h3>
                    </div>
                    <hr class="mb-4">
                    <div class="col-md-12 row">
                            <h3><i class="fa fa-phone"><strong>Phone Number:</strong> +86-13510717855</i></h3>

                        {{--<div class="col-md-4">--}}
                            {{--<h3><i class="fa fa-envelope-o"> sales@greenfiretech.com</i></h3>--}}
                        {{--</div>--}}
                    </div>
                    <div class="col-md-12 row">
                        <h3><i class="fa fa-whatsapp"><strong>Whatsapp:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+86-13510717855</i></h3>
                    </div>
                    <hr class="mb-4">
                    <div class="col-md-12 row">
                        <h3><i class="fa fa-home"></i><strong>Address:</strong> 3rd Floor, Building 6, Wantou Industrial Zone, Hongxing Village, Songgang, Bao'an District, Shenzhen</i></h3>
                    </div>
                    <hr class="mb-4">
                    <form action="{{ route('contact.post') }}" method="post" class="needs-validation" novalidate="">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group required col-md-6">
                                <label for="firstName">Name</label>
                                <input type="text" class="form-control" name="name" id="firstName" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid Name is required.
                                </div>
                            </div>
                            <div class="form-group required col-md-6">
                                <label for="email">Email </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telephone">Telephone <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" name="telephone"  id="telephone" placeholder="" value="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group required col-md-12">
                                <label for="comment">Comment</label>
                                <textarea type="text" class="form-control" name="comment" id="comment" placeholder="" required="" style="min-height: 200px"></textarea>
                                <div class="invalid-feedback">
                                    Valid comment is required.
                                </div>
                            </div>
                        </div>
                        @if($result)
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Tips!</strong> Message successfully!
                        </div>
                        @endif
                        <button class="btn btn-primary" type="submit">SUBMIT</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>

        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

    </script>
@endsection