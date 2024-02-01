<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Changements TP</title>
    <style>
        body {
            background-color: beige; 
            color: #000000; 
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .header {
            background-color: #2f482b; 
            color: #FFFFFF; 
            padding: 20px;
            width: 98%;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header h2 {
            margin: 0;
        }

        .header a {
            color: #FFFFFF;
            text-decoration: none;
            padding: 10px;
            background-color: #333333;
            border-radius: 5px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 60%; 
            max-width: 500px; 
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group button 
        {
            width: 100%;
            padding: 10px;
            border: 1px solid #687a65;
            border-radius: 5px;
        }

        .form-group button 
        {
            background-color: #30452d; 
            color: #FFFFFF;
            cursor: pointer;
            border: none;
        }

        .form-group button:hover 
        {
            background-color: #6c7e68;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Travaux Pratique</h2>
        <a href="{{ url('/') }}">Logout</a>
    </div>

    <div class="container">
        <form id="tpForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="left-panel">
                <h3>Remplisser Vos Donnees</h3>
                <div class="form-group">
                    <label for="matiere">Matiere De TP:</label>
                    <input type="text" id="matiere" name="matiere" required>
                </div>
                <div class="form-group">
                    <label for="teammates">Votre Groupe de TP :</label>
                    <input type="text" id="teammates" name="teammates" placeholder="Enter names, separated by commas" required>
                </div>
            </div>

            <div class="right-panel">
                <div class="form-group">
                        <label for="file">Upload File:</label>
                        <input type="file" id="file" name="file" required>
                </div>
            </div>
            
            <div class="form-group">
                <button type="button" onclick="submitTpForm()">Submit All</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('tpForm').addEventListener('submit', function(event) {
            event.preventDefault();
            submitTpForm();
        });

        function submitTpForm() {
            var form = document.getElementById('tpForm');
            var formData = new FormData(form);

            fetch('/save-tp', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
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
