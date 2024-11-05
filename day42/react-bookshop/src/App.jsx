// Importing necessary hooks from React
import { useEffect, useState, useReducer } from 'react';

// Importing the main stylesheet for the application
import './App.scss';

// Importing components and context
import Header from './Header';
import MainContent from './MainContent';
import CurrencyContext from './CurrencyContext'; // Custom context for currency settings
import Context from './Context'; // Global context for the app

// Importing reducer function and action creators for managing state
import reducer from './reducer';
import { setCurrency, setRate } from './actions';

function App() {
  // useState to manage the currently selected item in the app (e.g., "home", "about")
  const [currentItem, setCurrentItem] = useState('home');

  // useReducer for managing complex state (currency and rate)
  // Initial state: currency is set to 'EUR', rate is set to 1
  const [state, dispatch] = useReducer(reducer, {
    currency: 'EUR',
    rate: 1,
  });

  // Function to update currency and rate in the state by dispatching actions
  const setContextValue = (currency, rate) => {
    dispatch(setCurrency(currency)); // Dispatches action to update currency
    dispatch(setRate(rate)); // Dispatches action to update rate
  };

  return (
    // Providing context with the current state and setContextValue function
    <Context.Provider value={{ ...state, setContextValue }}>
      {/* Rendering Header and passing currentItem state and setter function as props */}
      <Header currentItem={currentItem} setCurrentItem={setCurrentItem} />

      {/* Rendering MainContent and passing the current item to control displayed content */}
      <MainContent currentItem={currentItem} />
    </Context.Provider>
  );
}

export default App;
