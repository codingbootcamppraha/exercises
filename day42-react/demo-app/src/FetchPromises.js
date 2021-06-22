import {useEffect, useState} from "react";

function FetchPromises(){
    const [activitySuggestion, setActivitySuggestion] = useState(null);

    function getRandomActivityToDo() {
        const url = 'https://www.boredapi.com/api/activity';
        fetch(url)
            .then(function(response) {
                console.log('fetch promise response', response);
                return response.json();
            })
            .then(function(data) {
                console.log(data);
                setActivitySuggestion(data);
            })
            .catch(function(err) {
                console.log(err);
            })
    }

    useEffect(() => {
        getRandomActivityToDo();
    }, []);

    if(activitySuggestion === null){
        return (
            <h2>Loading activity...</h2>
        );
    }

    return (
        <div className="activityContainer">
            <h1>{activitySuggestion.activity}</h1>
        </div>
    );
}

export default FetchPromises;