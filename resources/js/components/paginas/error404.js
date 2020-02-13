import React from 'react';
import {Card} from 'react-bootstrap';
export default function Error404(props){
    return (
        <>
        <Card bg="danger" text="white" style={{ width: '18rem' }}>
    <Card.Header>{props.Encabezado}</Card.Header>
    <Card.Body>
    <Card.Title>{props.title}</Card.Title>
      <Card.Text>
        {props.text}
      </Card.Text>
    </Card.Body>
  </Card>
  <br />
  </>
    );
}