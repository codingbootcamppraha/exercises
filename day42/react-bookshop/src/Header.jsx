import { useState } from 'react';
import './Header.scss';
import Topmenu from './Topmenu';
import SearchBox from './SearchBox';
import CurrencySelection from './CurrencySelection';

function Header({ currentItem, setCurrentItem }) {
  return (
    <>
      <header className="header">
        <Topmenu currentItem={currentItem} setCurrentItem={setCurrentItem} />
        <SearchBox />
        <div className="header__sitename">Flourish and Blotts</div>
        <CurrencySelection />
      </header>
    </>
  );
}

export default Header;
