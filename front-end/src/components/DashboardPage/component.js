import React from 'react';

import './styles.css';

import AddGamePanel from '../AddGamePanel';
import GameList from '../GameList';

function DashboardPage() {
  return (
    <div className="DashboardPage">
      <div className="DashboardPage__add-game-panel">
        <AddGamePanel />
      </div>
      <div className="DashboardPage__game-list">
        <GameList />
      </div>
    </div>
  );
}

export default DashboardPage;
