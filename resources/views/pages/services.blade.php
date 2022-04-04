@extends('layouts.app')

@section('title')
    services
@endsection

@section('contenu')
 <div class="Hasina" >
  <!--<h1>My First Heading</h1>

  <p>My first paragraph.</p>
  <h2>HTML Links</h2>
  <p>HTML links are defined with the a tag:</p>
<h1>Bienvenus dans la page services </h1>
<a href="https://www.w3schools.com">This is a link</a>-->
    @foreach($produits as $produit)
        <div class="well">
               <h1><a href="">{{$produit->Product_name}}</a></h1>
        </div>
  
@endforeach
{{$produits->links()}}
@endsection 