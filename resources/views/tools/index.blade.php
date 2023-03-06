@extends('layouts.main')

@section('title', 'Tools')

@section('content')
    <main id="tools">
        <div class="container py-5">
            <div class="row row-cols-3 mb-3">
                @foreach ($tools as $tool)
                    <div class="col mb-3">
                        <a href='{{ route('tools.show', $tool->id) }}' class="tool-card d-flex p-3 align-items-center">
                            <div class="col-3 me-3">
                                <img class="img-fluid" src="{{$tool->img_url}}" alt="{{$tool->name}}">
                            </div>
                                <div class="col-9 tool-data">
                                    <h5 class="mb-1">{{$tool->name}}</h5>
                                    <p class="category mb-0">{{ $tool->category }}</p>
                                    @if ($tool->vote)
                                        <div class="rating mb-2">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="{{ $i <= $tool->vote ? 'fa-solid' : 'fa-regular' }} fa-star text-warning"></i>
                                            @endfor
                                        </div>
                                    @endif
                                    @if ($tool->supported_os)
                                        <div class="os d-flex align-items-center">
                                            <p class="mb-0 me-3">For:</p>
                                            @foreach ( $tool->supported_os as $os )
                                                <i class="fa-brands me-2 {{ $os === 'ios' ? 'fa-apple' : "fa-$os" }}"></i>
                                            @endforeach
                                        </div>
                                    @endif

                                </div>
                            </a>
                            <form class="cs-button delete" action="{{ route('tools.destroy', $tool->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                            </form>
                            <div class="cs-button edit">
                                <a href="{{ route('tools.edit', $tool->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            </div>
                    </div>
                @endforeach
            </div>
            <div class="buttons d-flex justify-content-center">
                <a href="{{ route('tools.create') }}" class="btn btn-success me-3"><b>Aggiungi</b></a>
                <a href="{{ route('tools.trash.index') }}" class="btn btn-danger"><b><i class="fa-solid fa-trash"></i></b></a>
            </div>
        </div>
    </main>
@endsection