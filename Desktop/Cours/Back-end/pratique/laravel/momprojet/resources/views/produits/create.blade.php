<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('produits.store')}}" method="post">
        <div>
            <label for="">Libelle</label>
            <input type="text" name="libelle">
            @error('libelle')
                <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="">Prix</label>
            <input type="text" name="prix">
            @error('prix')
            <div>{{$message}}</div>
        @enderror
        </div>
        <input type="submit" value="add">
        @csrf
    </form>
</body>
</html>