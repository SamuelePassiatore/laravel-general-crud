@php
    $types = config('types');
@endphp
@if ($tool->exists)
    <form action="{{ route('tools.update', $tool->id) }}" method="POST">
        @method('PUT')
    @else
        <form action="{{ route('tools.store') }}" method="POST">
@endif
@csrf
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="col-12"></div>
<div class="row m-5">
    <div class="col-4">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name='name' placeholder="Name"
                value="{{ old('name', $tool->name) }}">
        </div>
    </div>
    <div class="col-4">
        <div class="mb-3">
            <label for="img_url" class="form-label">Url:</label>
            <input type="url" class="form-control" id="img_url" name='img_url'
                value="{{ old('img_url', $tool->img_url) }}">
        </div>
    </div>
    <div class="col-4">
        <div class="mb-3">
            <label for="category" class="form-label">Category:</label>
            <input type="text" class="form-control" id="category" category='category' placeholder="Category"
                value="{{ old('category', $tool->category) }}">
        </div>
    </div>
    <div class="col-8">
        <div class="mb-5">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $tool->description) }}</textarea>
        </div>
    </div>
    <div class="col-4 px-5 d-flex flex-column justify-content-start text-capitalize">
        <p class="mb-3">Operative system:</p>
        <div class="form-check">
            <label class="form-check-label" for="windows">windows</label>
            <input class="form-check-input" type="checkbox" id="windows" name="supported_os[]"
                @if ($tool->exists) @if (in_array('windows', $tool->supported_os)) checked @endif @endif value="windows">
        </div>
        <div class="form-check">
            <label class="form-check-label" for="ios">ios</label>
            <input class="form-check-input" type="checkbox" id="ios" name="supported_os[]"
                @if ($tool->exists) @if (in_array('ios', $tool->supported_os)) checked @endif @endif value="ios">
        </div>
        <div class="form-check">
            <label class="form-check-label" for="linux">linux</label>
            <input class="form-check-input" type="checkbox" id="linux" name="supported_os[]"
                @if ($tool->exists) @if (in_array('linux', $tool->supported_os)) checked @endif @endif value="linux">
        </div>
    </div>
    <div class="col-3">
        <div class="mb-3">
            <label for="release_year" class="form-label">Release year:</label>
            <input type="number" class="form-control" id="release_year" name='release_year' min="1950"
                value="{{ old('release_year', $tool->release_year) }}">
        </div>
    </div>
    <div class="col-3">
        <div class="mb-3">
            <label for="latest_version" class="form-label">Latest version:</label>
            <input type="number" class="form-control" id="latest_version" name='latest_version' min="0"
                value="{{ old('latest_version', $tool->latest_version) }}">
        </div>
    </div>
    <div class="col-3">
        <div class="mb-3">
            <label for="vote" class="form-label">Vote:</label>
            <input type="number" min="1" max="5" class="form-control" id="vote" name='vote'
                value="{{ old('vote', $tool->vote) }}">
        </div>
    </div>
    <div class="col-3">
        <div class="mb-3">
            <label for="download_link" class="form-label">Download link:</label>
            <input type="url" class="form-control" id="download_link" name='download_link'
                value="{{ old('download_link', $tool->download_link) }}">
        </div>
    </div>
    <div class="col-3 my-4">
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('tools.index') }}" class="btn btn-success">Back</a>
    </div>
</div>
</form>
