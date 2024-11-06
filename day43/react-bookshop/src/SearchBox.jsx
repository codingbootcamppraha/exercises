import React, { useState } from 'react';

function SearchBox() {
  const [searchTerm, setSearchTerm] = useState('');

  const handleInputChange = (event) => {
    setSearchTerm(event.target.value);
    /// add own logic here
  };
  return (
    <input
      type="text"
      placeholder="Search..."
      className="search-box"
      value={searchTerm}
      onChange={handleInputChange}
    />
  );
}

export default SearchBox;
