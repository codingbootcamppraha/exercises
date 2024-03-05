import './Box.scss';

export default function Box({ top, left }) {

    const boxStyle = {
        position: 'absolute',
        top: top,
        left: left
    }

    return (
        <div className="box" style={ boxStyle }>
            BOX
        </div>
    )

}