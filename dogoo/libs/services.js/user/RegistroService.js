class RegistroService {
    constructor() {
        this.getServiceUrl = "./back/services/user/getRegistro.php";
        this.postServiceUrl = "./back/services/user/postRegistro.php";
    }

    getRegistro(){
        return $.getJSON( this.getServiceUrl)   
    }

    postRegistro(nombre, email, pass, departamento){
        return $.post(this.postServiceUrl,{"nombre":nombre, "email":email, "pass":pass, "departamento":departamento })   
    }
}