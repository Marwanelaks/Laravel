@extends("crtl_1.eleves")


@section("title")
{{$type}}
@endsection

@section("content")
@if($type === "eleve")
            @if($method === "voire")
               <div class="card" style="margin:20px;">
               <div class="card-header">{{$datas->prenom}} {{$datas->nom}}</div>
               <div class="card-body">
                     <div class="card-body">
                     <P class="card-title">Prénom : {{ $datas->nom }}</P>
                     <p class="card-text">Nom : {{ $datas->prenom }}</p>
                     <p class="card-text">D.N : {{ $datas->date_naissance }}</p>
               </div>
               </div>
            </div>

            @elseif($method === "edit")
            <div class="card" style="margin:20px;">
               <div class="card-header">{!! "<i>$datas->nom . $datas->prenom</i>" !!}</div>
               <div class="card-body">
                  <form action="{{url('eleve/' .$datas->id)}}" method="POST">
                     @csrf
                     @method("PUT")
                     <label>ID</label></br>
                     <input name="id" id="id" value="{{$datas->id}}" class="form-control" disabled ></br>
                     <label>Nom</label></br>
                     <input type="text" name="nom" value="{{$datas->nom}}"  class="form-control"></br>
                     <label>Prénom</label></br>
                     <input type="text" name="prenom" value="{{$datas->prenom}}" class="form-control"></br>
                     <label>Date de Naissance</label></br>
                     <input type="date" name="date_naissance" value="{{$datas->date_naissance}}" class="form-control"></br>
                     <input type="submit" value="Modifier" class="btn btn-success"></br>
               </form>
               </div>
            </div>
            @else
            <div class="container my-5 m-auto text-center">
               <div class="card">
                  <div class="card-body">
                  <h5 class="card-title">Confirmation !</h5>
                  <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                  <a href={{url("/eleve/list")}}><button  class="btn btn-danger" type="submit">Non</button></a>
                  <form method="POST" action="{{ url('/eleve/supprimer' . '/' . $datas->id) }}" accept-charset="UTF-8" style="display:inline">
                     @method("DELETE")
                     @csrf
                     <button type="submit" class="btn btn-success">Oui</button>
                  </form>
                  </div>
               </div>
               </div>
            @endif
@elseif($type === "note")
               @if($method === "voire")
               <div class="card" style="margin:20px;">
               <div class="card-header">{{$datas->eleve}}</div>
               <div class="card-body">
                     <div class="card-body">
                     <P class="card-title">Note : {{ $datas->note }}</P>
                     <p class="card-text">Eleve : {{ $datas->eleve }}</p>
                     <p class="card-text">Classe : {{ $datas->classe }}</p>
               </div>
               </div>
               </div>

               @elseif($method === "edit")
               <div class="card" style="margin:20px;">
               <div class="card-header">{!! "<i>$datas->eleve</i>" !!}</div>
               <div class="card-body">
                  <form action="{{url('notes/' .$datas->id)}}" method="POST">
                     @csrf
                     @method("PUT")
                     <label>ID</label></br>
                     <input name="id" id="id" value="{{$datas->id}}" class="form-control" disabled ></br>
                     <label>Note</label></br>
                     <input type="text" name="note" value="{{$datas->note}}"  class="form-control"></br>
                     <label>Eleve</label></br>
                     <input type="text" name="eleve" value="{{$datas->eleve}}" class="form-control"></br>
                     <label>Classe</label></br>
                     <input type="text" name="classe" value="{{$datas->classe}}" class="form-control"></br>
                     <input type="submit" value="Modifier" class="btn btn-success"></br>
               </form>
               </div>
               </div>
               @else
               <div class="container my-5 m-auto text-center">
               <div class="card">
                  <div class="card-body">
                  <h5 class="card-title">Confirmation !</h5>
                  <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                  <a href={{url("/notes/list")}}><button  class="btn btn-danger" type="submit">Non</button></a>
                  <form method="POST" action="{{ url('/notes/supprimer' . '/' . $datas->id) }}" accept-charset="UTF-8" style="display:inline">
                     @method("DELETE")
                     @csrf
                     <button type="submit" class="btn btn-success">Oui</button>
                  </form>
                  </div>
               </div>
               </div>
               @endif

