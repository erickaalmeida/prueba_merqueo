@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Datos del archivo</div>

  <div class="panel-body">
  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <?php if(isset($data)){
                        foreach ($data as $row) {
                            echo $row->data;

                            }
                            var_dump($data);
                        }
                         ?>
                    <table>
                    	<th>
                    		Datos 
                    	</th>
                    </table>
                </div>

    </div>
        </div>
    </div>
</div>
@endsection