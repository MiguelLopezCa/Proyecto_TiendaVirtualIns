function onclickGuardar(){
    var p1 = document.getElementById("contr").value;
    var p2 = document.getElementById("contr1").value;
    var espacios = false;
    var cont = 0;
    if(p1!=p2){
        alert('Las contraseñas no coinciden')
        console.error('s');
    }else{
        if(p1=='' ||p2==''){
            alert('El sistema no permite contraseñas vacias');

        }
        if(p1==' ' &&p2==' '){
            alert('Asigne una contraseña sin espacios');
        }else{
            alert('Usuario creado');
        }
        
    }
}
function identificacion(){
    var identificacion = parseInt(document.getElementById("ident").value);
}