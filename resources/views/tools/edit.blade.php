@extends('layouts.main')

@section('title', 'Modify Tool')

@section('content')
    <section id="modify-form" class="p-5">
        <div class="container p-5 bg-light">
            <h2>Modify Tool:</h2>
            @include('includes.form.tools-forms')
        </div>
    </section>
@endsection
