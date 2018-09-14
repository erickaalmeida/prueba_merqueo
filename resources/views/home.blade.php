@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form action='store' method='post' enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="file" name="file">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection




