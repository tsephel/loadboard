@extends('layouts.admin')

@section('content')

 <!----cards---->
 <section>
      
      <div class="container-fluid">

 

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

                <h3 class="text-muted text-center mt-5 mb-3">Truck Types</h3>

                {!! Form::model($type, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\AdminTypeController@update', $type->id]]) !!}

                <div class="form-group">
                    {{ Form::label('name', 'Truck Type:')}}
                    {{ Form::text('name', null,(['class' => 'form-control col-md-8'])) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Edit Truck Type', ['class'=>'btn btn-primary'])}}
                </div>
             
          {!! Form::close() !!}


    @include('includes.form_error')

            
          </div><!--end div col-xl-10-->
        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>

@endsection