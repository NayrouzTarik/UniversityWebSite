<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: beige;
            color: black;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: darkolivegreen;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: darkolivegreen;
            color: white;
        }

        button {
            background-color: darkolivegreen;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        button:hover {
            background-color: black;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: darkolivegreen;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: black;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Respofiliere Dashboard</h1>

        <section>
            <h2>Incidents</h2>
            <table>
                <tr>
                    <th>Incident Type</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Department</th>
                    <th>Class</th>
                </tr>
                @foreach($incidents as $incident)
                    <tr>
                        <td>{{ $incident->incident_type }}</td>
                        <td>{{ $incident->description }}</td>
                        <td>{{ $incident->date }}</td>
                        <td>{{ $incident->time }}</td>
                        <td>{{ $incident->department }}</td>
                        <td>{{ $incident->class }}</td>
                    </tr>
                @endforeach
            </table>
        </section>

        <section>
            <h2>Send Message</h2>
            <form id="messageForm">
                @csrf
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send Message</button>
            </form>

            <script>
                
            </script>
        </section>
    </div>
</body>
</html>
