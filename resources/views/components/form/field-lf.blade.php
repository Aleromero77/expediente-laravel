
<div class="col-md-6">
    <div class="form-floating mb-3 mb-md-0">
        <input {{$attributes -> merge(['class'=>'form-control','type'=>'text','placeholder'=>'rellena el campo'])}} />
        <label {{$attributes}}>{{$slot}}</label>
    </div>
</div>

