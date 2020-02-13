import React from 'react';
import { Formik } from 'formik';
import * as yup from 'yup';
import {Form, Button, InputGroup } from 'react-bootstrap';

var hoy = new Date();
var hace = new Date();
hace.setFullYear(hoy.getFullYear() - 3);

const schema = yup.object({
    firstName: yup.string().matches(/^[1-9]{2}[0-9]{7}$/, 'Formato de matricula no valido'),
    fecha_nacimiento:yup.date()
      .min(hace, 'Debes tener maximo 5 años')
      .max(hace, 'Fecha no puede ser posterior a la fecha actual'),
    firstName: yup.string().min(5, 'Demasiado corto').required(),
    lastName: yup.string().required(),
    username: yup.string().required(),
    city: yup.string().required(),
    state: yup.string().required(),
    zip: yup.string().required(),
    terms: yup.bool().required(),
  });

export default function Validacion(props){
    return (
        <Formik
          validationSchema={schema}
          onSubmit={console.log}
          initialValues={{
             firstName: 'Mark',
             lastName: 'Otto',
          }}
        >
          {({
            handleSubmit,
            handleChange,
            handleBlur,
            values,
            touched,
            isValid,
            errors,
          }) => (
            <Form noValidate onSubmit={handleSubmit}>

            <Form.Group  controlId="matricula">
              <Form.Label>Matricula</Form.Label>
              <Form.Control
                type="text"
                name="
                matricula"
                value={values.matricula}
                onChange={handleChange}
                isValid={touched.matricula && !errors.matricula}
              />
              <Form.Control.Feedback>Correcto</Form.Control.Feedback>
            </Form.Group>

            <Form.Group  controlId="fecha_nacimiento">
              <Form.Label>Fecha de Nacimiento</Form.Label>
              <Form.Control
                type="date"
                name="fecha_nacimiento"
                value={values.fecha_nacimiento}
                onChange={handleChange}
                isValid={touched.fecha_nacimiento && !errors.fecha_nacimiento}
              />
              <Form.Control.Feedback>Correcto</Form.Control.Feedback>
            </Form.Group>

              <Form.Row>

                <Form.Group  md="4" controlId="validationFormik02">
                  <Form.Label>Last name</Form.Label>
                  <Form.Control
                    type="text"
                    name="lastName"
                    value={values.lastName}
                    onChange={handleChange}
                    isValid={touched.lastName && !errors.lastName}
                  />

                  <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
                </Form.Group>
                <Form.Group  md="4" controlId="validationFormikUsername">
                  <Form.Label>Username</Form.Label>
                  <InputGroup>
                    <InputGroup.Prepend>
                      <InputGroup.Text id="inputGroupPrepend">@</InputGroup.Text>
                    </InputGroup.Prepend>
                    <Form.Control
                      type="text"
                      placeholder="Username"
                      aria-describedby="inputGroupPrepend"
                      name="username"
                      value={values.username}
                      onChange={handleChange}
                      isInvalid={!!errors.username}
                    />
                    <Form.Control.Feedback type="invalid">
                      {errors.username}
                    </Form.Control.Feedback>
                  </InputGroup>
                </Form.Group>
              </Form.Row>
              <Form.Row>
                <Form.Group  md="6" controlId="validationFormik03">
                  <Form.Label>City</Form.Label>
                  <Form.Control
                    type="text"
                    placeholder="City"
                    name="city"
                    value={values.city}
                    onChange={handleChange}
                    isInvalid={!!errors.city}
                  />

                  <Form.Control.Feedback type="invalid">
                    {errors.city}
                  </Form.Control.Feedback>
                </Form.Group>
                <Form.Group  md="3" controlId="validationFormik04">
                  <Form.Label>State</Form.Label>
                  <Form.Control
                    type="text"
                    placeholder="State"
                    name="state"
                    value={values.state}
                    onChange={handleChange}
                    isInvalid={!!errors.state}
                  />
                  <Form.Control.Feedback type="invalid">
                    {errors.state}
                  </Form.Control.Feedback>
                </Form.Group>

<Form.Group  md="3" controlId="validationFormik05">
                  <Form.Label>Zip</Form.Label>
                  <Form.Control
                    type="text"
                    placeholder="Zip"
                    name="zip"
                    value={values.zip}
                    onChange={handleChange}
                    isInvalid={!!errors.zip}
                  />

                  <Form.Control.Feedback type="invalid">
                    {errors.zip}
                  </Form.Control.Feedback>
                </Form.Group>
              </Form.Row>
              <Form.Group>
                <Form.Check
                  required
                  name="terms"
                  label="Agree to terms and conditions"
                  onChange={handleChange}
                  isInvalid={!!errors.terms}
                  feedback={errors.terms}
                  id="validationFormik0"
                />
              </Form.Group>
              <Button type="submit">Enviar</Button>
            </Form>
          )}
        </Formik>
      );
}
