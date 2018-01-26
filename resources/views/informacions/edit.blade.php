@extends('layouts.app')
@section('css')
 <link rel="stylesheet" href="{{asset('vendor/tinymce/')}}">
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Informacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($informacion, ['route' => ['informacions.update', $informacion->id], 'method' => 'patch']) !!}

                        @include('informacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

@section('scripts')
 <script src="{{asset('vendor/tinymce/tinymce.min.js')}}"></script>
 <script>tinymce.init({ selector:'#quienes_somos' });</script>
@endsection