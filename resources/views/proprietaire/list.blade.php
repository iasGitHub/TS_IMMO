<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" >
    <title>Document</title>
</head>
<body>
    <h1>La liste des propriétaires</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Civilité</th>
                <th>CNI</th>
                <th>Sexe</th>
                <th>Date de naissance</th>
                <th>Lieu de naissance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- <script type="text/javascript">
        var table = $(".data-table").DataTable({
            serverSide:true,
            processing:true,
            ajax:"{{route('proprietaire.index')}}",
            columns:[
                {data:'DT_RowIndex', name:'DT_RowIndex'},
                {data:'nom', name:'nom'},
                {data:'prenom', name:'prenom'},
                {data:'adresse', name:'adresse'},
                {data:'email', name:'email'},
                {data:'telephone', name:'telephone'},
                {data:'civilite', name:'civilite'},
                {data:'cni', name:'cni'},
                {data:'sexe', name:'sexe'},
                {data:'dateNaissance', name:'dateNaissance'},
                {data:'lileuNaissance', name:'lileuNaissance'},
                {data:'action', name:'action'},
            ]
        });
    </script> -->
</body>
</html>