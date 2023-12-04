@extends('contact')

@section('main')

<div class="col-md-7 ">
<br>
        <div class="row">
                <form action="{{ url("/contact/{$contact->id}") }}" method="post">
                @method('PATCH')

                @csrf  
                    <div class ="form-group">
                        <label for="full_name">Full Name: </label>
                        <input value="{{$contact->nama}}" class="form-control" type="text" name="full_name">
            </div>
            <div>
               
                    <div class ="form-group">
                        <label for="phone">Phone : </label>
                        <input value="{{$contact->phone}}" class="form-control" type="text" name="phone">
            </div>
            <div>
                
                    <div class ="form-group">
                        <label for="email">Email : </label>
                        <input value="{{$contact->email}}" class="form-control" type="text" name="email">
            </div>
            <div>
                
                    <div class ="form-group">
                        <label for="address">Address : </label>
                        <textarea class="form-control" name="address">{{$contact->address}}</textarea>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-primary">Edit Data Contact</button>
</div>
</form>
</div>
</div>



@endsection