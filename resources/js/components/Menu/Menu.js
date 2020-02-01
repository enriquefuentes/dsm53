import React from 'react';

import { Navbar, Nav, NavDropdown, Form, FormControl, Button  } from 'react-bootstrap';

export default function Menu(props) {
    return (
        <Navbar bg="light" expand="lg">
            <Navbar.Brand href="#home">React-Bootstrap</Navbar.Brand>
            <Navbar.Toggle aria-controls="basic-navbar-nav" />
            <Navbar.Collapse id="basic-navbar-nav">
                <Nav className="mr-auto">
                <Nav.Link href="#home">Home</Nav.Link>

                <NavDropdown title="Catalogos" id="basic-nav-dropdown">
                    <NavDropdown.Item href="#action/3.1">Direcciones</NavDropdown.Item>
                    <NavDropdown.Item href="#action/3.2">Carreras</NavDropdown.Item>
                    <NavDropdown.Item href="#action/3.3">Asignaturas</NavDropdown.Item>
                    <NavDropdown.Item href="#action/3.3">Cuatrimestres</NavDropdown.Item>
                    <NavDropdown.Item href="#action/3.3">Laboratorios</NavDropdown.Item>
                    <NavDropdown.Divider />

                </NavDropdown>
                </Nav>
                <Form inline>
                <FormControl type="text" placeholder="Search" className="mr-sm-2" />
                <Button variant="outline-success">Buscar</Button>
                </Form>
            </Navbar.Collapse>
        </Navbar>
    );
}
