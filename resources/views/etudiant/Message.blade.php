<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Send Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: beige;
            color: black;
            padding: 20px;
        }
        .container {
            background-color: white;
            border: 2px solid darkolivegreen;
            border-radius: 5px;
            padding: 20px;
            max-width: 500px;
            margin: auto;
        }
        select, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid darkolivegreen;
        }
        button {
            background-color: darkolivegreen;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="messageForm" method="POST" action="{{ route('message.send') }}">
            @csrf
                <label for="recipient">Select Professor:</label>
                    <select name="recipient" id="recipient">
                        @foreach($professors as $professor)
                            <option value="{{ $professor->email }}">{{ $professor->name }}</option>
                        @endforeach
                    </select>
                <label for="message">Message:</label>
                <textarea name="message" id="message" rows="4" required></textarea>
                <button type="button" onclick="submitMessageForm()">Send Message</button>
        </form>
    </div>

    <script>
        function submitMessageForm() {
            var form = document.getElementById('messageForm');
            var formData = new FormData(form);

            fetch('/send-message', { 
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log('Success:', data);
                alert('Message sent successfully!');
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error sending message');
            });
        }

    </script>
</body>
</html>