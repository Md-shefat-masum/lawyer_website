
<div class="form-group">
    <label for="input-1">Heading 1</label> <span class="text-danger">*</span>
    <input type="text" name="heading_1" class="form-control" placeholder="Heading 1" value="{{ old('heading_1') }}">
</div>
<div class="form-group">
    <label for="input-1">Heading 2</label> <span class="text-danger">*</span>
    <input type="text" name="heading_2" class="form-control" placeholder="Heading 2" value="{{ old('heading_2') }}">
</div>

<div class="form-group">
    <label for="input-2">Photo</label> <span class="text-danger">*</span>
    <input type="file" style="height: 43px;" name="banner_image" class="form-control" placeholder="Photo" value="{{ old('photo') }}">
</div>
