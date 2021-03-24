// JavaScript Document
function saludar() {
  alert("Hola Alejandro tu script está funcionando.");
}
/** Muestra una caja en pantalla con el texto entre comillas.*/
// document.write("Hola mundo");
/** Introduce el texto entre comillas en la pagina.*/
function declaracionVariables() {
  var miNombre = "Alejandro";
  var puntuacion = 0;
  var recibePremio = puntuacion == 0 ? false : true;
  var record = 5000,
    puntuacionExtra = "225";
  record += Number(puntuacionExtra);
  alert(
    miNombre +
      " Obtuvo una puntuacion de: " +
      puntuacion +
      " y tiene un record de: " +
      record +
      ", y " +
      (recibePremio ? "si" : "no") +
      " recibe premio."
  );
}
function miNombre() {
  var nombre = "Alejandro",
    apellido = "Rubio";
  document.write("<p>" + nombre + " " + apellido + "</p>");
}
function pedirNombre() {
  var nombreCliente = prompt("Introduce tu nombre:");
  var apellidoCliente = prompt("Introduce tu primer apellido:");
  document.write(
    "Hola " + nombreCliente + " " + apellidoCliente + ", ¿Qué tal estás?"
  );
}
