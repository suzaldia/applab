@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" value="{{ old('name', $type->name) }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
