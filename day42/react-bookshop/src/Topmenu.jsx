import { useState } from 'react';
import './Topmenu.scss';

function Topmenu({ currentItem, setCurrentItem }) {
  const [open, setOpen] = useState(false);

  const toggleMenu = () => {
    setOpen(!open);
  };
  return (
    <div className="top-menu">
      {open ? (
        <nav>
          {/* code burger #9776 */}
          <div className="burger-icon" onClick={toggleMenu}>
            &#9776;
          </div>
          <a
            className={`${
              currentItem === 'home' ? 'link-highlighted' : 'link'
            }`}
            href="#"
            onClick={() => setCurrentItem('home')}
          >
            Home
          </a>
          <a
            className={`${
              currentItem === 'about' ? 'link-highlighted' : 'link'
            }`}
            href="#about"
            onClick={() => setCurrentItem('about')}
          >
            About us
          </a>
          <a
            className={`${
              currentItem === 'contact' ? 'link-highlighted' : 'link'
            }`}
            href="#contact"
            onClick={() => setCurrentItem('contact')}
          >
            Contact
          </a>
        </nav>
      ) : (
        <div className="burger-icon" onClick={toggleMenu}>
          &#9776;
        </div>
      )}
    </div>
  );
}

export default Topmenu;
