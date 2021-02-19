<div class="form-group">
    <label for="name">Name</label>
    <input type="text" value="{{ old('name',isset($category)?$category->name:null) }}" name="name" class="form-control" id="name" placeholder="Enter user name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="is_featured">Is Featured ?</label>
    <input id="is_featured" type="checkbox" @if(old('is_featured',isset($category)?$category->is_featured:null) == 1) checked @endif name="is_featured" value="1">
    <label for="is_featured">Yes</label>
</div>
<div class="form-group">
    <label for="status">Status</label>
    <br>
    <input id="active" type="radio" @if(old('status',isset($category)?$category->status:null) == 'Active') checked @endif name="status" value="Active">
    <label for="active">Active</label>
    <input id="inactive" type="radio" @if(old('status',isset($category)?$category->status:null) == 'Inactive') checked @endif name="status" value="Inactive">
    <label for="inactive">Inactive</label>
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
