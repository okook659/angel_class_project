<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création d'un étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
    <div class="container mt-5">
    <h2 class="text-light">Créer un étudiant</h2>
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom"> Nom:
            </label>
            <input type="text" required class="form-control" name="nom" id="nom" placeholder="Entrez votre nom">
        </div>
        <div class="mb-3">
            <label for="prenom">Prénom:
            </label>
            <input type="text" required class="form-control" name="prenom" id="prenom" placeholder="Entrez votre prénom">
        </div>
        <div class="mb-3">
            <label for="dateNaissance"> Date de naissance:
            </label>
                    <input type="date" required class="form-control" id="dateNaissance" name="dateNaissance" />
                </div>
                <div class="mb-3">
        <div class="mb-3">
        <label for="sexe"> Sexe:
        </label>
                <input value="M" type="radio" required name="sexe">Masculin</input>
                <input value="F" type="radio" required name="sexe">Féminin</input>
            </div>
            <div class="mb-3">
                <label for="telephone"> Numéro de téléphone
                </label>
                    <input type="tel" required class="form-control" pattern="[0-9]{8}" name="telephone" id="telephone" placeholder="Entrez votre numéro de téléphone">
                </div>
                <a href="{{route('students.index')}}" class="btn btn-light">Retour</a>
        <input type="submit" class="btn btn-primary" value="Valider">
    </form>
</div>
</body>
</html>