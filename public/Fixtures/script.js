// Sample data for the fixtures
const fixtures = [
    { date: "2023-04-29", homeTeam: "FC ESCUELA", awayTeam: "11A1 Ngoc Hoi", score: "2 - 1" },
    { date: "2023-08-09", homeTeam: "FC ESCUELA", awayTeam: "FC ESCUELA B", score: "2 - 1" },
    { date: "2023-8-16", homeTeam: "FC ESCUELA", awayTeam: "FC 9A2", score: "1 - 2" },
    { date: "2024-2-7", homeTeam: "FC ESCUELA", awayTeam: "FC 1998", score: "3-3" },
    { date: "2024-8-7", homeTeam: "FC ESCUELA", awayTeam: "FC 11A2 Ngoc Hoi", score: "2 - 5" },
    { date: "2024-10-27", homeTeam: "FC ESCUELA", awayTeam: "FC 12D3 Ngoc Hoi", score: "2-3"},
    { date: "2024-11-3", homeTeam: "FC ESCUELA",awayTeam:"FC BAH", score:"9-9"},
];

// Function to display the fixtures in the table
function displayFixtures(fixtureData) {
    const tableBody = document.getElementById("fixturesBody");
    tableBody.innerHTML = "";

    fixtureData.forEach(fixture => {
        const row = document.createElement("tr");

        row.innerHTML = `
            <td>${fixture.date}</td>
            <td>${fixture.homeTeam}</td>
            <td>${fixture.awayTeam}</td>
            <td>${fixture.score}</td>
        `;

        tableBody.appendChild(row);
    });
}

// Function to filter fixtures by selected date
function filterFixtures() {
    const filterDate = document.getElementById("dateFilter").value;
    if (filterDate) {
        const filteredFixtures = fixtures.filter(fixture => fixture.date === filterDate);
        displayFixtures(filteredFixtures);
    } else {
        displayFixtures(fixtures);
    }
}

// Display all fixtures initially
displayFixtures(fixtures);
