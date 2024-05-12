@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-4"></div>
    <div class="mt-4 col-4 card">
        <h2 class="text-center">Wellcome back, {{Auth:: user()->name}}</h2>
    
    </div>
</div>

@endsection