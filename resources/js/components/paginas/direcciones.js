import React from 'react';

export default function Direcciones(props){
	const url = 'http://localhost:8000/api/direcciones'
fetch(
	url
	, {
		method:'get'
		, credentials:'include'
		, mode:'cors'
		, headers: new Headers({
			'Authorization': 'Bearer rg7E4asTCcqrYBIcNlAPB4Kuxy61EhGj1rakYbAJgESlwRq4ZkaPjAIjYeyi'
			, 'Accept':'Application/json'
			, 'Access-Control-allow-Credentials':true
			, 'Access-Control-Request-Method':'get'
			, 'Access-Control-Request-Headers':'Authorization'
				})
			}
	)
	.then(function(response){
		return response.json();
	})
	.then(function(myjson){
		console.log(myjson);
	}).catch(console.log)

	return 'hola';

}