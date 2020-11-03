<input type="hidden"  name="id" value="{{ $data->id }}" id="">

<div class="form-group">
    <label for="input-1">Question</label> <span class="text-danger">*</span>
    <input type="text" name="question" class="form-control" placeholder="Question" value="{{ $data->question }}">
</div>
<div class="form-group">
    <label for="input-1">Answer</label> <span class="text-danger">*</span>
    <input type="text" name="answer" class="form-control" placeholder="answer" value="{{ $data->answer }}">
</div>
