
// We get the game elements and set their initial positions
const hero = document.querySelector('.hero');
hero.style.top = '500px';
hero.style.left = '100px';

const ghost = document.querySelector('.ghost');
ghost.style.top = '200px';
ghost.style.left = '600px';

const treasure = document.querySelector('.treasure');
treasure.style.top = '0px';
treasure.style.left = '400px';

// Elements for winning & losing game
const youWin = document.querySelector('.game-win');
const gameOver = document.querySelector('.game-over');

// Movement of the hero, each block is 100px
const gameListener = (event) => {
    const top = parseInt(hero.style.top);
    const left = parseInt(hero.style.left);
    
    // Object containing changes in direction based on key pressed
    const keyToDirection = {
        'KeyW': { top: -100, left: 0 },
        'KeyS': { top: 100, left: 0 },
        'KeyA': { top: 0, left: -100 },
        'KeyD': { top: 0, left: 100 },
    };

    const direction = keyToDirection[event.code];
    // If we press a different key than those in the object, we do nothing
    if (!direction) return;

    const newTop = top + direction.top;
    const newLeft = left + direction.left;

    // We check that the hero is within the boundaries of the map. 
    // If he is, we move it 
    if (newTop >= 0 && newTop <= 500) {
        hero.style.top = `${newTop}px`;
    }

    if (newLeft >= 0 && newLeft <= 700) {
        hero.style.left = `${newLeft}px`;
    }

    // Call the function that moves the ghost every time we move the hero
    moveGhost();

    // Check if the hero found the treasure to display winning message
    if (hasLocated(hero, treasure)) {
        endGame(youWin);
    }
};

// Function to check if object a is in the same coordinates as object b
const hasLocated = (a, b) => {
    return a.style.top === b.style.top && a.style.left === b.style.left;
}

// Function that moves the ghost towards the hero
const moveGhost = () => {
    // Randomly decide if we move vertically or horizontally
    const direction = Math.random() < 0.5 ? 'top' : 'left';
    // Calculate difference between hero and ghost positions
    const diff = parseInt(hero.style[direction]) - parseInt(ghost.style[direction]);
    // Set new ghost's position based on relative position to the hero
    ghost.style[direction] = `${parseInt(ghost.style[direction]) + Math.sign(diff) * 100}px`;

    // Check if the hero found the ghost to display game over message
    if (hasLocated(hero, ghost)) {
        endGame(gameOver);
    }
}

// Function to stop the game and show the result screen
const endGame = (gameResultMessage) => {
    gameResultMessage.style.visibility = 'visible';
    // Remove the event listener to prevent hero from movin after game has ended
    document.removeEventListener('keypress', gameListener);
}

// Initialise the game by adding the event listener to the document
document.addEventListener('keypress', gameListener);