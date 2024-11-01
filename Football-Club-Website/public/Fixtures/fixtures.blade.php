<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Fixtures</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>FC ESCUELA</h1>
            <input type="date" id="dateFilter" placeholder="Filter by Date">
            <button onclick="filterFixtures()">Filter</button>
        </header>

        <table id="fixturesTable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Home Team</th>
                    <th>Away Team</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody id="fixturesBody">
                <!--Fixtures rows will be added here by JavaScript-->
            </tbody>
        </table>
    </div>

    <script src="./script.js"></script>
</body>
</html>