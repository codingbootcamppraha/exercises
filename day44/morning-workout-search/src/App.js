import { useEffect, useState } from 'react';
import './App.css';
import Button from './Components/Button';
import SearchBar from './Components/SearchBar';
import SearchResults from './Components/SearchResults';

function App() {
  const [searchQuery, setSearchQuery] = useState('');
  const [searchResults, setSearchResults] = useState([]);
  const [offset, setOffset] = useState(0);

  async function fetchData() {
    const resp = await fetch(`https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&origin=*&srsearch=${searchQuery}&sroffset=${offset}`);
    const data = await resp.json();
    console.log(data);
    data.query && setSearchResults(data.query.search);
  }

  useEffect(() => {
    searchQuery && fetchData();
  }, [searchQuery, offset]);

  return (
    <div className="App">
      <SearchBar setSearchQuery={setSearchQuery} />
      {searchResults.length > 0 ? 
        <>
          <SearchResults searchResults={searchResults} />
          {offset > 0 &&  <Button onClick={() => setOffset(offset - 10)} title="Prev" />}
          
          <Button onClick={() => setOffset(offset + 10)} title="Next" />
        </>  
        :
        <h1>Type something in input to get search results!</h1>
    }
     
    </div>
  );
}

export default App;
