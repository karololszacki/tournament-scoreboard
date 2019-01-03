import React from 'react';

import { Query } from "react-apollo";
import gql from "graphql-tag";

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

const query = gql`{
  game {
    timestamp
    teams {
      userList
    }
    scores
  }
}`

function EnhanceGameList(Component) {
  class EnhancedComponent extends React.Component {

    render() {
      return (
        <Query query={query}>
        {({ loading, error, data }) => (
          <Component
            isLoading={loading}
            hasError={error}
            gameList={data}
          />
        )}
        </Query>
      )
    };

  }

  return EnhancedComponent;
}

export default EnhanceGameList;
