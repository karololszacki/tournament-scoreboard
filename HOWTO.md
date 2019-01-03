Mutation:
```graphql
mutation setGameMutation($scores: [Int], $teamA: [String], $teamB: [String]) {
 setGame(scores: $scores, teamA: $teamA, teamB: $teamB) {
  	id  
	}
}

```

Variables:

```graphql
{
  "scores": [5,6],
  "teamA": ["AA", "BB"],
  "teamB": ["CC", "DD"]
}
```

---

Query:

```graphql
query {
  games {
    id
    timestamp
    scores
    teams{
      user_list
    }
  }
}
```
