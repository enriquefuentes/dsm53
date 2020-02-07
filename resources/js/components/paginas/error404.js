import React from 'react';
import {Card} from 'react-bootstrap';

export default function error404(props){
    return(
       <Card bg="danger"  text="white" style={{witdh}}>
           <Card.Header>{props.encabezado}</Card.Header>
           <Card.Body>
               <Card.title></Card.title>
               <Card.text></Card.text>
           </Card.Body>

       </Card>
    )
}