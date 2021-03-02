var usuario = document.getElementById('user');

function validarFormulario(){
    if(usuario == null || usuario == ""){
        alert('hay campos vacios');
        return false;
    }
}