import { useEffect, useState } from 'react';
import User from './User';
import userIcon from '/user.png'

function UserList() {

  const [users, setUsers] = useState([])
  const [loading, setLoading] = useState(false);

  useEffect(() => {
    loadUsers();
  }, [])

  const loadUsers = async () => {
    setLoading(true);

    const response = await fetch(`http://laravel-books.test/api/users`);

    setLoading(false);

    const data = await response.json();

    setUsers(data);
  }

  return (
    <div className="user-list">
      <h2>Users</h2>
      <div className="user-list__container">
        <div className="user-list__users">
          {
            loading
              ? 'Loading users...'
              : users.map(user => <User key={ user.id } {...user} />)
          }
        </div>
      </div>
    </div>
  );
}

export default UserList;
