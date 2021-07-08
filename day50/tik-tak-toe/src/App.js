import { useEffect, useState } from 'react';
import './App.css';

function App() {
  const gridSize = 15;
  const spotsToWin = 5;

  const [grid, setGrid] = useState([]);
  const [player, setPlayer] = useState('X');
  const [winner, setWinner] = useState(null);
  const [winningLine, setWinningLine] = useState([]);

  useEffect(() => {
    const newGrid = [];
    for (let i = 0; i < gridSize; i++) {
      const newRow = [];
        for (let j = 0; j < gridSize; j++) {
          newRow.push(null);
        }
      newGrid.push(newRow);
    }

    setGrid(newGrid);
  }, []);

  const handleClick = (i, j) => {
    const updatedGrid = [...grid];
    if (updatedGrid[i][j] !== null || winner !== null) {
      return;
    }

    updatedGrid[i][j] = player;
    const nextPlayer = player === 'X' ? 'O' : 'X';

    setPlayer(nextPlayer);
    setGrid(updatedGrid);

    detectWinner(updatedGrid);
  };

  const detectWinner = (updatedGrid) => {
    for (let i = 0; i < gridSize; i++) {
      let found = false;
      for (let j = 0; j < gridSize; j++) {
        if (
          updatedGrid[i][j] !== null
          && (checkLine(updatedGrid, i, j, 0, 1)
            || checkLine(updatedGrid, i, j, 1, 0)
            || checkLine(updatedGrid, i, j, 1, 1)
            || checkLine(updatedGrid, i, j, 1, -1))
        ) {
          setWinner(updatedGrid[i][j]);
          found = true;
          break;
        }
      }
      if (found === true) {
        break;
      }
    }
  };

  const checkLine = (grid, i , j, iMove, jMove) => {
    if (i !== 0 && !grid[i + iMove * spotsToWin]) {
      return false;
    }
    const lineToBeChecked = [];
    const coordinationList = [[i, j]];
    for (let s = 1; s < spotsToWin; s++) {
      lineToBeChecked.push(grid[i + iMove * s][j + jMove * s]);
      coordinationList.push([i + iMove * s, j + jMove * s]);
    }
    const isComplete = lineToBeChecked.every(spot => spot === grid[i][j]);
    isComplete === true && setWinningLine(coordinationList);

    return isComplete
  };

  const isWinningLine = (i, j) => {
    return winningLine.some(([x, y]) => x === i && y ===j);
  };

  return (
    <div className="app">
      <h1>Tic-tac-toe</h1>

      {grid.map((row, i) => (
        <div key={i} className="row">
          {row.map((spot, j) => (
            <div onClick={() => handleClick(i, j)}  key={j} className={`spot ${isWinningLine(i, j) ? 'spot-winning' : ''}`}>
              {spot}
            </div>
          ))}
        </div>
      ))}

      <div>
        {winner && `Winner is: ${winner}`}
      </div>
    </div>
  );
}

export default App;
