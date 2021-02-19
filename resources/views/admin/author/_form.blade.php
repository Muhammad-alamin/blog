
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" value="{{ old('name',isset($author)?$author->name:null) }}" name="name" class="form-control" id="name" placeholder="Enter author name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" value="{{ old('email',isset($author)?$author->email:null) }}" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" value="{{ old('phone',isset($author)?$author->phone:null) }}" name="phone" class="form-control" id="phone" placeholder="Enter phone number">
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" id="address" cols="30" rows="3" class="form-control" placeholder="Enter address here">{{ old('address',isset($author)?$author->address:null) }}</textarea>
    @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="photo">Author Image</label>
    <br>
    <input type="file" name="photo" id="photo">
    @error('photo')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="status">Status</label>
    <br>
    <input id="active" type="radio" @if(old('status',isset($author)?$author->status:null) == 'Active') checked @endif name="status" value="Active">
    <label for="active">Active</label>
    <input id="inactive" type="radio" @if(old('status',isset($author)?$author->status:null) == 'Inactive') checked @endif name="status" value="Inactive">
    <label for="inactive">Inactive</label>
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
