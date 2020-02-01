import React from 'react';
import {Form, Button} from 'react-bootstrap';

export default function Carrera(props){
  return (

  <Form>
  <Form.Group controlId="asignatura">
    <Form.Label>Asignatura</Form.Label>
    <Form.Control as="select">
        <option value="1">Desarrollo Movil Multiplataforma</option>
        <option value="2">Aplicaciones Web 14.0</option>
        <option value="2">BD para computo en la nube</option>
        <option value="2">Integradora</option>



        </Form.Control>
        </Form.Group>
        <Button variant="primary" type="submit">
        Enviar
        </Button>

    </Form>
        );
      }
