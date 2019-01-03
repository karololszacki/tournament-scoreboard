<?php

use RedBeanPHP\R;
use Siler\Graphql;

R::setup('sqlite:' . __DIR__ . '/db.sqlite');

function getTeamById($id)
{
    $teamData = R::findOne('team', 'id = ?', [$id]);

    return [
        'id' => $teamData['id'],
        'user_list' => explode(", ", $teamData['user_list'])
    ];
}

function getTeamByUserList($userList)
{
    $team = R::findOne('team', 'user_list LIKE ? AND user_list LIKE ?', ['%' . $userList[0] . '%', '%' . $userList[1] . '%']);

    if (empty($team)) {
        $team = R::dispense('team');
        $team['user_list'] = implode($userList, ',');

        $team['id'] = R::store($team);
    }

    return $team;
}

$queryType = [
    'games' => function () {
        $result = array();
        $gameData = R::findAll('game');
        foreach ($gameData as $game) {
            $result[] = [
                'id' => $game['id'],
                'scores' => explode(",", $game['scores']),
//                'timestamp' => print_r($game, true),
                'timestamp' => $game['timestamp'],
                'teams' => [
                        getTeamById($game['team_a_id']),
                        getTeamById($game['team_b_id']),
                    ]

            ];
        }

        return $result;
    },
    'teams' => function () {
        return R::findAll('team');
    },
    'teamByUserList' => function ($userList) {
        return getTeamByUserList($userList);
    },
];

$mutationType = [
    'setGame' => function ($root, $args) {

        $game = R::dispense('game');
        $game['scores'] = implode(",", $args['scores']); // implode to save in DB
        $game['teamA'] = getTeamByUserList($args['teamA']);
        $game['teamB'] = getTeamByUserList($args['teamB']);
        $game['timestamp'] = time();

        R::store($game);

        $result = [
            'id' => $game['id'],
            'scores' => explode(",", $game['scores']), // explode when reading from DB
//                'timestamp' => print_r($game, true),
            'timestamp' => $game['timestamp'],
            'teams' => [
                getTeamById($game['teamA']),
                getTeamById($game['teamB']),
            ]
        ];
        return $result;
    }
];

return [
    'Query' => $queryType,
    'Mutation' => $mutationType,
];
