import { useEffect, useState } from "react";

function SearchResults(props) {
  const [searchResults, setSearchResults] = useState([]);
  const searchUrl = "https://www.thecocktaildb.com/api/json/v1/1/search.php?s=";


  async function fetchSearchResults() {
    const resp = await fetch(searchUrl + props.match.params.query);
    const data = await resp.json();
    console.log(data);
    setSearchResults(data.drinks);
  }

  useEffect(() => {
    props.match.params.query && fetchSearchResults();
  }, [props.match.params.query])

  return (
    <div className="SearchResults">
    SearchResults
    </div>
  );
}

export default SearchResults;