@elseif($type === "cours")
               @if($method === "voire")
               <div class="card" style="margin:20px;">
               <div class="card-header">{{$datas->nom}}</div>
               <div class="card-body">
                     <div class="card-body">
                     <P class="card-title">Nom : {{ $datas->nom }}</P>
                     <p class="card-text">Durée : {{ $datas->duree }}</p>
                     <p class="card-text">Matiére : {{ $datas->matiere }}</p>
                     <p class="card-text">Enseignant : {{ $datas->enseignant }}</p>
                  </div>
               </div>
               </div>

               @elseif($method === "edit")
               <div class="card" style="margin:20px;">
               <div class="card-header">{!! "<i>$datas->nom</i>" !!}</div>
               <div class="card-body">
                  <form action="{{url('cours/' .$datas->id)}}" method="POST">
                     @csrf
                     @method("PUT")
                     <label>ID</label></br>
                     <input name="id" id="id" value="{{$datas->id}}" class="form-control" disabled ></br>
                     <label>Nom</label></br>
                     <input type="text" name="nom" value="{{$datas->nom}}"  class="form-control"></br>
                     <label>Durée</label></br>
                     <input type="text" name="duree" value="{{$datas->duree}}" class="form-control"></br>
                     <label>Matière</label></br>
                     <input type="date" name="matiere" value="{{$datas->matiere}}" class="form-control"></br>
                     <label>Enseignant</label></br>
                     <input type="date" name="enseignant" value="{{$datas->enseignant}}" class="form-control"></br>
                     <input type="submit" value="Modifier" class="btn btn-success"></br>
               </form>
               </div>
               </div>
               @else
               <div class="container my-5 m-auto text-center">
               <div class="card">
                  <div class="card-body">
                  <h5 class="card-title">Confirmation !</h5>
                  <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                  <a href={{url("/cours/list")}}><button  class="btn btn-danger" type="submit">Non</button></a>
                  <form method="POST" action="{{ url('/cours/supprimer' . '/' . $datas->id) }}" accept-charset="UTF-8" style="display:inline">
                     @method("DELETE")
                     @csrf
                     <button type="submit" class="btn btn-success">Oui</button>
                  </form>
                  </div>
               </div>
               </div>
               @endif
               
