@extends('layouts.main')

@section('title', 'Add New Tool')

@section('content')
    <section id="create-form" class="p-5">

        <div class="container p-5 bg-light">
            <h2>Create Tool:</h2>
            @include('includes.form.tools-forms')
        </div>
    </section>
@endsection
