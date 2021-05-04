@extends('layouts.admin')

@section('content')

 <!----cards---->
 <section>
      
      <div class="container-fluid">

 

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

  

                <div class="col-12">

                @if(session('deleted_load'))
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('deleted_load') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                @if(session('create_load'))
                <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('create_load') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

         


                </div>
          </div>
        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>

@endsection