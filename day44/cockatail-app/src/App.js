import { useEffect, useState } from 'react';
import './App.css';
import Cocktail from './Components/Cocktail';
import SearchBar from './Components/SearchBar';
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import SearchResults from './Components/SearchResults';

function App() {
  const [randomDrink, setRandomDrink] = useState(null);
  const [searchQuery, setSearchQuery] = useState("");
  const [searchResults, setSearchResults] = useState([]);
  
  const randomUrl = "https://www.thecocktaildb.com/api/json/v1/1/random.php";
  const searchUrl = "https://www.thecocktaildb.com/api/json/v1/1/search.php?s=";

  async function fetchRandomCoctail() {
    const resp = await fetch(randomUrl);
    const data = await resp.json();
    setRandomDrink(data.drinks[0]);
  }

  async function fetchSearchResults() {
    const resp = await fetch(searchUrl + searchQuery);
    const data = await resp.json();
    setSearchResults(data.drinks);
  }

  useEffect(() => {
    fetchRandomCoctail();
  },[])

  useEffect(() => {
    searchQuery && fetchSearchResults();
  }, [searchQuery])

  return (
    <div className="App">
      <BrowserRouter>
        <SearchBar setSearchQuery={setSearchQuery} />
      
        <Switch>

          <Route 
            exact
            path="/" 
            component={
              () => randomDrink ? 
              <Cocktail title={randomDrink.strDrink} image={randomDrink.strDrinkThumb} /> 
              : "No cocktail"}
          />
          <Route path="/search" component={SearchResults} />

        </Switch>
      </BrowserRouter>
    </div>
  );
}

export default App;
