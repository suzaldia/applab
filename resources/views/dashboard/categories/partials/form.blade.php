@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" value="{{ old('name', $category->name) }}">
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input class="form-control" type="text" name="description" value="{{ old('description', $category->description) }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
