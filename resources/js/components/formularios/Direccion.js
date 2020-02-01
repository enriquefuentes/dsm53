import React, {useState} from 'react';
import { Form,  Button  } from 'react-bootstrap';

export default function Direccion(props){
  const [validated, setValidated] = useState(false);

  const handleSubmit = event => {
   const form = event.currentTarget;
   if (form.checkValidity() === false) {
     event.preventDefault();
     event.stopPropagation();
   }
   setValidated(true);
 };

 return (
   <Form noValidate validated={validated} onSubmit={handleSubmit}>
          <Form.Group controlId="formBasicEmail">
            <Form.Label>Direccion</Form.Label>
            <Form.Control required type="text" placeholder="Ingresa el nombre completo de la direccion" />
            <Form.Text className="text-muted">
              Ejemplo: Tecnologias de la Información y Comunicación.
            </Form.Text>
          </Form.Group>
          
          <Form.Group controlId="abreviatura">
            <Form.Label>Abreviatura</Form.Label>
            <Form.Control required type="text" placeholder="Ingresa la abreviatura de la direccion" />
            <Form.Text className="text-muted">
              Ejemplo: TIC.
            </Form.Text>
          </Form.Group>
          <div key="activos" className="mb-3">
             <Form.Check name="activo" value="Activo" inline label="Activo" type="radio" id="Activo" />
             <Form.Check name="activo" value="Inactivo" inline label="Inactivo" type="radio" id="Inactivo" />
          </div>

          <Button variant="primary" type="submit">
            Enviar
          </Button>
    </Form>
  );
}
