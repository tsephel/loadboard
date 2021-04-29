@extends('layouts.admin')


@section('content')


 <!----cards---->
 <section>
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

          <h1 class="mt-5">Add Trucks</h1>

          {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\AdminTruckController@store']) !!}


          

                <div class="form-group">
                    {{ Form::label('ref', 'Ref No:')}}
                    {{ Form::text('ref', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('contact', 'Contact:')}}
                    {{ Form::text('contact', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('origin', 'Origin:')}}
                    {{ Form::text('origin', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('dh_o', 'DH_O:')}}
                    {{ Form::text('dh_o', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('destination', 'Destination:')}}
                    {{ Form::text('destination', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('dh_d', 'DH_D:')}}
                    {{ Form::text('dh_d', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('type_id', 'Truck Type:')}}
                    {{ Form::select('type_id', [''=>'--Select--'] + $types, null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('length', 'Length:')}}
                    {{ Form::text('length', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('weight', 'Weight:')}}
                    {{ Form::text('weight', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('full', 'Full/Partial:')}}
                    {{ Form::select('full', ['1' => 'Partial', '0' => 'Full'], '0',(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('startDate', 'Available From:')}}
                    {{ Form::date('startDate', \Carbon\Carbon::now()) }}
                </div>

                <div class="form-group">
                    {{ Form::label('endDate', 'Available To:')}}
                    {{ Form::date('endDate', \Carbon\Carbon::now()) }}
                </div>

                <div class="form-group">
                    {{ Form::label('comments', 'Comments:')}}
                    {{ Form::textarea('comments', null,(['class' => 'form-control', 'rows'=>3])) }}
                </div>

               



                <div class="form-group">
                    {{ Form::submit('Add Truck', ['class'=>'btn btn-primary'])}}
                </div>
             
          {!! Form::close() !!}


    @include('includes.form_error')
             


        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>


@endsection