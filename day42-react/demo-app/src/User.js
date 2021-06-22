import React from 'react';

function User(props) {

    const {name, rank} = props;
    // name = props.name
    // rank = props.rank

    // console.log(
        // 'Right now selected user is',
        // props.selectedUser
    // )

    return (
        <div className="User">
            <strong>User</strong>
            <p>Name: {name}</p>
            <p>Rank: {rank}</p>

            <p>Input: { props.input }</p>

            <input
                type="text"
                onChange={(e) => {
                    props.setInput(e.target.value);
                }}
            />

            <button
                onClick={() => {

                    props.setSelectedUser(props.name)
                    // change the selectedUser of parent component
                    console.log('Select user', props.name)
                }}
            >
                Select user
            </button>
        </div>
    );
}

export default User;
