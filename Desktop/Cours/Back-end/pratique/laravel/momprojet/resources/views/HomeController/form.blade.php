<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" class="@error('nom') is-invalid @enderror" value="{{ old('nom') }}">
            @error('nom')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="prnm">Prénom :</label>
            <input type="text" name="prnm" class="@error('prnm') is-invalid @enderror" value="{{ old('prnm') }}">
            @error('prnm')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="text" name="email" class="@error ('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="tel">Tel :</label>
            <input type="text" name="tel" class="@error('tel') is-invalid @enderror" value="{{ old('tel') }}">
            @error('tel')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="sex">Sex :</label>
            <label for="F">Femme</label>
            <input type="radio" name="sex" value="F" {{ old('sex')=='F' ? 'checked':'' }}>
            <label for="H">Homme</label>
            <input type="radio" name="sex" value="H" {{ old('sex')=='H' ? 'checked':'' }}>
            @error('sex')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="filiere">Filière :</label>
            <select name="filiere">
                <option value="DD" @selected(old('filiere')=='DD')>Développement digital</option>
                <option value="ID" @selected(old('filiere')=='ID')>Infrastructure digital</option>
            </select>
            @error('filiere')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="option">Option :</label>
            <label for="mobile">Mobile</label>
            <input type="checkbox" name="option" value="mobile" {{ old('option')=='mobile' ? 'checked':'' }}>
            <label for="Web">Web</label>
            <input type="checkbox" name="option" value="web" {{ old('option')=='web' ? 'checked':'' }}>
            <label for="RV">Réalité virtuelle</label>
            <input type="checkbox" name="option" value="RV" {{ old('option')=='RV' ? 'checked':'' }}>
            @error('option')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="mssg">Message</label>
            <textarea name="mssg" class="@error('mssg') is-invalid @enderror">{{ old('mssg') }}</textarea>
            @error('mssg')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="@error('photo') is-invalid @enderror">
            @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="submit" name="btn" value="Envoyer">
        </div>
    </form>
    
</body>
</html>