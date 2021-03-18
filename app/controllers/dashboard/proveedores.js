//Método que agrega un controlador de eventos cuando el contenido del documento ha sido cargado
document.addEventListener('DOMContentLoaded', function() {
    //Se inicializa el componente sidenav (navegación lateral)
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    //Se inicializa el componente slider
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);
    //Se inicializa el componente modal
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
    //Se inicializa el componente carousel
    var elems = document.querySelectorAll('.carousel');
    var instances = M.Carousel.init(elems);
    //Se inicializa el componente collapsible
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
    //Se inicaliza el componente dropdown
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems,);
    //Se inicializa el componente select
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);

});