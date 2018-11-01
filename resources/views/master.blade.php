@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8 ">
            

            {!! Form::select('estados', $estados, null,['id'=>'com_estado']) !!}

            {!! Form::select('municipios',['placeholder'=>'Selecciona un Municipio'],null,['id'=>'com_municipio']) !!}
            



        </div>
    </div>
</div>

@endsection

<script src="{{ asset('js/jquery.js') }}"></script>
<script>
    $(document).ready(function(){


        $('#com_estado').change(function(e){

            var id=e.target.value;
            console.log(id);
            
            if(id=="selected"){
                //$('#com_municipio').append("<option value='" "'>"Seleccione un Municipio"</option>");
                console.log("nada");
            }
            else{
                $.get("municipios/" + id , function(res, estado){  //e.target.value  sirve para obtener el campo y el id selecciondo
                    //console.log(res);
                    $('#com_municipio').empty();
                    for(i=0; i<res.length ;i++)
                    {
                        $('#com_municipio').append("<option value='" +res[i].id+"'>"+res[i].nombre+"</option>");
                    }
                });
            }
            
        });


    });

</script>