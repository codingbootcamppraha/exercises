import React, { useState } from 'react';
import './Topmenu.scss';

const Topmenu = (props) => {
  const [open, setOpen] = useState(false);

  // open/close the menu
    const toggleMenu = () => {
        setOpen(!open);
}
    let homestyle = "link" , aboutstyle = "link" , contactsstyle = "link";
    if (props.currentPage === "") {
        homestyle += " link--highlighted";
    } else if (props.currentPage === "about") {
        aboutstyle += " link--highlighted";
    }else if (props.currentPage === "contact") {
        contactsstyle += " link--highlighted";
    }

    const handleClick = (page) => {
        props.setCurrentPage(page);
      //  setOpen(false);    // To hide the list after changing the page
    }

  return (
    <div>
      {open ? (
        <div>
            <button className="burger-icon" onClick={toggleMenu}>|||</button> 
            <nav>
            <a className={homestyle} onClick={() => handleClick("")} href="#home">Home</a>
            <a className={aboutstyle} onClick={() => handleClick("about")} href="#about">About</a>
            <a className={contactsstyle} onClick={() => handleClick("contact")} href="#contact">Contact</a>
            </nav>
        </div>
      ) : (
          <button className="burger-icon" onClick={toggleMenu}>|||</button>             
      )}
    </div>
  );
};

export default Topmenu;