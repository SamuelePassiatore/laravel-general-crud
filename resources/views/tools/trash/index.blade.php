@extends('layouts.main')
@section('content')
<section id="trash">
    <div class="container pt-5">
        <div class="card text-dark mt-5">
            <h1 class="pt-5 text-center">Trash</h1>
            <ul class="p-3">
            @foreach($tools as $tool)
                <li class="d-flex justify-content-between align-items-center border-bottom pb-2 m-3">
                    {{ $tool->name }}
                    <div class="d-flex">
                        <form action="{{ route('tools.trash.restore', $tool->id) }}" method="POST">
                            @csrf 
                            @method('PATCH')
                            <button class="btn btn-primary me-2" type="submit">Restore</button>
                        </form>
                        <form action="{{ route('tools.trash.definitive-delete', $tool->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete Permanently</button>
                        </form>
                    </div>
                </li>
            @endforeach
            </ul>

            <div class="d-flex justify-content-end">
                <a href="{{ route('tools.index') }}" class="btn btn-warning m-3">Back</a>
            </div>
        </div>
    </div>
</section>
@endsection