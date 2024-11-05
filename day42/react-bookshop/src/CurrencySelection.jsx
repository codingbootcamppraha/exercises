import React, { useEffect, useState, useContext } from 'react';
import CurrencyContext from './CurrencyContext';
import Context from './Context';

function CurrencySelection() {
  const [currencies, setCurrencies] = useState([]);
  const { currency, rate, setContextValue } = useContext(Context);

  const handleChange = (event) => {
    const selectedCurrency = event.target.value;

    loadExchangeRate(selectedCurrency);
    setContextValue(selectedCurrency, rate); // Update currency while keeping current rate temporarily
  };

  useEffect(() => {
    const loadCurrencies = async () => {
      try {
        const response = await fetch(
          'https://classes.codingbootcamp.cz/assets/classes/books-api/currencies.php'
        );
        const data = await response.json();
        setCurrencies(data); // Update currencies list
      } catch (error) {
        console.error('Error fetching currencies:', error);
      }
    };
    loadExchangeRate(currency);
    loadCurrencies(); // Call function once on component mount
  }, []);

  const loadExchangeRate = async (selectedCurrency) => {
    try {
      const response = await fetch(
        `https://classes.codingbootcamp.cz/assets/classes/books-api/exchange-rate.php?currency=${selectedCurrency}`
      );
      const data = await response.json();
      setContextValue(selectedCurrency, data.rate); // Update both currency and rate in context
    } catch (error) {
      console.error('Error fetching exchange rate:', error);
    }
  };

  return (
    <div>
      {/* Dynamically created list of currencies */}
      <select onChange={handleChange} value={currency}>
        {currencies.map((curr) => (
          <option key={curr} value={curr}>
            {curr}
          </option>
        ))}
      </select>
      <span> Exchange Rate: {rate}</span>
    </div>
  );
}

export default CurrencySelection;
