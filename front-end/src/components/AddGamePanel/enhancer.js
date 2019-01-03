import React from 'react';

import { Mutation } from "react-apollo";
import gql from "graphql-tag";

const game = `
  id
  timestamp
  teams {
    id
    user_list
  }
  scores
`

const createGameMutation = gql`
  mutation setGameMutation($scores: [Int], $teamA: [String], $teamB: [String]) {
    setGame(scores: $scores, teamA: $teamA, teamB: $teamB) {
      ${game}
    }
  }
`

const query = gql`{
  games {
    ${game}
  }
}`

function EnhanceAddGamePanel(Component) {
  class EnhancedComponent extends React.Component {

    render() {
      return (
        <Mutation
          mutation={createGameMutation}
          update={(cache, { data: { setGame } }) => {
            const { games } = cache.readQuery({ query });

            cache.writeQuery({
              query,
              data: { games: games.concat([setGame]) },
            });
          }}
        >
          {(setGameMutation, { loading, error }) => (
            <Component
              isLoading={loading}
              hasError={error}

              onCreateGame={setGameMutation}
            />
          )}
        </Mutation>
      )
    };

  }

  return EnhancedComponent;
}

export default EnhanceAddGamePanel;
