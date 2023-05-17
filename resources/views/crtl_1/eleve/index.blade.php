@extends("crtl_1.eleves")

@section("title")
{{$type}}
@endsection

@section("content")
@if($type === "eleve")

<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="{{ url('/eleve/create') }}" class="btn btn-success btn-sm" >
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Nom</th>
                                   <th>Prénom</th>
                                   <th>Date de Naissance</th>
                                   <th>Actions</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($data as $eleve)
                               <tr>
                                   <td>{{ $loop->iteration }}</td>
                                   <td>{{ $eleve->nom }}</td>
                                   <td>{{ $eleve->prenom }}</td>
                                   <td>{{ $eleve->date_naissance }}</td>
                                   
                                   <td>
                                       <a href="{{ url('/eleve/' . $eleve->id .'/' . "voire") }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="{{ url('/eleve/' . $eleve->id .'/' . "edit" ) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="{{ url('/eleve/' . $eleve->id .'/' . "supprimer") }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

@elseif($type === "notes")


<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="{{ url('/note/create') }}" class="btn btn-success btn-sm" >
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Note</th>
                                   <th>Eleve</th>
                                   <th>Classe</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($data as $nots)
                               <tr>
                                   <td>{{ $nots->note }}</td>
                                   <td>{{ $nots->eleve }}</td>
                                   <td>{{ $nots->classe }}</td>
                                   
                                   <td>
                                       <a href="{{ url('/note/' . $nots->id .'/' . "voire") }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="{{ url('/note/' . $nots->id .'/' . "edit" ) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="{{ url('/note/' . $nots->id .'/' . "supprimer") }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>
@elseif($type === "emplois")

<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="{{ url('/emplois/create') }}" class="btn btn-success btn-sm" >
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Jour</th>
                                   <th>D1</th>
                                   <th>D2</th>
                                   <th>D3</th>
                                   <th>D4</th>
                                   <th>CC</th>
                                  
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($data as $emp)
                               <tr>
                                   <td>{{ $emp->Jour }}</td>
                                   <td>{{ $emp->D1 }}</td>
                                   <td>{{ $emp->D2 }}</td>
                                   <td>{{ $emp->D3 }}</td>
                                   <td>{{ $emp->D4 }}</td>
                                   <td>{{ $emp->CC }}</td>
                                   <td>
                                       <a href="{{ url('/emploi/' . $emp->id .'/' . "voire") }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="{{ url('/emploi/' . $emp->id .'/' . "edit" ) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="{{ url('/emploi/' . $emp->id .'/' . "supprimer") }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

@elseif($type === "matieres")

<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="{{ url('/matiere/create') }}" class="btn btn-success btn-sm" >
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Nom</th>
                                   <th>Coefficient</th>
                                   <th>Enseignant(e)</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($data as $matiere)
                               <tr>
                                   <td>{{ $matiere->nom }}</td>
                                   <td>{{ $matiere->coefficient }}</td>
                                   <td>{{ $matiere->enseignant }}</td>
                                   
                                   <td>
                                       <a href="{{ url('/matieres/' . $matiere->id .'/' . "voire") }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="{{ url('/matieres/' . $matiere->id .'/' . "edit" ) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="{{ url('/matieres/' . $matiere->id .'/' . "supprimer") }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

@elseif($type === "cours")

<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="{{ url('/cours/create') }}" class="btn btn-success btn-sm">
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Nom</th>
                                   <th>Durée (par heures)</th>
                                   <th>Matière</th>
                                   <th>Enseignant(e)</th>
                                 </tr>
                           </thead>
                           <tbody>
                           @foreach($data as $cours)
                               <tr>
                                   <td>{{ $cours->nom }}</td>
                                   <td>{{ $cours->duree }}</td>
                                   <td>{{ $cours->matiere }}</td>
                                   <td>{{ $cours->enseignant }}</td>
                                   <td>
                                       <a href="{{ url('/cours/' . $cours->id .'/' . "voire") }}" ><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="{{ url('/cours/' . $cours->id .'/' . "edit" ) }}" ><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="{{ url('/cours/' . $cours->id .'/' . "supprimer") }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

@elseif($type === "enseignant")

<div class="container">
   <div class="row" style="margin:20px;">
       <div class="col-12">
           <div class="card">
               <div class="card-header">
                   <h2></h2>
               </div>
               <div class="card-body">
                   <a href="{{ url('/enseignant/create') }}" class="btn btn-success btn-sm" >
                       Add New
                   </a>
                   <br/>
                   <br/>
                   <div class="table-responsive">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Nom</th>
                                   <th>Prènom</th>
                                   <th>Spécialié</th>
                               </tr>
                           </thead>
                           <tbody>
                           @foreach($data as $ens)
                               <tr>
                                   <td>{{ $ens->nom}}</td>
                                   <td>{{ $ens->prenom }}</td>
                                   <td>{{ $ens->spécialité }}</td>
                                   
                                   <td>
                                       <a href="{{ url('/enseignant/' . $ens->id .'/' . "voire") }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voire</button></a>
                                       <a href="{{ url('/enseignant/' . $ens->id .'/' . "edit" ) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                       <a href="{{ url('/enseignant/' . $ens->id .'/' . "supprimer") }}"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Supprimer</button></a>
                                      
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>
   </div>
</div>

@endif
@endsection
