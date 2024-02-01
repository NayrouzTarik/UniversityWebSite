<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonces Professeurs</title>
    <style>
        body {
            background-color: #3b4a4e;
            color: #2C3E50;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #446040;
            color: #ECF0F1;
            padding: 15px;
            text-align: center;
        }

        .header h2 {
            margin: 0;
        }

        .header a {
            color: #ECF0F1;
            text-decoration: none;
            float: right;
            margin-top: -30px;
        }

        .content {
            padding: 20px;
        }

        .message-list {
            background-color: #FFFFFF;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .message-item {
            background-color: #f5f5dc;
            border: 1px solid #dedcba; 
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.05);
        }

        .message-item p {
            margin: 0;
            color: #333333;
        }

    </style>
</head>
<body>
    <div class="header">
        <h2>Annonces</h2>
        <a href="{{ url('/') }}">Logout</a>
    </div>
    <div class="content" id="messagesContent">
        <h2>Messages</h2>
        <div class="message-list">
            @foreach ($messages as $message)
                <div class="message-item">
                    <p>Envoyer par : {{ $message->nom}}</p>
                    <p>{{ $message->message }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
