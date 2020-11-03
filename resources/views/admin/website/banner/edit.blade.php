<input type="hidden"  name="id" value="{{ $data->id }}" id="">

<div class="form-group">
    <label for="input-1">Heading 1</label> <span class="text-danger">*</span>
    <input type="text" name="heading_1" class="form-control" placeholder="Heading 1" value="{{ $data->heading_1 }}">
</div>
<div class="form-group">
    <label for="input-1">Heading 2</label> <span class="text-danger">*</span>
    <input type="text" name="heading_2" class="form-control" placeholder="Heading 2" value="{{ $data->heading_2 }}">
</div>

<div class="form-group">
    <div class="row">
        <div class="col-8">
            <label for="input-2">Banner Image</label> <span class="text-danger">*</span>
            <input type="file" style="height: 43px;" name="banner_image" class="form-control" placeholder="Photo" value="{{ old('photo') }}">
        </div>
        <div class="col-4">
            <img src="{{ asset(''.$data->banner_image) }}" alt="banner" style="height: 70px;">
        </div>
    </div>
</div>
