function SearchResults(props) {
  return (
    <div className="SearchResults">
     SearchResults: 
     <div>
       {props.searchResults.map((result, i) => (
         <div key={i}>
         <a href={`https://en.wikipedia.org/wiki/${result.title}`} target='_blank' rel="noopener noreferrer">{result.title}</a>
         </div>
       ))}
     </div>
    </div>
  );
}

export default SearchResults;