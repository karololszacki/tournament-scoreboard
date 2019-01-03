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

const deleteGameMutation = gql`
  mutation deleteGameMutation($gameId: [Int]) {
    deleteGame(gameId: $gameId) {
      ${game}
    }
  }
`

const query = gql`{
  games {
    ${game}
  }
}`

function EnhanceDeleteGameButton(Component) {
    class EnhancedComponent extends React.Component {

        render() {
            return (
                <Mutation
                    mutation={deleteGameMutation}
                    update={(cache, { data: { deleteGame } }) => {
                        const { games } = cache.readQuery({ query });

                        cache.writeQuery({
                            query,
                            data: { games: games.concat([deleteGame]) },
                        });
                    }}
                >
                    {(deleteGameMutation, { loading, error }) => (
                        <Component
                            isLoading={loading}
                            hasError={error}

                            onDeleteGame={deleteGameMutation}
                        />
                    )}
                </Mutation>
            )
        };

    }

    return EnhancedComponent;
}

export default EnhanceDeleteGameButton;
