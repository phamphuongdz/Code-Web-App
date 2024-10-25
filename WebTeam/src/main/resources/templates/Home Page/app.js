// Sample data for matches
const matches = [
    { teams: "Team A vs Team B", date: "October 28, 2024", time: "6:00 PM" },
    { teams: "Team C vs Team D", date: "November 1, 2024", time: "8:00 PM" },
    { teams: "Team E vs Team F", date: "November 5, 2024", time: "7:00 PM" }
];

// Load matches into the matches section
function loadMatches() {
    const matchesContainer = document.querySelector('.matches-container');
    matches.forEach(match => {
        const matchDiv = document.createElement('div');
        matchDiv.classList.add('match');
        matchDiv.innerHTML = `
            <h3>${match.teams}</h3>
            <p>Date: ${match.date}</p>
            <p>Time: ${match.time}</p>
        `;
        matchesContainer.appendChild(matchDiv);
    });
}

// Call function to load matches when the page loads
document.addEventListener('DOMContentLoaded', loadMatches);
