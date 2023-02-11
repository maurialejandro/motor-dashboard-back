@include('layouts.app')


<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card"> 
            <div class="alert alert- ">Crear servicio nuevo</div>
            <div class="card-body"> 
                <form id="tattoo-form" enctype="multipart/form-data" action="" method="POST" >
                {!! csrf_field() !!}
                <div class="row justify-content-center">        
                    <div class="card" style="width: 18rem;">
                           
                           
                                <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <label Class="list-group-item flex-center">
                                    <img src="../logo.png" class="card-img-top" alt="Imagen:">
                                    <input type="file" id="image" name="image"/>
                                    </label>
                                </ul> 

                                <ul class="list-group list-group-flush">
                                    <label Class="list-group-item flex-center">Cliente:
                                        <input type="text" id="title" name="title" value="{{old('title')}}"/>               
                                    </label>
                                </ul>
                                
                                <ul class="list-group list-group-flush">
                                    <label Class="list-group-item flex-center">Marca:
                                       <textarea type="text" id="description" name="description" >{{old('description')}}</textarea>
                                    </label>
                                </ul>
                                <ul class="list-group list-group-flush">
                                    <label Class="list-group-item flex-center">Modelo:
                                        <input type="text" id="price" name="price" value="{{old('price')}}" />
                                    </label>
                                </ul>
                                <ul class="list-group list-group-flush">
                                    <label Class="list-group-item flex-center">Precio:
                                        <input type="text" id="price" name="price" value="{{old('price')}}" />
                                    </label>
                                </ul>
                            </div>
                            <div class="card-body">
                            <button  class="btn btn-outline-dark btn-lg btn-block" type="submit">Guardar</button>
                            </div>
                            </div>
                </div>    
                </form> 
            </div>
        
        </div>
    </div>
</div>    
