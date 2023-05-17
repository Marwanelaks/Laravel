@extends("crtl_1.eleves")


@section("title")
{{$type}}
@endsection

@section("content")
@if($type==="eleve")
<div class="card" style="margin:20px;">
      <div class="card-header">Créer nouvel espace éleve</div>
      <div class="card-body">
          <form method="post" action="{{ url("eleve/creation") }}">
            @csrf
            <label>Nom</label></br>
            <input type="text" name="nom"  class="form-control"></br>
            <label>Prénom</label></br>
            <input type="text" name="prenom" class="form-control"></br>
            <label>Date de Naissance</label></br>
            <input type="date" name="date_naissance" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
      </div>
</div>
@elseif($type==="note")
<div class="card" style="margin:20px;">
      <div class="card-header">saisir nouvelle note</div>
      <div class="card-body">
          <form method="post" action="{{ url("notes/creation") }}">
            @csrf
            <label>Note</label></br>
            <input type="text" name="note"  class="form-control"></br>
            <label>eleve</label></br>
            <input type="text" name="eleve" class="form-control"></br>
            <label>classe</label></br>
            <input type="text" name="classe" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
      </div>
</div>

@elseif($type==="emplois")
<div class="card" style="margin:20px;">
      <div class="card-header">saisir matiere</div>
      <div class="card-body">
          <form method="post" action="{{ url("emplois/creation") }}">
            @csrf
            <label>Nom</label></br>
            <input type="text" name="Jour"  class="form-control"></br>
            <label>Durée 1</label></br>
            <input type="text" name="D1" class="form-control" placeholder="8-10"></br>
            <label>Durée 2</label></br>
            <input type="text" name="D2" class="form-control" placeholder="10-12"></br>
            <label>Durée 3</label></br>
            <input type="text" name="D3" class="form-control" placeholder="2-4"></br>
            <label>Durée 4</label></br>
            <input type="text" name="D4" class="form-control" placeholder="4-6"></br>
            <label>Classe</label></br>
            <input type="text" name="CC" class="form-control" placeholder="DEVOPS303"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
      </div>
</div>

@elseif($type === "matiere")
<div class="card" style="margin:20px;">
      <div class="card-header">saisir matière</div>
      <div class="card-body">
          <form method="post" action="{{ url("matieres/creation") }}">
            @csrf
            <label>Nom</label></br>
            <input type="text" name="nom"  class="form-control"></br>
            <label>Coefficient</label></br>
            <input type="number" name="coefficient" class="form-control" placeholder="Nom de matière"></br>
            <label>Enseignant(e)</label></br>
            <input type="text" name="enseignant" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
      </div>
</div>

@elseif($type === "cours")
<div class="card" style="margin:20px;">
      <div class="card-header">saisir cours</div>
      <div class="card-body">
          <form method="post" action="{{ url("cours/creation") }}">
            @csrf
            <label>Nom</label></br>
            <input type="text" name="nom"  class="form-control"></br>
            <label>Durée (par heures)</label></br>
            <input type="text" name="duree" class="form-control" ></br>
            <label>Matière</label></br>
            <input type="text" name="matiere" class="form-control"></br>
            <label>Enseignant(e)</label>
            <input type="text" name="enseignant" class="form-control" >
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
      </div>
</div>

@elseif($type === "enseignant")
<div class="card" style="margin:20px;">
      <div class="card-header">saisir enseignant</div>
      <div class="card-body">
          <form method="post" action="{{ url("enseignant/creation") }}">
            @csrf
            <label>Nom</label></br>
            <input type="text" name="nom"  class="form-control"></br>
            <label>Prénom</label></br>
            <input type="text" name="prenom" class="form-control" ></br>
            <label>Spécialité</label></br>
            <input type="text" name="spécialité" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
      </div>
</div>

@endif

@endsection

