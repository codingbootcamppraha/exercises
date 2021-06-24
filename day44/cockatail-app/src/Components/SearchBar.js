function SearchBar(props) {

  function handleSubmit(event) {
    event.preventDefault();
    props.setSearchQuery(event.target[0].value);
  }

  return (
    <form onSubmit={(event) => handleSubmit(event)} className="SearchBar">
      <input name="cocktailSearch" />
      <button type="submit">Search</button>
    </form>
  );
}

export default SearchBar;
