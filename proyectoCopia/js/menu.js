//Script para que la opcion del menu(pagina actual) se mantenga selecionada
      // Obtén la URL de la página actual
      var currentPage = window.location.href;

      // Obtén todos los enlaces del menú
      var menuLinks = document.querySelectorAll('.menu a');

      // Itera sobre los enlaces y agrega la clase 'active' al enlace correspondiente a la página actual
      menuLinks.forEach(function(link) {
        if (link.href === currentPage) {
          link.classList.add('active');
        }
      });




//script para que  mi submenu se mantenga escondido y aparezca cuando se da click
  document.addEventListener('DOMContentLoaded', function () {
  var proyectosText = document.querySelector('.proyectos-text');
  var proyectosOptions = document.getElementById('proyectos-options');

  proyectosText.addEventListener('click', function () {
    if (proyectosOptions.style.display === 'block') {
      proyectosOptions.style.display = 'none';
    } else {
      proyectosOptions.style.display = 'block';
    }
  });
})

