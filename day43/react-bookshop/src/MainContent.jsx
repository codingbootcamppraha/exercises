import { Routes, Route } from 'react-router-dom';

import Homepage from './Homepage';
import AboutUs from './AboutUs';
import Contact from './Contact';

function MainContent() {

  return (
    <Routes>
      <Route path='/' element={<Homepage />} />
      <Route path='/about-us' element={<AboutUs />} />
      <Route path='/contact' element={<Contact />} />
    </Routes>
  );
}

export default MainContent;
