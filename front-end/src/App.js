import React, { Component } from 'react';
import './App.css';

import DashboardPage from './components/DashboardPage';

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App__header">
          {`Tournament scoreboard`}
        </header>
        <div className="App__body">
          <DashboardPage />
        </div>
      </div>
    );
  }
}

export default App;
