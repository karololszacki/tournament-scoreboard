import React from 'react';

import { Mutation } from "react-apollo";
import gql from "graphql-tag";

const createTeam = gql`
  mutation CreateTeam($userList: [String]!) {
    createTeam(userList: $userList) {
      id
      userList
    }
  }
`

const createGameMutation = gql`
  mutation setGameMutation($scores: [Int], $teamA: [String], $teamB: [String]) {
    setGame(scores: $scores, teamA: $teamA, teamB: $teamB) {
      id
    }
  }
`

function EnhanceAddGamePanel(Component) {
  class EnhancedComponent extends React.Component {

    render() {
      return (
        <Mutation mutation={createGameMutation}>
          {(createGame, { loading, error }) => (
            <Component
              isLoading={loading}
              hasError={error}

              onCreateGame={createGame}
            />
          )}
        </Mutation>
      )
    };

  }

  return EnhancedComponent;
}

export default EnhanceAddGamePanel;
