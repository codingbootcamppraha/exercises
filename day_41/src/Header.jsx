
import Topmenu from './Topmenu'
import './Header.scss'

function Header(props) {
 
    return (
   
    <header className="header">
      <div className="header__sitename">
        Flourish and Blotts
        </div>    
      < Topmenu currentPage={props.currentPage} setCurrentPage={props.setCurrentPage}/>
    </header>
)
}

export default Header
