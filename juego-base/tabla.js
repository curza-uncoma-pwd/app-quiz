const highScoresTable = document.getElementById('highScoresTable');
const highScores = JSON.parse(localStorage.getItem('highScores')) || [];
const recordScore = JSON.parse(localStorage.getItem('highScores')) || [];
const playAgain = document.getElementById('playAgain');

highScoresTable.innerHTML = highScores
  .map((score) => {
    return `<tr><td>${score.name}</td><td>${score.maxscore}</td><td>${score.score}</td></tr>`;
  })
  .join('');

function redireccion(event) {
  event.preventDefault();
  window.location.assign('juego.html');
}

playAgain.addEventListener('click', redireccion);
