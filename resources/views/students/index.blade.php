<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container mt-5">
        <h2 class="text-light">Liste des étudiants</h2>
        <a class="btn btn-primary mb-3" href="{{route('students.create')}}">Ajouter un étudiant</a>
    <table class="table table-hover table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Sexe</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody class="text-light">
            @foreach($students as $student)
            <tr>
                <td>{{ $student['nom'] }}</td>
                <td>{{ $student['prenom'] }}</td>
                <td>{{ $student['dateNaissance']}}</td>
                @if($student['sexe'] == 'F')
                <td>Féminin</td>
                @else
                <td>Masculin</td>
                @endif
                <td>{{ $student['telephone'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>