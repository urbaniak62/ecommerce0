@extends('layout.template')

@section('content')

<section class="hero text-center">
    {{--  image under nav-bar  --}}
</section>
<div class="row">

    <div class="text-center">
        <div class="subheader">
            <h3>Veuillez completer ce formulaire</h3>
        </div>
    </div>
        <div class="text-left">

            <form methode="post" action="/home" class="col small-12 medium-6 medium-centered large-6 large-centered">
                @csrf()
                <label for="name"><h5>Votre nom :</h5></label>
                <input  type="text" name="name" placeholder="Nom :" required>

                <label for="tel"><h5>Tel :</h5></label>
                <input  type="number" name="tel" placeholder="Tel :" required>

                <label for="email"><h5>Votre Email :</h5></label>
                <input  type="email" name="email" placeholder="email : " required>

                <label for="password"><h5>Votre Mot de Passe :</h5></label>
                <input  type="password" name="password" placeholder="Mot de Passe : "required >

                <label for="password_confirmation"><h5>Confirmez votre mot de passe :</h5></label>
                <input type="password" name="password_confirmation" placeholder="Confirmez votre Mot de Passe : "required>

                <input  type="submit" name="envoyer" placeholder="envoyer" class="button button-link">
            </form> 
        
        </div>
    

</div>



@endsection