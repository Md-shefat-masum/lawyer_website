<input type="hidden"  name="id" value="{{ $data->id }}" id="">

<div class="form-group">
    <label for="input-1">Name</label> <span class="text-danger">*</span>
    <input type="text" name="name" class="form-control" placeholder="name" value="{{ $data->name }}">
</div>
<div class="form-group">
    <label for="input-1">Email</label> <span class="text-danger">*</span>
    <input type="text" name="email" class="form-control" placeholder="email" value="{{ $data->email }}">
</div>
<div class="form-group">
    <label for="input-1">phone</label> <span class="text-danger">*</span>
    <input type="text" name="phone" class="form-control" placeholder="phone" value="{{ $data->phone }}">
</div>
<div class="form-group">
    <label for="input-1">law_name</label> <span class="text-danger">*</span>
    {{-- <input type="text" name="law_name" class="form-control" placeholder="law_name" value="{{ old('law_name') }}"> --}}
    <select name="law_name" class="form-control">
        @foreach (App\LawList::OrderBy('name','ASC')->where('status',1)->get() as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="input-1">message</label> <span class="text-danger">*</span>
    <input type="text" name="message" class="form-control" placeholder="message" value="{{ $data->message }}">
</div>
