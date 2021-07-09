import React from 'react'
import ReactDOM from 'react-dom'
import { Provider } from 'react-redux';

import store from './store.js';

import App from './components/App/App.jsx'

import './scss/main.scss';

console.log(store.getState());

ReactDOM.render(
  <React.StrictMode>
    <Provider store={ store }>
      <App />
    </Provider>
  </React.StrictMode>,
  document.getElementById('root')
);
