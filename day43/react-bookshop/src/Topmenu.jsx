import { useState } from 'react';
import { Link } from 'react-router-dom';

import './Topmenu.scss';

function Topmenu() {
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
          <Link to="/">Homepage</Link>
          <Link to="/about-us">About us</Link>
          <Link to="/contact">Contact</Link>
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
