import React from 'react';
import ReactDOM from 'react-dom';
import Direccion from './formularios/Direccion';
import Carrera from './formularios/Carrera';
import Asignatura from './formularios/Asignatura';
import Validacion from './formularios/Validacion';

/* importamos componentes personalizados */
import Menu from './Menu/Menu';

function Example() {
    return (
        <>
    
            <div className="container">
                <Menu />
                <Direccion />
                <Carrera />
                <Asignatura />
                <Validacion />
            </div>

        </>
    );
}


export default Example;

if (document.getElementById('root')) {
    ReactDOM.render(<Example />, document.getElementById('root'));
}
