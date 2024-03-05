const person = [
    'John',
    'john@email.com',
    'accountant',
    'Ponzi Accounting Group'
]


const [ name, email, ...otherValues ] = person;

// const name = 'John';
// const email = 'john@email.com';
// const otherValues = [
//     'accountant',
//     'Ponzi Accounting Group'
// ]

const onsite_students = [
    'John',
    'Jane',
    'Bob'
];

const online_students = [
    'John',
    'Steve',
    'Stuart'
]

const all_students = [
    ...onsite_students,
    'Paul',
    ...online_students,
    'Peter'
]

// all_students == [
//     'John',
//     'Jane',
//     'Bob',
//     'Paul',
//     'John',
//     'Steve',
//     'Stuart',
//     'Peter'
// ]