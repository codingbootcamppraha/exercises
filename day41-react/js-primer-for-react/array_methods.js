const results = [1, 2, 3].map(number => number * 2)

// results = [2, 4, 6]


[1, 2, 3]

const sumOfNumbers = [1, 2, 3].reduce((carry, element) => {

    return carry + element;

}, 0);


const books = [
    // many books here
    // language: cz
    //           en
];

const booksByLanguage = books.reduce((carry, book) => {
    carry[book.language][] = book;
}, {})

booksByLanguage
{
    cz: [
        // all CZ books
    ],
    en: [
        // all EN books
    ]
    // ...
}


//                              [1, 3].map(...
[1, 2, 3].filter(number => number % 2).map(number => <Book number={ number } />)

