
let posy;
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'hola': function() {
      alert("Bienvenido a ECPROJECT");
    },
    'subir': function() {
    	posy = (posy>=600)? $(window).scrollTop()-600: 0;
      window.scroll({
		  top: posy,
		  behavior: 'smooth'
		});
      
    },
    'bajar': function() {
    	posy = $(window).scrollTop()+600;
      window.scroll({
		  top: posy,
		  behavior: 'smooth'
		});
      
    },
    'inicio': function() {
      location.href="https://dry-eyrie-04718.herokuapp.com/vistas/inicio/inicio.php";
    },
    'proyectos': function() {
      location.href="https://dry-eyrie-04718.herokuapp.com/vistas/trabajos/jobs.php";
    },
    'personas': function() {
      location.href="https://dry-eyrie-04718.herokuapp.com/vistas/candidatos/candidate.php";
    },
    'noticias': function() {
      location.href="https://dry-eyrie-04718.herokuapp.com/vistas/blogs/blog.php";
    },
    'contactanos': function() {
      location.href="https://dry-eyrie-04718.herokuapp.com/vistas/contacto/contact.php";
    }

  };

  // Add our commands to annyang
  annyang.addCommands(commands);
  annyang.setLanguage("es-MX");

  annyang.start();
}
