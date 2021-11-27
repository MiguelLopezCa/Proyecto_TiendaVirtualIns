const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	identificacion: /^.{8,10}$/, // 8 a 10 digitos.
	contraseña: /^.{4,12}$/, // 4 a 12 digitos.
  usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
  rol,
	telefono: /^\d{10}$/ // 10 numeros.
}

const campos = {
	nombre: false,
  apellido:false,
  identificacion:false,
	contraseña: false,
  usuario: false,
  rol:false,
	telefono: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
    case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
    case "apellido":
    validarCampo(expresiones.apellido, e.target, 'apellido');
  break;
		case "identificacion":
			validarCampo(expresiones.identificacion, e.target, 'identificacion');
		break;
		case "contraseña":
			validarCampo(expresiones.contraseña, e.target, 'contraseña');
			validarPassword2();
		break;
		case "contraseña1":
			validarPassword2();
		break;
    case "usuario":
			validarCampo(expresiones.usuario, e.target, 'usuario');
		break;
		case "rol":
			validarCampo(expresiones.rol, e.target, 'rol');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('contraseña');
	const inputPassword2 = document.getElementById('contraseña1');

	if(inputPassword1.value !== inputPassword2.value){
		document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['contraseña'] = false;
	} else {
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['contraseña'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

});