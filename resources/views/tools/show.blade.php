@extends('layouts.main')

{{-- TITLE --}}
@section ('title',"$tool->name")


{{-- CONTENT SECTION --}}
@section('content')
<section id="dashboard">
  <div class="container py-5" >
     <h1 class="text-center text-white">{{ $tool->name }}</h1>

    <div class="row row-cols-2 my-5"  id=tool-board>
        {{-- TOOL IMG  --}}
        <div class="col d-flex justify-content-center py-5">
           <img src="{{$tool->img_url}}" alt="{{$tool->name}}" class="rounded overflow-hidden ">
        </div>
        {{-- TOOL CONTENT --}}
        <div class="col d-flex justify-content-center flex-column py-5" id="tool-info">
             <div><strong>Category:  </strong>  {{ucfirst($tool->category)}} </div>
             <div><strong>Release Year:  </strong> {{$tool->release_year}} </div>
             <div><strong>Latest Version:  </strong>  {{$tool->latest_version}} </div>
             <div><strong>Download Link:  </strong>  {{$tool->download_link}} </div>
             <div><strong>Operating Systems:  </strong>
                <ul class="my-2">
                    @if ($tool->supported_os)
                    @foreach ($tool->supported_os as $os)
                        <li>  
                            @if ($os === 'windows' )
                            <i class="fa-brands fa-windows"></i> {{ ucfirst($os) }}
                            @elseif($os === 'linux')
                            <i class="fa-brands fa-linux"></i> {{ucfirst($os)}}
                            @elseif ($os === 'ios')
                            <i class="fa-brands fa-apple"></i> {{ucfirst($os)}}
                            @endif 
                        
                        </li>
                    @endforeach
                    @endif
                </ul>
              </div>
              <div><strong>Voto:  </strong>
                <div class="text-warning">

                    @for ($i = 0; $i < 5; $i++)
                     @if ( $tool->vote > $i)
                       <i class="fa-solid fa-star"></i>
                     @else
                       <i class="fa-regular fa-star"></i>
                     @endif
                        
                    @endfor
                </div>
            </div>
              <div><strong>Description: </strong>
                <p class="my-2">  {{$tool->description}}</p>
             </div>

         </div>

         
    </div>


    {{-- BUTTONS --}}
    <div class="d-flex justify-content-between my-5">

        <a href="{{ route('tools.index')}}" class="btn btn-warning">Back</a>
        <div class="crud-controller d-flex">

            <a href="{{ route('tools.edit',$tool->id)}}" class="btn btn-success me-2">Edit</a>
            <form action="{{ route('tools.destroy',$tool->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>    
            </form>
        </div>
    </div>
</div>
</section>
@endsection