<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi du Temps</title>
    <style>
        body {
            background-color: #6c7e68;
            color: #000000;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }
        .header {
            background-color: #3a503a;
            color: #FFFFFF;
            padding: 20px;
            text-align: center;
        }
        .header a {
            color: #FFFFFF;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }
        .content {
            padding: 20px;
            width: 80%;
            margin: 50px auto;
            border-radius: 10px;
            background-color: #f3f3f3;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .filiere-item {
            border: 1px solid #9a9393;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .filiere-item h3 {
            margin: 0;
            color: #3a503a;
            text-align: left;
        }
        .filiere-item p, .filiere-item a {
            margin: 5px 0;
        }
        .filiere-item a {
            color: #3a503a;
            text-decoration: underline;
        }
        .filiere-item a:hover {
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Emploi du Temps</h2>
        <a href="{{ url('/') }}">Logout</a>
    </div>

    <div class="content">
        @foreach($filieres as $filiere)
            <div class="filiere-item">
                <h3>{{ $filiere->name }}</h3>
                <p>Emploi PDF : <a href="{{ $filiere->emploi_pdf_path }}" target="_blank" download>{{ $filiere->emploi_pdf_path }}</a></p>
            </div>
        @endforeach
    </div>
</body>
</html>
