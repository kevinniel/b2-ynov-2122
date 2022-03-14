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
        <li><a href="{{ route('categories.create') }}">Ajouter une catégorie</a></li>
    </ul>

    <h2>Liste des catégories</h2>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($categories) && !empty($categories))
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}">modifier</a>

                            <form action="{{ route('categories.delete') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="category_id" value="{{ $category->id }}">
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <script>
        let dels = document.querySelectorAll(".del");
        dels.forEach(element => {
            element.addEventListener("click", function(event){
                alert('êtes vous sûr ?');
            })
        });
    </script>
</body>
</html>