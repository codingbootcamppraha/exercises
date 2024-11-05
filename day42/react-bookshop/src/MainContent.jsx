import React from 'react';
import BookList from './BookList';

function MainContent({ currentItem }) {
  let content = '';

  switch (currentItem) {
    case 'home':
      content = <BookList />;
      break;

    case 'about':
      content = <div>This is about us page</div>;
      break;

    case 'contact':
      content = <div>This is contact page</div>;
      break;

    default:
      content = <div>Page not found!</div>;
      break;
  }

  return <main>{content}</main>;
}

export default MainContent;
