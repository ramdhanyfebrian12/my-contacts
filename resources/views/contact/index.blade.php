
@extends('contact')

@section('main')

 <div class = "row">
        <div class ="col-md-12">
        <a href="{{ url("contact/create") }}" class="btn btn-success mb-1">Tambah Data Baru</a>

          <table class="table table-striped">
               <thead>
                 <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th colspan ="2">Action</th>
                 </tr>
             </thead>
             <tbody>
            @foreach ($contact as $contacts)
            <tr>
                <td>{{$contacts->id}}</td>
                <td>{{$contacts->nama}}</td>
                <td>{{$contacts->email}}</td>
                <td>{{$contacts->phone}}</td>
                <td>{{$contacts->address}}</td>
               <td>
                <a class="btn btn-primary" href="{{url ("contact/{$contacts->id}/edit") }}">EDIT</a>
                </td>
                <td>
                <form action="{{url("contact/{$contacts->id}")}}" method="post">
                          @csrf
                            @method('DELETE')
                      <button class="btn btn-danger">HAPUS</button>    
                </form>
                
                </td>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
