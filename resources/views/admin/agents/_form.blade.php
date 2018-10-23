<div class="form-group">
    <label for="name">Name</label>
    <input type="text"
           class="{{ $errors->has('name') ? 'form-control is-invalid' : 'form-control' }}" id="name"
           name="name" value="{{ old('name', isset($producer) ? $producer->name : null) }}">
    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
</div>
<div class="form-group">
    <label for="email">Email Address</label>
    <input type="email"
           class="{{ $errors->has('email') ? 'form-control is-invalid' : 'form-control' }}"
           id="email" name="email"
           value="{{ old('email', isset($producer) ? $producer->email : null) }}">
    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
</div>

<div class="form-group mb-4">
    <label for="status">Status</label>
    <select class="{{ $errors->has('status') ? 'form-control is-invalid' : 'form-control' }}"
            id="status" name="status">
        @foreach(status() as $id => $name)
            <option {{ old('status', isset($producer) ? $producer->status : -1) == $id ? 'selected' : '' }} value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback">{{ $errors->first('status') }}</div>
</div>