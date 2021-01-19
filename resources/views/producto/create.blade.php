<style>
h1 {
  font-size: 50px;
 
  background-color: #147076;
  color: white;
  font-family: serif;
  padding: 5px 5px;
  margin-top: 20px;
  
}
.container{
    width: 440px;
    height: 400px;
    background-image: linear-gradient(rgba(71, 226, 248, 0.62), rgba(124, 224, 239, 0.67), rgba(107, 225, 242, 0.53)); /color/
    color: black;
    top:380px;
    left:680px;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 50px 30px;
    padding-top: 0%;
   
}
h2{
    top: 10px;
    bottom: -90px;
}

body{
        background: url(../img/9.jpg)no-repeat center center fixed;
}
</style>
<h1>
<small class="text-muted"><center>Registro de Nuevos Articulos</center></small>
    </h1>
    <div class="container">
    <h2>
        <form class="form-group" file="true" enctype="multipart/form-data" method="POST" action="{{ route('producto.store') }}">
            @csrf
            <div class="form-group row">
                <label for="nombre"  class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input name="nombre" type="text" class="form-control" size="50"  placeholder="Nombre de Articulo">
                </div>
            </div>  
            <div class="form-group row">
                <label for="descripcion" class="col-sm-2 col-form-label">Descripcion:</label>
                <div class="col-sm-10">
                    <input name="descripcion" type="text" class="form-control" size="50" placeholder="Descripcion del Articulo">
                </div>
            </div>  
            <div class="form-group row">
                <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                <div class="col-sm-10">
                    <input name="precio" type="text" class="form-control" size="50" placeholder="Precio del Articulo">
                </div>
                
            <div class="form-group row">
                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad:</label>
                <div class="col-sm-10">
                    <input name="cantidad" type="text" class="form-control" size="50" placeholder="Catidad de Articulo">
                </div>
            <div class="form-group row">
                <label for="file" class="col-sm-2 col-form-label">Imagen:</label>
                <div class="col-sm-10">
                  <br>  <input class="active" name="imagen" type="file" class="form-control" >
                </div>
            </div> 
            </div> 
            </h2>
            <br><center><button type="submit" class="btn btn-outline-primary">Guardar</center></button> 
        </form>
        
    </div>