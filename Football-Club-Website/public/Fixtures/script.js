// Sample data for the fixtures
const fixtures = [
    { date: "2024-11-01", homeTeam: "FC ESCUELA", awayTeam: "11A2 Ngoc Hoi", score: "1 - 1" },
    { date: "2024-11-11", homeTeam: "FC ESCUELA", awayTeam: "12A3 Ngoc Hoi", score: "2 - 1" },
    { date: "2024-11-15", homeTeam: "FC ESCUELA", awayTeam: "11A3 Nguyen Trai", score: "0 - 3" },
    { date: "2024-11-18", homeTeam: "FC ESCUELA", awayTeam: "12D3 Nguyen Trai", score: "1 - 0" },
    { date: "2024-11-22", homeTeam: "FC ESCUELA", awayTeam: "12D3 Ngoc Hoi", score: "2 - 2" },
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
