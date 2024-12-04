<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Libelle</th>
            <th>Prix</th>   
        </tr>
        
        @foreach ($produits as $produit)
        <tr>
            <td>{{$produit->libelle}}</td>
            <td>{{$produit->prix}}</td>
        </tr>
        @endforeach
        
    </table>
    <a href="{{route('produits.create')}}">ajouter</a>
</body>
</html>