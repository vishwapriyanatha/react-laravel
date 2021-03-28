import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Switch, Route, Link } from 'react-router-dom';

import Home from './home';
import User from './user';
import Ticket from './ticket';

ReactDOM.render((
  <BrowserRouter>
    <div>
      <nav className="container">
        <ul className="nav mt-2 mb-2">
          <li className="nav-item">
            <Link className="nav-link" to="/home">Organizations</Link>
            <Link className="nav-link" to="/user">Users</Link>
            <Link className="nav-link" to="/ticket">Tickets</Link>
          </li>
        </ul>
      </nav>
    
      <Switch>
        <Route exact path='/home' component={ Home } />
        <Route exact path='/user' component={ User } />
        <Route exact path='/ticket' component={ Ticket } />
      </Switch>
    </div>
  </BrowserRouter>
), document.getElementById('root'));
