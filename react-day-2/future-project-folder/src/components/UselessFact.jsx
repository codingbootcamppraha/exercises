import { useEffect, useState } from "react";

function UselessFact() {
    const [data, setData] = useState()

    const fetchFact = async () => {
        const response = await fetch('https://uselessfacts.jsph.pl/random.json?language=en')
        const data = await response.json()
        setData(data)
    }

    useEffect(() => {
        fetchFact();
    }, [])
    
    return <h2>
        {data ? data.text : 'Loading...'}
    </h2>
}

export default UselessFact;