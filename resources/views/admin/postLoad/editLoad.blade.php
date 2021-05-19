@extends('layouts.admin')


@section('content')


 <!----cards---->
 <section>
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

          <h1 class="mt-5">Add Loads</h1>

          {!! Form::model($load, ['method' => 'PATCH', 'action' =>[ 'App\Http\Controllers\AdminLoadController@update', $load->id]]) !!}


          

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
                    {{ Form::label('destination', 'Destination:')}}
                    {{ Form::text('destination', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('dock', 'Dock Hour:')}}
                    {{ Form::text('dock', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('type_id', 'Truck Type:')}}
                    {{ Form::select('type_id', $types, null,(['class' => 'form-control'])) }}
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
                    {{ Form::select('full', ['1' => 'Partial', '0' => 'Full'], null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('startDate', 'Available From:')}}
                    {{ Form::date('startDate', \Carbon\Carbon::now()) }}
                </div>

                <div class="form-group">
                    {{ Form::label('offer', 'Payable amount:')}}
                    {{ Form::text('offer', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('comments', 'Comments:')}}
                    {{ Form::textarea('comments', null,(['class' => 'form-control', 'rows'=>3])) }}
                </div>

               



                <div class="form-group">
                    {{ Form::submit('Update Load', ['class'=>'btn btn-primary'])}}
                </div>
             
          {!! Form::close() !!}


    @include('includes.form_error')
             


        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>


@endsection