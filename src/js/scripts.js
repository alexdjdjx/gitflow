const botones = document.querySelectorAll('.contenedor-botones .boton');

botones.forEach(boton => {
  boton.addEventListener('click', function() {
    const id = this.getAttribute('id');
    abrirPaginaConID(id);
  });
});

function abrirPaginaConID(id) {
  window.open('pagina.php?id=' + encodeURIComponent(id));
}
