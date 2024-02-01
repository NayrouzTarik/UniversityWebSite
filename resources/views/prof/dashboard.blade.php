<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5dc; /* Light Beige */
            color: black;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1, h2 {
            color: #556b2f; /* Dark Olive Green */
            margin-bottom: 20px;
        }

        ul, li {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #fff; /* White Background for list items */
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        strong {
            color: black;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #556b2f; /* Dark Olive Green */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #455a23;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tableau de Bord</h1>
        <section>
            <h2>Received Information from TP</h2>
            <ul>
                <!-- Laravel Blade Loop -->
                @foreach($tpsInfo as $tp)
                    <li>
                        <strong>Matiere:</strong> {{ $tp->matiere }}<br>
                        <strong>Teammates:</strong> {{ $tp->teammates }}<br>
                        <strong>File Path:</strong> {{ $tp->file_path }}<br>
                    </li>
                @endforeach
            </ul>
        </section>

        <section>
            <h2>Send Message</h2>
            <form id="messageForm" method="post">
                @csrf
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
 
                <button type="submit">Send Message</button>
            </form>
        </section>
    </div>

    <script>
        document.getElementById('messageForm').addEventListener('submit', function(event) {
            event.preventDefault();
            submitMessageForm();
        });

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
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</body>
</html>
