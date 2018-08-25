@extends('layouts.app')
@include('layouts._script')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                </div>
                <div class="float-right">
                    <a href="dickers/create" class="btn btn-danger btn-sm">新規商談</a>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table table-clickable table-hover table-responsive container">
                    <a href="dickers" class="btn btn-primary btn-sm">商談一覧</a>
                </table>
            </div>
        </div>
    </div>
@endsection
