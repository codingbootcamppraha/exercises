import { useEffect } from "react";
import { useState } from "react";

function CatFact() {
    const [catFact, setCatFact] = useState(null);

    const fetchCatFact = async () => {
        const response = await fetch('http://www.cbp-exercises.test/morning-workout/');
        const data = await response.json();
        setCatFact(data.fact);
    }

    useEffect(() => {
        fetchCatFact()
    }, [])

    return <>
        <p>{catFact}</p>
        <button onClick={fetchCatFact}>Give me a new fact!</button>
    </>
}

export default CatFact;