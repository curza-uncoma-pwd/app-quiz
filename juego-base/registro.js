const username = document.getElementById('Usuario');
const saveScoreBtn = document.getElementById('guardar');
const finalScore = document.getElementById('finalScore');
const mostRecentScore = localStorage.getItem('mostRecentScore');

const highScores = JSON.parse(localStorage.getItem('highScores')) || [];

finalScore.innerText = mostRecentScore;

username.addEventListener('keyup', () => {
    saveScoreBtn.disabled = !username.value;
});

saveHighScore = (e) => {
    e.preventDefault();

    const score = {
        score: mostRecentScore,
        name: username.value,
        maxscore: 0,
    };

    if (localStorage.getItem('highScores') !== null) {
        let userIndex =highScores.findIndex(usuario => score.name == usuario.name);
        if (userIndex != -1) {
            if (score.score > highScores[userIndex].maxscore) {
                highScores[userIndex].maxscore = score.score;
            }
            highScores[userIndex].score = score.score;
        } else {
            score.maxscore = score.score;
            highScores.push(score);
        }
    } else {
        highScores.push(score);
    }

    localStorage.setItem('highScores', JSON.stringify(highScores));
    window.location.assign('tabla.html');
};
