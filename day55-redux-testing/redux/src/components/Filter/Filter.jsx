import React, { useState, useEffect } from 'react'

export default function Search() {

    const [text, setText] = useState('');

    const handleTextChange = event => {
        setText(event.target.value);
    }

    return (
        <div className="search">
            <label htmlFor="search">Search</label>
            <input type="text" name="search" id="search" placeholder="Enter search term" value={ text } onChange={ handleTextChange } />
        </div>
    )
}
