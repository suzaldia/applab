@csrf
<div class="form-group">
    <label for="name">Name</label>
<input class="form-control" type="text" name="name" value="{{ old('name', $user->name) }}">
</div>
<div class="form-group">
    <label for="surname">Surname</label>
<input class="form-control" type="text" name="surname" value="{{ old('surname', $user->surname) }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
<input class="form-control" type="email" name="email" value="{{ old('email', $user->email) }}">
</div>
<div class="form-group {{ $errors->has('roles') ? 'has-error' : '' }}">
    <label for="roles">Roles
        <span class="btn btn-info btn-xs select-all">Select all</span>
        <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
    <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
        @foreach($roles as $id => $roles)
            <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? 'selected' : '' }}>{{ $roles }}</option>
        @endforeach
    </select>
    @if($errors->has('roles'))
        <em class="invalid-feedback">
            {{ $errors->first('roles') }}
        </em>
    @endif
</div>
@if($pass)
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" value="{{ old('password', $user->password) }}">
    </div> 
@endif

<button type="submit" class="btn btn-primary">Submit</button>
