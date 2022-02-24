function validateInputs(e,acceptRegex){
    var keychar= !e.charcode ? e.wich : e.charCode;
    if ([13,8].indexOf(keychar)>1)
        return true;
    var regex = new RegExp(acceptRegex);
    var str = String.fromCharCode(keychar);
    if(regex.test(str))
        return true;
    e.preventDefault();
    return false;
}

$(document).on("focus", "input", function(e){
    var blank = this.value;
    if(blank== ""){
        $(this).addClass("invalidate");
    }
})


/* $(document).on("onclick", "#loginbutton", function(e){
    var email = $("#InputEmail").val();
    var password= $("#InputPassword").val();
    if(email == "" && password == ""){
        alert("campos sin llenar");
    }
    else{
        alert("bienvenido :D");
    }
}) */
$("#loginbutton").click(function(e){
    var email = $("#InputEmail").val();
    var password= $("#InputPassword").val();
    if(email === "" || password === ""){
        alert("campos sin llenar");
    }
    else{
        alert("bienvenido :D");
        window.location.href="Profile.php";
    }
})
$("#registerbutton").click(function(e){
    validar();
})

function validar() {
    // Variable que usaremos para determinar si el input es valido
    let isValid_usuario = false;
    let isValid_password = false;
    let isValid_email = false;
    let isValid_Nombre = false;
    let isValid = false;

    // El input que queremos validar
    const usuario = $("#InputUser").val();
    const password = $('InputPassword').val();
    const aEmail = $('InputEmail').val();
    const Nombre = $('InputName').val();
   

    //El div con el mensaje de advertencia:
    const message = document.getElementById('message');

    usuario.willValidate = false;



    // El tamaño maximo para nuestro input
    const maximo = 35;

    // El pattern que vamos a comprobar
    const patternLetras = new RegExp('^[A-Z, \u00D1, \u00F1, \u00E1, \u00E9, \u00ED, \u00F3, \u00FA]+$', 'i');

    

    //  validacion contraseña
    if(password != ""){

        var textoP=$('#InputPassword').val();
        var reg=/^(?=.*[a-z])(?=.*[A-Z]{1,})(?=.*[0-9]{1,})(?=.*[!@#\$%\^&\*¡”#/=’?¡¿:;,.\-_+{\][}()]{1,}).{8}$/g; 
        if (textoP.match(reg)) { 
     
            //alert("Me activaste");
            isValid_password = true;
        } else
        {
            alert("Contraseña no valida: Recuerda que la contraseña debe de tener: 8 caracteres, 1 numero, 1 mayuscula, 1 caracter especial (¡”#$%&/=’?¡¿:;,.-_+*{][}) y sin espacios en blanco.");
            document.getElementById('InputPassword').value = "";
            isValid_password = false;
        }
    }


    //  validacion Email
    if(aEmail!= ""){

        var textoE=$('#InputEmail').val();
        var reg=/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9_.+-]+.[a-zA-Z0-9_.+-]+$/g; 
        if (textoE.match(reg)) { 
     
           // alert("Me activaste");
           isValid_email = false;
        } else
        {
            alert("Correo no valido");
            document.getElementById('InputEmail').value ="";
            isValid_email = false;
        }
    }




//  validacion, si usuario esta vacio entonces no es valido
    if(!usuario.value) {
        isValid_usuario = false;
      } else {
        // Segunda validacion, si input es mayor que 35
        if(usuario.value.length > maximo) {
            isValid_usuario = false;
        } else {
          // Tercera validacion, si input contiene caracteres diferentes a los permitidos
          if(!patternLetras.test(usuario.value)){ 
          // Si queremos agregar letras acentuadas y/o letra ñ debemos usar
          // codigos de Unicode (ejemplo: Ñ: \u00D1  ñ: \u00F1)
          isValid_usuario = false;
          } else {
            // Si pasamos todas la validaciones anteriores, entonces el input es valido
            isValid_usuario = true;
          }
        }
      }

  
  if(!Nombre) {
    isValid_Nombre = false;
  } else {
    
    if(Nombre.length > maximo) {
        isValid_Nombre = false;
    } else {
      
      if(!patternLetras.test(Nombre)){ 
      
      isValid_Nombre = false;
      } else {
        
        isValid_Nombre = true;
      }
    }
  }
      


  if(!isValid) {
    // rojo: no es valido
    input.style.borderColor = 'salmon'; // me parece que 'salmon' es un poco menos agresivo que 'red'
    // mostramos mensaje
    message.hidden = false;
  } else {
    // verde: si es valido
    input.style.borderColor = 'palegreen'; // 'palegreen' se ve mejor que 'green' en mi opinion
    // ocultamos mensaje;
    message.hidden = true;
  }
  

    if(isValid_usuario && isValid_password && isValid_email && isValid_Nombre){
        alert('Todos los campos han sido llenados correctamente');

    }else {
    alert('Faltan campos');
}
}