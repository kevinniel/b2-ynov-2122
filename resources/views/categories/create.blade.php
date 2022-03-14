<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Categories</title>
</head>
<body>

    <h1>Blog ynov</h1>

    <ul>
        <li><a href="{{ route('home') }}">Retour à l'accueil</a></li>
        <li><a href="{{ route('categories.index') }}">Retour aux catégories</a></li>
    </ul>

    <h2>Ajouter une catégorie</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <button type="submit">Envoyer</button>
    </form>

</body>
</html>