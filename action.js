 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('#navbarColor03');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('#navbarColor03').sidenav();
  });
        