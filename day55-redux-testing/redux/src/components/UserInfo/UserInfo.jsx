import React from 'react'

export default function UserInfo() {
    return (
        <div className="user-info">
            <div className="user-info__icon"></div>
            <div className="user-info__info">
                <div className="user-info__username">chell@aperture.sc</div>
                <a className="user-info__logout" href="/">logout</a>
            </div>
        </div>
    )
}