
<div class="col-md-6">
    <div class="form-floating">
        <input {{$attributes -> merge(['class'=>'form-control','type'=>'text','placeholder'=>'rellena el campo'])}} />
        <label {{$attributes}}>{{$slot}}</label>
    </div>
</div>