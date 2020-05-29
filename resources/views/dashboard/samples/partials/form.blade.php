@csrf
<div class="form-group">
    <label for="tag">TAG</label>
    <input class="form-control" type="text" name="tag" value="{{ old('tag', $sample->tag) }}">
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input class="form-control" type="text" name="description" value="{{ old('description', $sample->description) }}">
</div>
<div class="form-group">
    <label for="collected_at">Collected at</label>
    <input class="form-control" type="date" name="collected_at" value="{{ old('collected_at', $sample->collected_at) }}">
</div>
<div class="form-group">
    <label for="type_id">Type</label>
    <select class="form-control" name="type_id" id="type_id">
        @foreach ($types as $name => $id)
            <option {{ $sample->type_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="parametre_id">Parametre</label>
    <select class="form-control" name="parametre_id" id="parametre_id">
        @foreach ($parametres as $name => $id)
            <option {{ $sample->parametre_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
</div>
@if($stat)
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="status" id="status">
            @include('dashboard.samples.partials.status', ['value' => $sample->status])
        </select>
    </div>
@endif

<button type="submit" class="btn btn-primary">Submit</button>
