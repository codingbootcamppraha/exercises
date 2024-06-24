import { useState } from 'react'
import Header from './Header';
import MainContent from './MainContent';
import './App.scss';

function App() {
  const [currentPage, setCurrentPage] = useState('');
 
  return (
    <div className="app">
      < Header currentPage={currentPage} setCurrentPage={setCurrentPage} />
      < MainContent currentPage={currentPage} />
    </div>
)
}

export default App
