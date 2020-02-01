import React from 'react';
import {Form, Button} from 'react-bootstrap';

export default function Carrera(props){
  return (

  <Form>
  <Form.Group controlId="carrera">
    <Form.Label>Carrera</Form.Label>
    <Form.Control as="select">
        <option value="1">Tecnologias de la Información y Comunicación</option>
        <option value="2">Seguridad</option>
        <option value="2">Desarrollo de Negocios</option>
        <option value="2">Mecatronica</option>



        </Form.Control>
        </Form.Group>
        <Button variant="primary" type="submit">
        Enviar
        </Button>

    </Form>
        );
      }
