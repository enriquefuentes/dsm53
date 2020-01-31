import React, {useState} from 'react';
import {Form, button} from 'react-bootstrap';

export default function Direccion(prop) {
const [validated, setValidated] = useState(false);

  const handleSubmit = event => {
    const form = event.currentTarget;
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
    }

    setValidated(true);
  };

  return(
    <Form noValidate validated={validated} onSubmit={handleSubmit}>
            <Form.Group controlId="direccion">
                <Form.Label>Dirección</Form.Label>
                <Form.Control  require type="text" placeholder="Ingrese el nombre completo de la Direccion" />
                <Form.Text className="text-muted">
                    Ejemplo: Tecnologias de la informacion y comunicacion. 
                </Form.Text>
            </Form.Group>
            <Form.Group controlId="abreviatura">
                <Form.Label>Abreviatura</Form.Label>
                <Form.Control require type="text" placeholder="Ingrese la abreviatura de la Direccion" />
                <Form.Text className="text-muted">
                    Ejemplo: TIC. 
                </Form.Text>
            </Form.Group>
            <div key="activo" className="mb-3">
                <Form.Check name="activo" value="Actico" inline label="Activo" type="radio" id="Activo"  />
                <Form.Check name="activo" value="Inactico" inline label="Inactivo" type="radio" id="Inactivo"  />
            </div>
            <Button variant="primary" type="submit">
                Submit
            </Button>
    </Form>
);
  }
  