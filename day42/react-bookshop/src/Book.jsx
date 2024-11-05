import React, { useState, useContext, useEffect } from 'react';
import Context from './Context';
import './Book.scss';

function Book({ title, authors, price }) {
  const { currency, rate } = useContext(Context);
  const [convertedPrice, setConvertedPrice] = useState(price);

  useEffect(() => {
    //recalculate prices
    setConvertedPrice((price * rate).toFixed(2));
  }, [rate]);
  return (
    <div className="book">
      <div className="book__author">{authors[0].name}</div>
      <div className="book__title">{title}</div>
      {/* <div className="book__price">Price: {price}</div> */}

      <div className="book__price">
        Price: {convertedPrice} {currency}
      </div>
    </div>
  );
}

export default Book;
