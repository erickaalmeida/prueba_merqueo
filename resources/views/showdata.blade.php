@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Datos del archivo</div>

  <div class="panel-body col-md-offset-3">
  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h3>Datos</h3>
        <table class="table-striped table-hover col-md-offset-1">
             <tr>
            <th>Id Usuario</th>
                    <th>Datos En Mayúscula</th>
                    </tr>
        
                    <?php if(isset($data)){
                        foreach ($data as $row) {?>
                            <tr>
                                <td><?php echo $row->user_id;?></td>
                                <td><?php echo $row->data; }?></td>
                                
                            </tr>
                        <?php }?>
                    
                    	
                    </table>
                </div>

    </div>
        </div>
    </div>
</div>
@endsection