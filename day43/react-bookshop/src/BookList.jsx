import React, { useEffect, useState, useContext } from 'react';
import Book from './Book';

function BookList() {
  const [data, setData] = useState(null);

  const loadData = async () => {
    try {
      const response = await fetch(
        'https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php'
      );
      const data = await response.json();
      setData(data);
    } catch (error) {
      console.log('Error fetching data:', error);
    }
  };

  useEffect(() => {
    loadData();
  }, []);

  return (
    <ul className="latest-books">
      {data === null ? (
        <div className="loading">Loading....</div>
      ) : (
        data.map((book) => <Book key={book.id} {...book} />)
      )}
    </ul>
  );
}

export default BookList;
