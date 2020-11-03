<input type="hidden"  name="id" value="{{ $data->id }}" id="">

<div class="form-group">
    <label for="input-1">name</label> <span class="text-danger">*</span>
    <input type="text" name="name" class="form-control" placeholder="name" value="{{ $data->name }}">
</div>
<div class="form-group">
    <label for="input-1">description</label> <span class="text-danger">*</span>
    <input type="text" name="description" class="form-control" placeholder="description" value="{{ $data->description }}">
</div>
<div class="form-group">
    <label for="input-1">star</label> <span class="text-danger">*</span>
    <input type="text" name="star" class="form-control" placeholder="star" value="{{ $data->star }}">
</div>
<div class="form-group">
    <label for="input-1">Banner</label> <span class="text-danger">*</span>
    <input type="file" name="banner" class="form-control" placeholder="banner" value="{{ $data->banner }}">
</div>
