
import Topmenu from './Topmenu'

function MainContent(props) {
 
    const rederedContent = () => {
        switch (props.currentPage) {
            case 'about':
                return <div>About us content</div>;
            case 'contact':
                return <div>Contact content</div>;
            default:
                return <div>Home content</div>
        }
    }
    return (
        <h1>{rederedContent()}</h1>
)
}

export default MainContent
