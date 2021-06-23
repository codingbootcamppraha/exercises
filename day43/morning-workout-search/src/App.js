import { useEffect, useState } from 'react';
import './App.css';
import SearchBar from './Components/SearchBar';
import SearchResults from './Components/SearchResults';

function App() {
  const [searchQuery, setSearchQuery] = useState('');
  const [searchResults, setSearchResults] = useState([]);

  async function fetchData() {
    const resp = await fetch(`https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&origin=*&srsearch=${searchQuery}`);
    const data = await resp.json();
    console.log(data);
    setSearchResults(data.query.search);
  }

  useEffect(() => {
    searchQuery && fetchData();
  }, [searchQuery]);

  return (
    <div className="App">
      <SearchBar setSearchQuery={setSearchQuery} />
      <SearchResults searchResults={searchResults} />
    </div>
  );
}

export default App;
