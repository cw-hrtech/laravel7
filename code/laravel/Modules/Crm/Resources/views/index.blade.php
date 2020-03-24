@extends('crm::layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Module CRM</h1>
            <h4 class="text-danger">code/laravel/Modules/Crm</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            cấu hình riêng của module CRM thì define ở đây: <strong>code/laravel/Modules/Crm/Config</strong>
            <pre>
                <?php
                echo '<pre>'. print_r(config('crm'), true) .'</pre>';
                ?>
            </pre>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Web Module</h5>
                    <a href="{{route('web.module')}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">API Module</h5>
                    <a href="{{route('api.module')}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>
@endsection

