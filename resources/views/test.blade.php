<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livraison</title>

        <link rel="stylesheet" href="form.css">

        <style>
            body{background:#0b5b90;margin:0}
.form{
    width: 340px;
    height: 440px;
    background: #e6e6e6;
    border-radius: 8px;
    box-shadow: 0 0 40px -10px #000;
    margin: calc(50vh - 220px) auto;
    padding: 20px 30px;
    max-width: calc(100vw - 40px);
    box-sizing: border-box;
    font-family: 'Montserrat',sans-serif;
    position: relative;
}

input{
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    background: none;
    outline: none;
    resize: none;
    border: 0;
    font-family: 'Montserrat',sans-serif;
    transition: all .3s;
    border-bottom: 2px solid #bebed2;
}
button{
    float: right;
    padding: 8px 12px;
    margin: 8px 0 0;
    font-family: 'Montserrat',sans-serif;
    border: 2px solid #78788c;
    background: 0;
    color: #5a5a6e;
    cursor: pointer;
    transition: all .3s;
}

        </style>
    </head>
    <body >
        
            <form action="{{ route('test.submit') }}" method="post" class="form">
                @csrf
                <label for="Nom">Nom</label>
                <input type="text" name="nom">
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" >
                <label for="Phone">Phone</label>
                <input type="tel" name="phone">
                <label for="prix">Prix</label>
                <input type="number" >
                
                <button type="submit">Envoyer</button>
                </form>
      
      
       
    </body>
</html>
