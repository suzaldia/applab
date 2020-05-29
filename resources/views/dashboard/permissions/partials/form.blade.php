@csrf
<div class="form-group">
    <label for="description">Name</label>
    <input class="form-control" type="text" name="name" value="{{ old('name', $permission->name) }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
