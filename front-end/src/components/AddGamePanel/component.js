import React, { Fragment } from 'react';

import './styles.css';

import Select from '@material-ui/core/Select';
import MenuItem from '@material-ui/core/MenuItem';
import TextField from '@material-ui/core/TextField';
import Card from '@material-ui/core/Card';
import Button from '@material-ui/core/Button';

const users = [
  `None`,
  `Fabio Costantino`,
  `Karol Olszacki`,
  `Rafał Uranek`,
  `Grzegorz Pasieka`,
  `Tomek Stadnicki`,
  `Tomasz Rybak`,
  `Marta Granisz`,
  `Rafał Zakrzewski`,
  `Remigiusz Chowaniak`
]

const teamNames = ['firstTeam', 'secondTeam'];

function AddGamePanel(props) {

  const [state, setState] = React.useState({
    firstTeam: [0, 0],
    secondTeam: [0, 0],
    score: [0, 0]
  });

  return (
    <Card className="AddGamePanel">
      <div className="AddGamePanel__members">
        {renderTeamMembersController(teamNames[0])}
      </div>
      <div className="AddGamePanel__score">
        {renderScore()}
      </div>
      <div className="AddGamePanel__members">
        {renderTeamMembersController(teamNames[1])}
      </div>
      {renderAddButton()}
    </Card>
  );

  function renderAddButton() {
    return (
      <Button
        variant="contained"
        color="primary"
        className="AddGamePanel__button"
        onClick={onCreateGame}
      >
        {`Add`}
      </Button>
    )
  }

  function onCreateGame() {
    const { firstTeam, secondTeam, score } = state
    const firstTeamUserList = [
      users[firstTeam[0]],
      users[firstTeam[1]]
    ]
    const secondTeamUserList = [
      users[secondTeam[0]],
      users[secondTeam[1]]
    ]

    props.onCreateGame({ variables: { scores: score, teamA: firstTeamUserList, teamB: secondTeamUserList }})
  }

  function renderScore() {
    return (
      <Fragment>
        <TextField
          id="standard-number"
          value={state.score[0]}
          onChange={(event) => handleScoreChange(0, parseInt(event.target.value))}
          type="number"
          className="AppGamePanel__score__text-field"
          InputLabelProps={{
            shrink: true,
          }}
          margin="normal"
        />
        <div className="AddGamePanel__score__separator">
          {`:`}
        </div>
        <TextField
          id="standard-number"
          value={state.score[1]}
          onChange={(event) => handleScoreChange(1, parseInt(event.target.value))}
          type="number"
          className="AppGamePanel__score__text-field"
          InputLabelProps={{
            shrink: true,
          }}
          margin="normal"
        />
      </Fragment>
    )
  }

  function renderTeamMembersController(teamName) {
    return (
      <Fragment>
        <Select
          value={state[teamName][0]}
          onChange={(event) => handleChange(teamName, 0, event.target.value)}
        >
          {renderUserList(teamName)}
        </Select>
        <Select
          value={state[teamName][1]}
          onChange={(event) => handleChange(teamName, 1, event.target.value)}
        >
          {renderUserList(teamName)}
        </Select>
      </Fragment>
    )
  }

  function renderUserList(teamName) {
    return users.map((userName, index) => (
      <MenuItem key={`${teamName}_${index}`} value={index}>{userName}</MenuItem>
    ))
  }

  function handleChange(teamName, position, value) {
    let team = state[teamName]
    team[position] = value

    setState({
      ...state,
      [teamName]: team,
    });
  }

  function handleScoreChange(position, value) {
    let score = state.score
    score[position] = value

    setState({
      ...state,
      score,
    });
  }
}

export default AddGamePanel;
