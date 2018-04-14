class BuscadorService {
    constructor() {
        this.serviceUrl = "./back/services/buscador/getBusqueda.php";
    }

    getBusqueda(){
        return $.getJSON( this.serviceUrl)   
    }
    
    getDatosBusqueda(id_raza, id_provincia, id_sexo){
        return $.getJSON(this.serviceUrl,{"id_raza":id_raza,"id_provincia":id_provincia, "id_sexo":id_sexo })
    }
}