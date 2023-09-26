<div class="form-floating mb-3">
    <input  {{$attributes -> merge(['class'=>'form-control','placeholder'=>'rellena el campo'])}} />
    <label  {{$attributes}}>{{$slot}}</label>
</div>
