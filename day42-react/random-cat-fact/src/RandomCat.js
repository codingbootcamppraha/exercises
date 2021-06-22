import {useState, useEffect} from "react";

function RandomCat(){
    const [catFact, setCatFact] = useState(null);

    async function fetchData(){
        const response = await fetch('https://cat-fact.herokuapp.com/facts/random');

        const data = await response.json();

        setCatFact(data);
    }

    useEffect(() => {
        console.log('i am going to fetch data')
        fetchData();


        setInterval(() => {
            fetchData()
        }, 2000)

    }, [])

    if(catFact === null) return null;

    return (
        <div>
        <h1>{catFact.text}</h1>

            <button onClick={() => { fetchData() }}>Fetch!</button>
        </div>
    )
}

export default RandomCat;