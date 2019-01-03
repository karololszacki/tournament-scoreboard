import React from 'react';

import './styles.css';

import Button from '@material-ui/core/Button';


function DeleteGameButton(props) {
    return (
        <div className="GameList_delete_game__button">
            {renderDeleteScoreButton()}
        </div>
    );


    function onDeleteGame(gameId) {
        console.log(gameId)
    }

    function renderDeleteScoreButton() {
        return (
            <Button
                variant="contained"
                color="secondary"
                onClick={onDeleteGame.bind(this, props.gameId)}
            >
                Delete
            </Button>
        )
    }



}

export default DeleteGameButton;
