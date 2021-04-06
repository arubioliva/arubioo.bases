// // JavaScript Document
// function saludar() {
//   alert("Hola Alejandro tu script está funcionando.");
// }
// /** Muestra una caja en pantalla con el texto entre comillas.*/
// // document.write("Hola mundo");
// /** Introduce el texto entre comillas en la pagina.*/
// function declaracionVariables() {
//   var miNombre = "Alejandro";
//   var puntuacion = 0;
//   var recibePremio = puntuacion == 0 ? false : true;
//   var record = 5000,
//     puntuacionExtra = "225";
//   record += Number(puntuacionExtra);
//   alert(
//     miNombre +
//       " Obtuvo una puntuacion de: " +
//       puntuacion +
//       " y tiene un record de: " +
//       record +
//       ", y " +
//       (recibePremio ? "si" : "no") +
//       " recibe premio."
//   );
// };
// function miNombre() {
//   var nombre = "Alejandro",
//     apellido = "Rubio";
//   document.write("<p>" + nombre + " " + apellido + "</p>");
// };
// function pedirNombre() {
//   var nombreCliente = prompt("Introduce tu nombre:");
//   var apellidoCliente = prompt("Introduce tu primer apellido:");
//   document.write(
//     "Hola " + nombreCliente + " " + apellidoCliente + ", ¿Qué tal estás?"
//   );
// };
// function arrays() {
//   var definicionUno = [];
//   var definicionDos = new Array();
//   // Introduce un elemento al final de la coleccion
//   definicionUno.push(25);
//   // Elimina el último elemento de la coleccion, también lo expulsa.
//   definicionUno.pop();
//   // Elimina el primer elemento de una coleccion, también lo expulsa.
//   definicionUno.shift();
//   // Añade un elemento en la primera posición de la colección.
//   definicionUno.unshift(1);
//   // Para acceder al contenido de el array simplemente
//   // utilizamos el nombre de la variable y unas llaves con su posicion.
//   document.write(definicionUno[0]);
//   // Conocemos la longitud de la coleccion, es decir la cantidad de datos
//   // que guardamos en su interior.
//   document.write(definicionUno.length);
//   definicionUno.push(prompt("Introduce un nuevo dato:"));
//   document.write(definicionUno[definicionUno.length - 1]);
//   definicionUno.forEach((cosa) => {
//     document.write(cosa);
//   });
// }
function estructurasControl() {
  var precioCoche = 6000;
  // Pedimos los datos necesarios para la ejecucion.
  var dineroAhorrado = prompt("Introduce el dinero que tienes ahorrado:");
  var edad = prompt("Introduce tu edad:");
  // Condiciones para la compra del coche.
  if (dineroAhorrado >= precioCoche && edad >= 18) {
    document.write("Puedes comprar el coche.");
  } else {
    document.write("No puedes comprar el coche.");
  }

  document.write("Continuemos con la ejecución del programa");
}
function cmabioColorWeb() {
  var cuerpo = document.getElementById("cuerpo");
  // Declaracion de el color.
  var colorWeb = prompt("Introduce el color de fondo. Azul/Verde/Rojo")
    .toLowerCase;
  // Estructura de control, en caso de que la opcion introducida por el
  //  usuario no esté contemplada, se avisará al usuario.
  if (colorWeb == "azul") {
    cuerpo.style.backgroundColor = "blue";
  } else if (colorWeb == "verde") {
    cuerpo.style.backgroundColor = "green";
  } else if (colorWeb == "rojo") {
    cuerpo.style.backgroundColor = "red";
  } else {
    document.write("El color especificado no se encuentra entre las opciones.");
  }
}
function calculadoraCutre() {
  var num1 = prompt("Introduce el primer nº:");
  var num2 = prompt("Introduce el segundo nº:");
  var operacion = prompt(
    "¿Qué operación deseas realizar? suma/resta/multiplicacion/division"
  ).toLowerCase;
  if (operacion == "suma") {
    alert(parseInt(num1) + parseInt(num2));
  } else if (operacion == "resta") {
    alert(parseInt(num1) - parseInt(num2));
  } else if (operacion == "multiplicacion" || operacion == "multiplicación") {
    alert(parseInt(num1) * parseInt(num2));
  } else if (operacion == "division" || operacion == "división") {
    alert(parseInt(num1) / parseInt(num2));
  } else {
    alert("Esta operación no está contemplada.");
  }
}
