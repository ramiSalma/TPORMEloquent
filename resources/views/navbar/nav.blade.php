<div class="container">
    <h1 class="text-success text-center text-capitalize my-3">gestion de stagiaires
        <span class="h6 text-secondary">by salma rami</span>
    </h1>
    <div class="bg-dark my-2 d-flex justify-content-start p-4">
        <a href="{{url('/stagiaires')}}" class="btn btn-success ">list of student</a>
        <a href="{{url('/stagiaires/create')}}" class="btn btn-primary mx-3 ">add a student</a>

        <form action="{{ route('deleteAll') }}" class="d-flex" method="POST" >
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mx-3"  onclick="return confirm('Are you sure you want to delete all stagiaires?');">delete all</button>
        </form>
        <form action="" method="post">
            @csrf
            <input class="bg-dark mx-3 border-2 border-warning py-2 text-white" name="nom" placeholder="search by id" type="text">
            <button class="btn btn-success " type="submit">search</button>
        </form>

        

    </div>
    
</div>

