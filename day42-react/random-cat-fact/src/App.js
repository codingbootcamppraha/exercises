import logo from './logo.svg';
import './App.css';
import RandomCat from "./RandomCat";

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />

        <RandomCat/>

      </header>
    </div>
  );
}

export default App;
