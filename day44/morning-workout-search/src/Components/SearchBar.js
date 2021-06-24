function SearchBar(props) {

  function handleSubmit(event) {
    event.preventDefault();
    console.log(event.target[0].value);
    props.setSearchQuery(event.target[0].value);
  }

  return (
    <div className="SearchBar">
      <form onSubmit={(event) => handleSubmit(event)}>
        <input name="searchQuery" />
        <button type="submit">Submit</button>
      </form>
    </div>
  );
}

export default SearchBar;