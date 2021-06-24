import { Link } from 'react-router-dom';

function SearchBar(props) {

  console.log(props.searchQuery);
  return (
    <form className="SearchBar">
      <input name="cocktailSearch" onChange={(event) => props.setSearchQuery(event.target.value)}/>
      <Link to={`/search/${props.searchQuery}`}>Search</Link>
    </form>
  );
}

export default SearchBar;
