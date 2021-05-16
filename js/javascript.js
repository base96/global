/*Temporizador pantalla de carga,loader*/
var container = document.getElementById('cargaParaJS');

setTimeout /*para que ocurra algo despues del tiempo que le diga*/
(
	function()
	{
		container.classList.add('cerrar'); /*juntar clases*/
	}
	,2000 /*en ms, la animacion tiene 1000 más (primer intento 6000)*/
);


/*VALIDACION FORMULARIO*/
    function validar()
    {
    if (compru.usuario.value=="")
        {alert("Por favor rellene el campo Usuario");}
    else if (compru.edad.value < 18)
        {alert("Tienes que ser mayor de edad");}
        else if (compru.email.value.length < 5)
            {alert("Tu correo parece corto, prueba con 5 caracteres mínimo");}
                else if (compru.pass1.value=="")
                    {alert("Por favor rellene el campo CONTRASEÑA");}
                        else if (compru.pass2.value=="")
                            {alert("Por favor rellene el campo REPETIR CONTRASEÑA");}
                                else if (compru.pass1.value != compru.pass2.value)
                                    {alert ("La contraseñas no coinciden, por favor vuelva a intentarlo");}
                                        else if (compru.pass1.value.length < 5 )
                                            {alert("El campo contraseña debe tener minimo 5 caracteres");}
                                                else if (compru.pass2.value.length < 5)
                                                    {alert("El campo REPETIR CONTRASEÑA debe tener minimo 5 caracteres");}

    else
        {compru.submit();}  

    }