@extends('admin.layout.base')
@section('master')
    <div class="container-scroller">
        @include('admin.includes.header')
        <div class="container-fluid page-body-wrapper">
            @include('admin.includes.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>

                @include('admin.includes.footer')

            </div>
        </div>
    </div>
@endsection
