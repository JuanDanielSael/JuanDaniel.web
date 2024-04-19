document.getElementById('login-form').addEventListener('submit', function(event) {
  event.preventDefault();
  
  // Simular redireccionamiento después de 4 segundos
  setTimeout(function() {
    window.location.href = "transicion_del_login.html"; // Cambia esto al archivo correcto
  }, ); // Cambia este valor al tiempo deseado en milisegundos (4 segundos en este caso)
});
