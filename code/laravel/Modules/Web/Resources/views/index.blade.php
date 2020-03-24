@extends('web::layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Module Web</h1>
            <h4 class="text-danger">code/laravel/Modules/Web</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            Config share cho cả project thì define ở đây: <strong>code/laravel/config</strong>
            <pre>
                <?php
                    echo '<pre>'. print_r(config('constant'), true) .'</pre>';
                ?>
            </pre>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            cấu hình riêng của module WEB thì define ở đây: <strong>code/laravel/Modules/Web/Config</strong>
            <pre>
                <?php
                echo '<pre>'. print_r(config('web'), true) .'</pre>';
                ?>
            </pre>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">API Module</h5>
                    <a href="{{route('api.module')}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">CRM Module</h5>
                    <a href="{{route('crm.module')}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>
@endsection
