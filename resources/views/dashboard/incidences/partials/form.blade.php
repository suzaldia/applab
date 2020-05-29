@csrf

<div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" value="{{ old('title', $incidence->title) }}">
</div>

<div class="form-group">
    <label for="priority">Priority</label>
    <select class="form-control" name="priority" id="priority">
        @include('dashboard.incidences.partials.priority', ['value' => $incidence->priority])
    </select>
</div>
<div class="form-group">
    <label for="category_id">Category</label>
    <select class="form-control" name="category_id" id="category_id">
        @foreach ($categories as $name => $id)
            <option {{ $incidence->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">{{ $name }} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $incidence->description) }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
