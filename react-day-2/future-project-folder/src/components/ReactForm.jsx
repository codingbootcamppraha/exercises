import {useState} from 'react'
 
const ReactForm = () => {
    const [name, setName] = useState('');
    const [lastName, setLastName] = useState('')
 
    const handleNameChange = (e) => {
      setName(e.target.value);
    }

    const handleLastNameChange = (e) => {
      setLastName(e.target.value);
    }
 
    const handleSubmit = (e) => {
      e.preventDefault();
      alert('A name was submitted: ' + name + ' ' + lastName);  
      // here we would send the data to the backend
    }
 
    return (  
    <form onSubmit={handleSubmit}>
        <label>
        Name:
        <input type="text" value={name} onChange={handleNameChange} />
        Last name:
        <input type="text" value={lastName} onChange={handleLastNameChange} />
        </label>
        <input type="submit" value="Submit" />
    </form>
    );
}

export default ReactForm;