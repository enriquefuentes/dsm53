import React from 'react';
import ReactDOM from 'react-dom';

//Componentes
import Menu from './Menu/Menu';

//Para poder manejar las rutas
import {BrowserRouter as Router, Switch, Route} from 'react-router-dom';

//Componentes de Página
import Index from './paginas/Index';
import Contacto from './paginas/Contacto';
import Error404 from './paginas/Error404';
import Direcciones from './paginas/Direcciones';

function Example() {
  return (
  
  <Router>

    <div className="container">
      <Switch>
      <Menu />
        <Route path="/" exact="{true}">
        <Index />
        </Route>
        <Route path="/direcciones" exact="{true}">
        <Direcciones />
        </Route>


        <Route path="/Contacto" exact="{true}">
        <Contacto />
        </Route>

        <Route path="*">
        <Error404 
        Encabezado="ERROR"
        title="Página no encontrada"
        text="No se encontró el recurso solicitado"
        />
        </Route>
      </Switch>
    </div>
  </Router>
  );
}
  export default Example;
  
  if (document.getElementById('root')){
    ReactDOM.render(<Example />, document.getElementById('root'));
  }