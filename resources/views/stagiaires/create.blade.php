
    <style>
        .rounded-right{
            border-radius: 0 200px  200px 0;
        }
    </style>

    @extends('welcome')
    @section('content')
    <div class="container p-4 ">
        <div class="row  bg-black">
            <div class="bg-success col-6 rounded-right align-content-center text-center">
                   <h1 class="text-warning text-capitalize  h4" >ajouter un stagiaire</h1>
                   <h6 class="text-warning text-capitalize h4" >you have to enter all filed or it doesn\t</h6>
                   <h6 class="text-warning text-capitalize h4" >saved in data base</h6>
               </div>


           <form action="{{url('/stagiaires')}}" method="POST" class=" col-5 px-4 bg-black my-5">
               
               @csrf
               <div class="form-group my-3">
                   <label class="text-warning my-2"  for="">name: </label>
                   <input type="text" class="form-control bg-black border border-2 border-success text-success" name="nom" id="nom"  placeholder="">
               </div>
               <div class="form-group my-3">
                   <label  class="text-warning my-2" for="">last name: </label>
                   <input type="text" class="form-control bg-black border border-2 border-success text-success" name="prenom" id="prenom"  placeholder="">
               </div>
               <div class="form-group my-3">
                   <label  class="text-warning my-2" for="">age: </label>
                   <input type="age" class="form-control bg-black border border-2 border-success text-success" name="age" id="age"  placeholder="">
               </div>
               <div class="form-group my-3">
                   <label  class="text-warning my-2" for="">email: </label>
                   <input type="email" class="form-control bg-black border border-2 border-success text-success" name="email" id="email"  placeholder="">
               </div>
                   <label  class="text-warning my-2" for="">password: </label>
                   <input type="password" class="form-control bg-black border border-2 border-success text-success" name="password" id="password"  placeholder="">
                </div>
                <button type="submit" class="btn btn-warning my-3"> ajouter un stagiaire</button>
           </form>
       </div>
    </div>
    
    @endsection
