import { useEffect, useState } from "react";
import Book from "./Book";

function App() {

  const [data, setData] = useState(null);

  const loadData = async () => {
    const response = await fetch('https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php');
    const data = await response.json();

    setData(data);
  }

  useEffect(() => {
    loadData();
  }, [])

  return (
    <>
      <h1>Latest books</h1>

      <ul className="latest-books">

        {
          data === null
            ? (
              <div className="loading">Loading...</div>
            )
            : data.map(book => <Book key={ book.id } { ...book } />)
        }

      </ul>
    </>
  );
}

export default App;
