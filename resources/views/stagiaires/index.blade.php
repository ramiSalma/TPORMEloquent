@extends('welcome') 
@section('content')
  <div class="container">
       
        {{$stagiaires->links()}}
        <table class="table table-dark container">
            <tr>
                <th>first name</th>
                <th>last name</th>
                <th>age</th>
                <th>details</th>
                <th>edit stagiaire</th>
                <th>delete stagiaire</th>
            </tr>
        @foreach($stagiaires as $stagiaire)
            <tr>
                <td>{{ $stagiaire->nom }}</td>
                <td>{{ $stagiaire->prenom }}</td>
                <td>{{ $stagiaire->age }}</td>
                <td> <a href="{{url('/stagiaires/'. $stagiaire->id)}}" class="btn btn-outline-success">more details</a></td>  
                <td>  
                    <a href="{{url('/stagiaires/'.$stagiaire->id.'/edit')}}" class="btn btn-outline-warning">update</a>
                </td>
                <td> 
                    <form action="{{url('/stagiaires/'. $stagiaire->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" onclick="return confirm('are you sure?')">delete</button>
                    </form>
                </td>
               
            <tr></tr>

        @endforeach
        
        </table>
      
        
    </div>
@endsection