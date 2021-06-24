import { Link } from 'react-router-dom';

function SearchBar(props) {

  function handleSubmit(event) {
    event.preventDefault();
    props.setSearchQuery(event.target[0].value);
  }

  return (
    <form onSubmit={(event) => handleSubmit(event)} className="SearchBar">
      <input name="cocktailSearch" />
      <Link to="/search">Search</Link>
    </form>
  );
}

export default SearchBar;
