import { useState } from 'react'
import './App.scss'
import Box from './Box'
import Button from './Button'

function App() {

  const [boxTop, setBoxTop] = useState(0);
  const [boxLeft, setBoxLeft] = useState(0);

  const changeBoxPosition = (x, y) => {
    setBoxTop(boxTop + y);
    setBoxLeft(boxLeft + x);
  }

  return (
    <>
      <Box top={ boxTop } left={ boxLeft } />

      <div className="buttons">
        <Button label="UP" onClick={ () => changeBoxPosition(0, -20) } />
        <Button label="DOWN" onClick={ () => changeBoxPosition(0, 20) } />
        <Button label="LEFT" onClick={ () => changeBoxPosition(-20, 0) } />
        <Button label="RIGHT" onClick={ () => changeBoxPosition(20, 0) } />
      </div>
    </>
  )
}

export default App
