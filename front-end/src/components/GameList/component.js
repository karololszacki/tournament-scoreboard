import React, { Fragment } from 'react';

import moment from 'moment'

import Card from '@material-ui/core/Card';

import './styles.css';

const gameList = [
  {
    timestamp: 1546512730199,
    teams: [
      {
        userList: [
          'Rafał Uranek',
          'Karol Olszacki'
        ]
      },
      {
        userList: [
          'Fabio Costantino',
          'Grzegorz Pasieka'
        ]
      }
    ],
    scores: [
      10,
      5
    ]
  },
  {
    timestamp: 1546512730199,
    teams: [
      {
        userList: [
          'Rafał Uranek',
          'Karol Olszacki'
        ]
      },
      {
        userList: [
          'Fabio Costantino',
          'Grzegorz Pasieka'
        ]
      }
    ],
    scores: [
      10,
      5
    ]
  },
  {
    timestamp: 1546512730199,
    teams: [
      {
        userList: [
          'Rafał Uranek',
          'Karol Olszacki'
        ]
      },
      {
        userList: [
          'Fabio Costantino',
          'Grzegorz Pasieka'
        ]
      }
    ],
    scores: [
      10,
      5
    ]
  }
]

function GameList(props) {
  return (
    <Card className="GameList">
      {/* {
        props.gameList.map(renderItem)
      } */}
      {
        gameList.map(renderItem)
      }
    </Card>
  );

  function renderItem(game) {
    const { timestamp, teams, scores } = game
    return (
      <div className="GameList__item">
        <div className="GameList__item__date">
          {moment(timestamp).format('DD MMM YYYY')}
        </div>
        <div className="GameList__item__team">
          {renderTeam(teams[0])}
        </div>
        <div className="GameList__item__scores">
          {renderScores(scores)}
        </div>
        <div className="GameList__item__team">
          {renderTeam(teams[1])}
        </div>
      </div>
    )
  }

  function renderTeam(team) {
    const { userList } = team
    return (
      <Fragment>
        {
          userList.map(userName => (
            <div className="GameList__item__team__user">
              {userName}
            </div>
          ))
        }
      </Fragment>
    )
  }

  function renderScores(scores) {
    return (
      <Fragment>
        <div className="GameList__item__scores__value">
          {scores[0]}
        </div>
        <div className="GameList__item__scores__separator">
          {`:`}
        </div>
        <div className="GameList__item__scores__value">
          {scores[1]}
        </div>
      </Fragment>
    )
  }
}

export default GameList;
