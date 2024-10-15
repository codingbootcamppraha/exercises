import { useEffect } from "react";
import { useState } from "react";

function CatFacts() {
    const [catFacts, setCatFacts] = useState([]);

    const fetchCatFacts = async () => {
        const response = await fetch('https://catfact.ninja/facts?limit=5');
        const data = await response.json();
        console.log(data)
        setCatFacts(data.data);
    }

    useEffect(() => {
        fetchCatFacts()
    }, [])

    return <>
        {
            catFacts.map(factObj => {
                return <p>{factObj.fact}</p>
            })
        }
        <button onClick={fetchCatFacts}>Give me new facts!</button>
    </>
}

export default CatFacts;