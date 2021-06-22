import {useEffect, useState} from "react";

function FetchAsync(){
    const [activitySuggestion, setActivitySuggestion] = useState(null);

    async function fetchData(url) {
        try {

            // fetch me the data from url and wait for them to be available
            const response = await fetch(url);

            // convert response to data using JSON format and wait for conversion to be finished
            const data = await response.json();

            setActivitySuggestion(data);

        } catch(err){
            console.log(err);
        }
    }

    useEffect(() => {
        const url = 'https://www.boredapi.com/api/activity';
        fetchData(url);
    }, []);


    if(activitySuggestion === null){
        return (
            <h2>Loading activity...</h2>
        );
    }

    return (
        <div className="activityContainer">
            <span>{activitySuggestion.activity}</span>
        </div>
    );
}

export default FetchAsync;