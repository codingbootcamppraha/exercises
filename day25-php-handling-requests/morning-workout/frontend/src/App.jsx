import { useEffect, useState } from 'react'
import './App.scss'
import catIcon from './assets/cat-black-face.svg';

function App() {

    const [loading, setLoading] = useState(true)
    const [fact, setFact] = useState([]);

    const loadFacts = async () => {

        setLoading(true);

        // make sure to replace the URL with one that matches your location of the all.php script
        const response = await fetch('http://www.cbp-exercises.test/day25-php-handling-requests/morning-workout/');
        const data = await response.json();

        setLoading(false);
        setFact(data);
    }


    useEffect(() => {
        loadFacts();
    }, [])

    return (
        <>
            <h1>Cat fact app</h1>

            <div className="cat-fact">
                {
                    loading
                        ? <div className="cat-fact__loading">
                            <img src={ catIcon } alt="Cat icon" />
                        </div>
                        : ''
                }

                {
                    (!loading)
                        ? (
                            <p className="cat-fact__text">
                                { fact.fact }
                            </p>
                        )
                        : ''
                }
            </div>

        </>
    )
}

export default App
