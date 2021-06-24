import { useEffect, useState } from 'react';
import './App.css';
import Cocktail from './Components/Cocktail';
import SearchBar from './Components/SearchBar';
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import SearchResults from './Components/SearchResults';

function App() {
  const [randomDrink, setRandomDrink] = useState(null);
  const [searchQuery, setSearchQuery] = useState("");
  
  const randomUrl = "https://www.thecocktaildb.com/api/json/v1/1/random.php";

  async function fetchRandomCoctail() {
    const resp = await fetch(randomUrl);
    const data = await resp.json();
    setRandomDrink(data.drinks[0]);
  }

  useEffect(() => {
    fetchRandomCoctail();
  },[])

  return (
    <div className="App">
      <BrowserRouter>
        <SearchBar setSearchQuery={setSearchQuery} searchQuery={searchQuery} />
      
        <Switch>

          <Route 
            exact
            path="/" 
            component={
              () => randomDrink ? 
              <Cocktail title={randomDrink.strDrink} image={randomDrink.strDrinkThumb} /> 
              : "No cocktail"}
          />
          <Route path="/search/:query" component={SearchResults} />

        </Switch>
      </BrowserRouter>
    </div>
  );
}

export default App;