@elseif($type === "matieres")
               @if($method === "voire")
                  <div class="card" style="margin:20px;">
                  <div class="card-header">{{$datas->nom}}</div>
                  <div class="card-body">
                        <div class="card-body">
                        <P class="card-title">Nom de matière : {{ $datas->nom }}</P>
                        <p class="card-text">Coefficient : {{ $datas->coefficient }}</p>
                        <p class="card-text">Enseignant : {{ $datas->enseignant }}</p>
                  </div>
                  </div>
               </div>
   
               @elseif($method === "edit")
               <div class="card" style="margin:20px;">
                  <div class="card-header">{!! "<i>$datas->nom</i>" !!}</div>
                  <div class="card-body">
                     <form action="{{url('matieres/' .$datas->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                        <label>ID</label></br>
                        <input name="id" id="id" value="{{$datas->id}}" class="form-control" disabled ></br>
                        <label>Nom</label></br>
                        <input type="text" name="nom" value="{{$datas->nom}}"  class="form-control"></br>
                        <label>Coefficient</label></br>
                        <input type="number" name="coefficient" value="{{$datas->coefficient}}" class="form-control"></br>
                        <label>Enseignant</label></br>
                        <input type="date" name="enseignant" value="{{$datas->enseignant}}" class="form-control"></br>
                        <input type="submit" value="Modifier" class="btn btn-success"></br>
                  </form>
                  </div>
               </div>
               @else
               <div class="container my-5 m-auto text-center">
                  <div class="card">
                     <div class="card-body">
                     <h5 class="card-title">Confirmation !</h5>
                     <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                     <a href={{url("/matieres/list")}}><button  class="btn btn-danger" type="submit">Non</button></a>
                     <form method="POST" action="{{ url('/matieres/supprimer/'.$datas->id) }}" accept-charset="UTF-8" style="display:inline">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-success">Oui</button>
                     </form>
                     </div>
                  </div>
                  </div>
               @endif
   @elseif($type === "emploi")
                  @if($method === "voire")
                  <div class="card" style="margin:20px;">
                  <div class="card-header">{{$datas->Jour}}</div>
                  <div class="card-body">
                        <div class="card-body">
                        <P class="card-title">Note : {{ $datas->CC }}</P>
                        <p class="card-text">Eleve : {{ $datas->D1 }}</p>
                        <p class="card-text">Classe : {{ $datas->D2 }}</p>
                        <P class="card-title">Note : {{ $datas->D3 }}</P>
                        <p class="card-text">Eleve : {{ $datas->D4 }}</p>
                  </div>
                  </div>
                  </div>
   
                  @elseif($method === "edit")
                  <div class="card" style="margin:20px;">
                  <div class="card-header">{!! "<i>$datas->Jour</i>" !!}</div>
                  <div class="card-body">
                     <form action="{{url('emplois/' .$datas->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                        <label>ID</label></br>
                        <input name="id" id="id" value="{{$datas->id}}" class="form-control" disabled ></br>
                        <label>CC</label></br>
                        <input type="text" name="CC" value="{{$datas->CC}}"  class="form-control"></br>
                        <label>Jour</label></br>
                        <input type="text" name="Jour" value="{{$datas->Jour}}" class="form-control"></br>
                        <label>Classe</label></br>
                        <input type="text" name="D1" value="{{$datas->D1}}" class="form-control"></br>
                        <label>Note</label></br>
                        <input type="text" name="D2" value="{{$datas->D2}}"  class="form-control"></br>
                        <label>Eleve</label></br>
                        <input type="text" name="D3" value="{{$datas->D3}}" class="form-control"></br>
                        <label>Classe</label></br>
                        <input type="text" name="D4" value="{{$datas->D4}}" class="form-control"></br>
                        <input type="submit" value="Modifier" class="btn btn-success"></br>
                  </form>
                  </div>
                  </div>
                  @else
                  <div class="container my-5 m-auto text-center">
                  <div class="card">
                     <div class="card-body">
                     <h5 class="card-title">Confirmation !</h5>
                     <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                     <a href={{url("/emplois/list")}}><button  class="btn btn-danger" type="submit">Non</button></a>
                     <form method="POST" action="{{ url('/emplois/supprimer' . '/' . $datas->id) }}" accept-charset="UTF-8" style="display:inline">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-success">Oui</button>
                     </form>
                     </div>
                  </div>
                  </div>
                  @endif
   
   @elseif($type === "enseignant")
                  @if($method === "voire")
                  <div class="card" style="margin:20px;">
                  <div class="card-header">{{$datas->nom . $datas->prenom}}</div>
                  <div class="card-body">
                        <div class="card-body">
                        <P class="card-title">Nom : {{ $datas->nom }}</P>
                        <p class="card-text">Prénom : {{ $datas->prenom }}</p>
                        <p class="card-text">Spécialité : {{ $datas->spécialité }}</p>
                     </div>
                  </div>
                  </div>
   
                  @elseif($method === "edit")
                  <div class="card" style="margin:20px;">
                  <div class="card-header">{!! "<i>$datas->nom . $datas->prenom</i>" !!}</div>
                  <div class="card-body">
                     <form action="{{url('enseignant/' .$datas->id)}}" method="POST">
                        @csrf
                        @method("PUT")
                        <label>ID</label></br>
                        <input name="id" id="id" value="{{$datas->id}}" class="form-control" disabled ></br>
                        <label>Nom</label></br>
                        <input type="text" name="nom" value="{{$datas->nom}}"  class="form-control"></br>
                        <label>Prénom</label></br>
                        <input type="text" name="prenom" value="{{$datas->prenom}}" class="form-control"></br>
                        <label>Spécialité</label></br>
                        <input type="text" name="specailite" value="{{$datas->spécialité}}" class="form-control"></br>
                        <input type="submit" value="Modifier" class="btn btn-success"></br>
                  </form>
                  </div>
                  </div>
                  @else
                  <div class="container my-5 m-auto text-center">
                  <div class="card">
                     <div class="card-body">
                     <h5 class="card-title">Confirmation !</h5>
                     <p class="card-text">t'es sure que tu veux supprimer les informations de cet éleve </p>
                     <a href={{url("/enseignant/list")}}><button  class="btn btn-danger" type="submit">Non</button></a>
                     <form method="POST" action="{{ url('/enseignant/supprimer/' . $datas->id) }}" accept-charset="UTF-8" style="display:inline">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-success">Oui</button>
                     </form>
                     </div>
                  </div>
                  </div>
                  @endif              

@endif

@endsection