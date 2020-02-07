import React from 'react'
import ReactDOM from 'react-dom'
 
import{BrowserRouter as Router, Switch, Router} from 'react-router-dom';

import Menu from './menu';

import index from './paginas/index;
import contacto from './paginas/contacto;
import error404 from './paginas/error404;


return(
    <Router>
        <div classname="container">
            <Switch>
                <Router path="/" exact={true}>
                    <index />
                </Router>             
                <Router path="/contacto" exact={true}></Router>
                    <contacto />
                </Route>
                <Router path="*" exact={true}></Router>
                    <error404 
                    encabezado="ERROR"
                    titulo="Pagina no encontrada"
                    texto="No se encuentra el recurso solicitado"/>
                </Route>

            </Switch>
        </div>
    </Router>
)