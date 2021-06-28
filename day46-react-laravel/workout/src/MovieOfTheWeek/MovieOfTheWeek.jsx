import React, { useState, useEffect } from 'react';

export default function MovieOfTheWeek(props) {
    const [{loading, loaded, data}, setDataState] = useState({
        loading: false,
        loaded: false,
        data: null
    })

    const url = 'https://classes.codingbootcamp.cz/assets/classes/movie-api/movie-of-the-week.php'; // fill this in

    const loadData = async () => {
        if (url) {
            setDataState({
                loading: true,
                loaded: false,
                data: null
            });

            const response = await fetch(url);
            const data = await response.json();

            setDataState({
                loading: false,
                loaded: true,
                data: data
            });
        }
    }

    useEffect(() => {
        loadData();
    }, [])

    let content = '';

    if (loading) {
        content = (
            <div className="message">
                <div className="loader"><div></div><div></div><div></div><div></div></div>
                Loading
            </div>
        )
    } else if (loaded) {
        content = (
            <>
                <div className="movie">

                    <img src={ data.poster } alt={ data.title } />

                    <div>

                        <h3>{ data.title }</h3>

                        <div className="year">{ data.year }</div>

                        <div className="genres">
                            {
                                data.genres.map(item => (
                                    <span key={ item }>{ item }</span>
                                ))
                            }
                        </div>

                        <div className="starring">
                            <h4>Starring:</h4>

                            <div>
                                {
                                    data.actors.map(item => (
                                        <span key={ item }>{ item }</span>
                                    ))
                                }
                            </div>
                        </div>

                    </div>

                </div>
            </>
        )
    }

    return (
        <section className="weekly-movie">

            <h2>Movie of the week</h2>

            { content }

        </section>
    );
}