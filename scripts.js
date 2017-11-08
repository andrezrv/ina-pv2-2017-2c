'use strict';

// Declaración de variables:
var a = 'Hola',
	b = 'Mundo',
	c = a + ' ' + b;

// Creación de array:
var lista = [ 'Pan', 'Vino', 'Cerveza' ];
// console.log( lista[0] ); // Imprime "Pan".

// Creación de objeto.
var persona = {
	nombre: 'Juan',
	apellido: 'Perez',
	edad: 30
};
// console.log( persona.nombre ); // Imprime "Juan".

// Signed function (función firmada).
function hola_mundial( jugador ) {
	console.log( 'Vamos ' + jugador );
}
// hola_mundial( 'Masche' );

// Variable global:
window.foo = 'bar'; // No se define con "var".

// Uso de variable global:
function imprimir_foo() {
	var bar = 'foo'; // Variable local.

	console.log( window.foo );
}
// imprimir_foo(); // Imprime "bar".

// Las variables locales solo son accesibles en su contexto
// de declaración (como en PHP).
function imprimir_bar() {
	console.log( bar );
}
// imprimir_bar(); // ReferenceError: bar is not defined.

// En el modo estricto, los errores de referencia (ReferenceError)
// detienen la ejecución del script (como el Fatal Error de PHP).

// Función anónima:
var hola_mundo = function() {
	console.log( window.foo );
};
// hola_mundo(); // Imprime "bar".

// Las funciones firmadas pueden ser llamadas antes de ser declaradas
// (igual que en PHP):
do_foo();

function do_foo() {
	console.log( 'foooo' );
}

// Las funciones anónimas no pueden usarse antes de ser declaradas:
// do_bar(); // TypeError: do_bar is not a function

var do_bar = function() {
	console.log( 'baaaar' );
}

var handleClick = function() {
	if ( event.target.classList.contains( 'red-bg' ) ) {
		event.target.classList.remove( 'red-bg' );
	} else {
		event.target.classList.add( 'red-bg' );
	}
}

// Agregar event listener a un elemento.

window.onload = function() {
	// Agregar event listener a varios elementos.
	var boxes = document.querySelectorAll( '.box' );

	for ( var i = 0; i < boxes.length; i++ ) {
	    boxes[i].addEventListener( 'click', handleClick );
	}

	/*var box = document.querySelector( '.box' );
	box.addEventListener( 'click', handleClick );*/
};

// Uso de timeout:
/*setTimeout( function() {
	console.log( 'Esperé todo un segundo para imprimir esto.' );
}, 1000 );*/

// Uso de intervalos:
/*var counter = 0;

setInterval( function() {
	console.log( counter++ );
}, 1000 );*/
