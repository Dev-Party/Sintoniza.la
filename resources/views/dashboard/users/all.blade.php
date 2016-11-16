@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>
				<div class="panel-body">
					<table class="table">
				    	<thead>
				    		<tr>
				    			<th>Nombre</th>
				    			<th>Correo</th>
				    			<th></th>
				    		</tr>
				    	</thead>
				    	<tbody>
				    	@foreach ($users as $user)
				    	<tr>
				        	<td>{{ $user->name }}</td>
				        	<td>{{ $user->email }}</td>
				        	<td class="text-right"></td>
				        </tr>
				        @endforeach
				       </tbody>
				    </table>
				</div><!-- .panel-body -->
			</div><!-- .panel -->
        </div>
    </div>
</div>
@endsection
