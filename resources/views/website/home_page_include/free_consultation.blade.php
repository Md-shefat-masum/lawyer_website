<div class="free-consultation " id="free-consultation">
    <div class="sec-title mb-45 xs-mb-31 ">
        <div class="sub-title primary ">Schedule For</div>
        <h2 class="title white-color mb-0 ">Free Consultation</h2>
    </div>
    <form method="POST" action="{{ route('website_free_consultation_submit') }}">
        @csrf
        <div class="row ">
            <div class="col-md-6 ">
                <input type="text " name="name" placeholder="Your Name " required>
            </div>
            <div class="col-md-6 ">
                <input type="email " name="email" placeholder="Your Email " required>
            </div>
            <div class="col-md-6 ">
                <input type="text " name="phone" placeholder="Phone " required>
            </div>
            <div class="col-md-6 ">
                <input type="text " name="subject" placeholder="Subject " required>
            </div>
            <div class="col-md-6 col-0 d-none">
                <div class="select-option" >
                    <select name="law_name">
                        @foreach (App\LawList::OrderBy('name','ASC')->where('status',1)->get() as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-12 ">
                <textarea name="message" placeholder="Your Message " required></textarea>
            </div>
        </div>
        <div class="sunbmit-btn mt-30 ">
            <button class="readon upper " type="submit ">Submit request</button>
        </div>
    </form>
</div>

