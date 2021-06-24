import { useEffect, useState } from 'react';
import './App.css';
import Country from './Components/Country';

function App() {
  const [countries, setCountries] = useState(null);
  const url = "https://restcountries.eu/rest/v2/all";

  async function fetchAll() {
    const resp = await fetch(url);
    const data = await resp.json();
    console.log(data);
    setCountries(data);
  }

  useEffect(() => {
    fetchAll();
  }, []);

  return (
    <div className="App">
     {
       (countries || []).map((country,i) => (
         <Country key={i} name={country.name} image={country.flag} />
       ))
     }
    </div>
  );
}

export default App;
