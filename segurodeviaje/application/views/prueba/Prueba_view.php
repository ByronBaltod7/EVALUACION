<style  type="text/css">
.container{
  width: 100%;
  margin: 0 auto;
  margin-top:50px;
}
#map_container{
  position: relative;
}
#map_canvas{
    height: 0;
    overflow: hidden;
    padding-bottom: 22.25%;
    padding-top: 30px;
    position: relative;
}

body{
    overflow-x: scroll;
}
.wrapper{
    overflow-x: visible !important;
    overflow-y: visible;
}
header.main-header{
    width: 100%;
    position: fixed;
}
.content-wrapper{
    margin-top: 50px;
}
.table-responsive{
    overflow: visible;
    width: auto;
    border: 0px !important;
}
@media(max-width: 768px){
    .content-wrapper{
        margin-top: 100px;
    }
}
.table-responsive #lista_wrapper .row .col-sm-12{
    width: auto !important;
}
.content-wrapper, .breadcrumb{
    background-color: #fff !important;
}
section.invoice{
    border: 0px !important;
}
</style>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Prueba - Desarrollador Junior</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="Prueba - Desarrollador Junior">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="robots" content="index,follow,noodp,noydir"/>
        <meta name="google-site-verification" content="T_M_Ym5DQ-cEQQhx_jswyCBTssIdgtewICcvb3sgh8g" />
        <meta name="Keywords" content="Prueba - Desarrollador Junior" />
        <meta property="og:title" content="Prueba - Desarrollador Junior" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="icon.png" />
        <meta property="og:description" content="Prueba - Desarrollador Junior" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/dist/css/font-awesome.css" rel="stylesheet" type="text/css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/dist/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/plugins/daterangepicker/daterangepicker-bs3.css">
        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/plugins/timepicker/bootstrap-timepicker.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
        <!-- Morris charts -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/plugins/morris/morris.css" rel="stylesheet" type="text/css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/dist/css/estilos.css" rel="stylesheet" type="text/css">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url() ?>frontend/plugins/jQuery/jQuery-2.1.4.js"></script>
        <!--script src="<?php echo base_url() ?>frontend/plugins/jQuery/jQuery-2.1.4.min.js"></script-->
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url() ?>frontend/bootstrap/js/bootstrap.min.js"></script>
    </head>
<body>
<section class="invoice">
    
    <div id="impresion">
        <div class="row">
            <div class="box-header">
                <h3 class="box-title"><b><i class="fa fa-file-text-o"></i> PRUEBA - DESARROLLADOR JUNIOR</b></h3>
                <small class="pull-right"><b>Fecha: </b><?php echo date('d-m-Y');?></small>
            </div>
        </div>
        <hr style="margin-top:10px;margin-bottom:10px;">
        <div class="row invoice-info">
            <div class="no-print col-md-2 col-sm-5">
                <b>Filtros: </b>
                <select name="filtro" id="filtro" class="form-control" onchange="cambiar_filtro()">
                    <option value="-1"><b>Seleccione un Filtro</b></option>
                    <option value="1"><b>Categoría: Drinks</b></option>
                    <option value="2"><b>Categoría: Lunch</b></option>
                    <option value="3"><b>Categoría: Food</b></option>
                    <option value="4"><b>Categoría: Sea</b></option>
                    <option value="5"><b>Productos Disponibles</b></option>
                    <option value="6"><b>Productos Agotados</b></option>
                    <option value="7"><b>Productos Más Vendidos</b></option>
                    <option value="8"><b>Precio > 30.000</b></option>
                    <option value="9"><b>Precio < 10.000</b></option>
                   
                </select>
            </div>

            <div class="no-print col-md-2 col-sm-5">
                <b>Ordenar por: </b>
                <select name="orden" id="orden" class="form-control" onchange="cambiar_orden()">
                    <option value="-1"><b>Seleccione una Ordenación</b></option>
                    <option value="1"><b>Ordenar por Nombre </b></option>
                    <option value="2"><b>Ordenar por Mayor Precio</b></option>
                    <option value="3"><b>Ordenar por Menor Precio</b></option>
                </select>
            </div>
            <div class="col-md-8 col-sm-8" style="text-align:right;">
                
                <a id="" name="" class="btn btn-warning" style="margin-left: 4px;" onclick="mostrar_productos()" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> Mostrar Productos</a>
                <button id="generar_dm" name="generar_dm" onclick="ver_carrito()" class="btn btn-success no-print" style="margin-left: 4px;"><i id="icon_pro" class="fa fa-shopping-cart" aria-hidden="true"></i> Ver Carrito</button>
                
            </div>
        </div>
        <hr style="margin-top:10px;margin-bottom: 10px;">

        <b>Buscar Producto: </b>
        <input type="text" class="form-control" name="search" id="search" placeholder="Nombre de Producto" style="width: 15% !important;display: initial;">
        <a id="" name="" class="btn btn-success" onclick="buscar_productos()"><i class="fa fa-search" aria-hidden="true"></i></a>

        <hr style="margin-top:10px;margin-bottom: 10px;">
        <div class="row invoice-info">
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table id="lista" class="table table-bordered table-striped">
                    <thead>
                        <tr class="info" role="row">
                            <th style="padding-right:8px;width:100px !important;min-width:100px !important;max-width:100px !important;" nowrap>NAME</th>
                            <th style="padding-right:8px;width:350px !important;min-width:350px !important;max-width:350px !important;" nowrap>DESCRIPTION</th>
                            <th style="padding-right:8px;width:226px !important;min-width:226px !important;max-width:226px !important;" nowrap>IMG</th>
                            <th style="padding-right:8px;width:57px !important;min-width:57px !important;max-width:57px !important;" nowrap>PRICE</th>
                            <th style="padding-right:8px;width:160px !important;min-width:160px !important;max-width:160px !important;" nowrap>CATEGORIES</th>
                            <th style="padding-right:8px;width:100px !important;min-width:100px !important;max-width:100px !important;" nowrap>AVAILABLES</th>
                            <th style="padding-right:8px;width:100px !important;min-width:100px !important;max-width:100px !important;" nowrap>BEST SELLER</th>
                            <th style="padding-right:8px;width:50px !important;min-width:50px !important;max-width:50px !important;" nowrap>ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody class="tbodyP" role="alert">    
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>        
</section>
</body>
</html>
<div class="modal fade" id="modal_carrito" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-shopping-cart"></i> <b>Carrito de Compras</b></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group control-group container-fluid" style="padding-top: 5px;margin-left: -13px;">
                        
                        <div class="table-responsive">
                            <table id="carrito" class="table table-bordered table-striped">
                            <thead>
                                <tr class="info" role="row">
                                    <th style="padding-right:8px;width:100px !important;min-width:100px !important;max-width:100px !important;" nowrap>NAME</th>
                                    <th style="padding-right:8px;width:350px !important;min-width:350px !important;max-width:350px !important;" nowrap>DESCRIPTION</th>
                                    <th style="padding-right:8px;width:57px !important;min-width:57px !important;max-width:57px !important;" nowrap>PRICE</th>
                                    <th style="padding-right:8px;width:50px !important;min-width:50px !important;max-width:50px !important;" nowrap>ACCIÓN</th>
                                </tr>
                            </thead>
                            <tbody class="tbodyP" role="alert">    
                            </tbody>
                            </table>
                        </div>

                    </div>
                </div>     
                <div class="modal-footer">
                    
                </div>
            </div>
    </div>
</div>
<script src="<?php echo base_url() ?>frontend/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>frontend/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- Autocomplete  -->
<link rel="stylesheet" href="<?php echo base_url(); ?>frontend/plugins/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css"/>
<script type="text/javascript" src="<?php echo base_url() ?>frontend/plugins/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<!-- Datepicker -->
<script src="<?php echo base_url() ?>frontend/plugins/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url() ?>frontend/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>frontend/plugins/slimScroll/jquery.slimscroll.min.js"></script>

        <!-- FastClick -->
        <script src="<?php echo base_url() ?>frontend/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>frontend/dist/js/app.min.js"></script>

        <!-- sweetAlert. -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/plugins/sweetalert/sweetalert2.css" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url() ?>frontend/plugins/sweetalert/sweetalert2.min.js"></script>

        <!-- include the script -->
        <script src="<?php echo base_url() ?>frontend/plugins/alertify/alertify.min.js"></script>
        <!-- include the style -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/plugins/alertify/css/alertify.min.css" />
        <!-- include a theme -->
        <link rel="stylesheet" href="<?php echo base_url() ?>frontend/plugins/alertify/css/themes/bootstrap.min.css" />
        <!-- Moment -->
        <script src="<?php echo base_url() ?>frontend/plugins/moment.min.js" type="text/javascript"></script>

<script type="text/javascript">

var db = '{"categories":[{"categori_id":1,"name":"drinks"},{"categori_id":2,"name":"lunch"},{"categori_id":3,"name":"food"},{"categori_id":4,"name":"sea"}],"products":[{"id":1,"name":"Lorem","price":"60.000","available":true,"best_seller":true,"categories":[1,4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":2,"name":"ipsum","price":"20.000","available":false,"best_seller":false,"categories":[4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":3,"name":"dolor","price":"10.000","available":true,"best_seller":true,"categories":[4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":4,"name":"sit","price":"35.000","available":false,"best_seller":false,"categories":[1,2],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":5,"name":"amet","price":"12.000","available":true,"best_seller":true,"categories":[1,4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":6,"name":"consectetur","price":"120.000","available":true,"best_seller":false,"categories":[1,4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":7,"name":"adipiscing","price":"50.000","available":false,"best_seller":false,"categories":[1,3],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":8,"name":"elit","price":"2000","available":true,"best_seller":false,"categories":[1,3],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":9,"name":"Maecenas","price":"150.000","available":true,"best_seller":true,"categories":[2,4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":10,"name":"eu","price":"200.000","available":false,"best_seller":true,"categories":[2,3],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."}]}';
var categories = '{"categories":[{"categori_id":1,"name":"drinks"},{"categori_id":2,"name":"lunch"},{"categori_id":3,"name":"food"},{"categori_id":4,"name":"sea"}]}';
var products = '{"products":[{"id":1,"name":"Lorem","price":"60.000","available":true,"best_seller":true,"categories":[1,4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":2,"name":"ipsum","price":"20.000","available":false,"best_seller":false,"categories":[4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":3,"name":"dolor","price":"10.000","available":true,"best_seller":true,"categories":[4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":4,"name":"sit","price":"35.000","available":false,"best_seller":false,"categories":[1,2],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":5,"name":"amet","price":"12.000","available":true,"best_seller":true,"categories":[1,4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":6,"name":"consectetur","price":"120.000","available":true,"best_seller":false,"categories":[1,4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":7,"name":"adipiscing","price":"50.000","available":false,"best_seller":false,"categories":[1,3],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":8,"name":"elit","price":"2000","available":true,"best_seller":false,"categories":[1,3],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":9,"name":"Maecenas","price":"150.000","available":true,"best_seller":true,"categories":[2,4],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."},{"id":10,"name":"eu","price":"200.000","available":false,"best_seller":true,"categories":[2,3],"img":"http://lorempixel.com/200/100/food/","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu."}]}';

var db_json = JSON.parse(db);
var categories_json = JSON.parse(categories);
var products_json = JSON.parse(products);

    $("#lista").dataTable({
  	"bSort": false,
    "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]]
    });

    $("#carrito").dataTable({
    "bSort": false,
    "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
    "searching": false,
    paging: false
    });
    

    function obtener_categorias(categ)
    {
        var tam=categ.length;
        var tam2=categories_json.categories.length;
        var array = [];
        
        if(tam>1)
        {
            for(var i=0; i<tam; i++)
            {
                for(var j=0; j<tam2; j++)
                {
                    if(categ[i]==categories_json.categories[j]['categori_id'])
                    {
                        array.push(categories_json.categories[j]['name']);
                    }
                }
            }
            return array;
        }
        else
        {
            for(var j=0; j<tam2; j++)
            {
                if(categories_json.categories[j]['categori_id']==categ[0])
                {
                    return categories_json.categories[j]['name'];
                }
            } 
        }
    }

    function buscar_productos()
    {
       $("#filtro").val("-1");
       $("#orden").val("-1");
       var tabla = $("#lista").DataTable();
       var nombre_producto = $("#search").val();
       var btn_addCar = '';

        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            btn_addCar = '';

            if(products_json.products[j]['available']==true)
            {
                btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
            }

            if(products_json.products[j]['name'].toUpperCase()==nombre_producto.toUpperCase())
            {
              fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';  
            }
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function mostrar_productos()
    {
       var tabla = $("#lista").DataTable();
       var btn_addCar = '';
       $("#filtro").val("-1");
       $("#orden").val("-1");
       $("#search").val("");
       
        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            btn_addCar = '';

            if(products_json.products[j]['available']==true)
            {
                btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
            }
            

            fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function prod_disponibles()
    {
       var tabla = $("#lista").DataTable();
       var btn_addCar = '';
        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            if(products_json.products[j]['available']==true)
            {
                btn_addCar = '';

                if(products_json.products[j]['available']==true)
                {
                    btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                }

                fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';
            }
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function prod_agotados()
    {
       var tabla = $("#lista").DataTable();
       var btn_addCar = '';
        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            if(products_json.products[j]['available']==false)
            {
                
                btn_addCar = '';

                if(products_json.products[j]['available']==true)
                {
                    btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                }

                fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';
            }
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function prod_masVendidos()
    {
       var tabla = $("#lista").DataTable();
       var btn_addCar = '';
        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            if(products_json.products[j]['best_seller']==true)
            {
                
                btn_addCar = '';

                if(products_json.products[j]['available']==true)
                {
                    btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                }

                fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';
            }
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function formato_precio(text){
      while (text.toString().indexOf(".") != -1)
          text = text.toString().replace(".","");
      return parseFloat(text);
    }

    function precio_mas30()
    {
       var tabla = $("#lista").DataTable();
       var btn_addCar = '';
        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            if(formato_precio(products_json.products[j]['price'])>30000)
            {
                btn_addCar = '';

                if(products_json.products[j]['available']==true)
                {
                    btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                }

                fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';
            }
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function precio_menos10()
    {
       var tabla = $("#lista").DataTable();
       var btn_addCar = '';
        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            if(formato_precio(products_json.products[j]['price'])<10000)
            {

                btn_addCar = '';

                if(products_json.products[j]['available']==true)
                {
                    btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                }
                
                fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';
            }
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function categoria_sea()
    {
       var tabla = $("#lista").DataTable();
       var btn_addCar = '';
        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            if(products_json.products[j]['categories'][0]=="4"||products_json.products[j]['categories'][1]=="4")
            {
                
                btn_addCar = '';

                if(products_json.products[j]['available']==true)
                {
                    btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                }
                
                fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';
            }
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function categoria_food()
    {
       var tabla = $("#lista").DataTable();
       var btn_addCar = '';
        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            if(products_json.products[j]['categories'][0]=="3"||products_json.products[j]['categories'][1]=="3")
            {

                btn_addCar = '';

                if(products_json.products[j]['available']==true)
                {
                    btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                }

                fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';
            }
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function categoria_lunch()
    {
       var tabla = $("#lista").DataTable();
       var btn_addCar = '';
        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            if(products_json.products[j]['categories'][0]=="2"||products_json.products[j]['categories'][1]=="2")
            {
                btn_addCar = '';

                if(products_json.products[j]['available']==true)
                {
                    btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                }

                fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';
            }
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function categoria_drinks()
    {
       var tabla = $("#lista").DataTable();
       var btn_addCar = '';
        tabla.clear();
        tabla.draw();
        tabla.destroy();
        
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });

        var oTable = $("#lista").DataTable();
                         
        oTable.clear();
        oTable.draw();
        oTable.destroy();
        var fila = '';
        var tam=products_json.products.length;
                            
        for(var j=0; j<tam; j++)
        {
            if(products_json.products[j]['categories'][0]=="1"||products_json.products[j]['categories'][1]=="1")
            {
                btn_addCar = '';

                if(products_json.products[j]['available']==true)
                {
                    btn_addCar = '<a role="button" class="btn btn-default btn-sm scrollup" onclick="agregar_al_carro(\''+products_json.products[j]['id']+'\', \''+products_json.products[j]['name']+'\',\''+products_json.products[j]['description']+'\',\''+products_json.products[j]['price']+'\')"><i class="fa fa-plus" aria-hidden="true"></i></a>';
                }

                fila +='<tr><td style="">'+products_json.products[j]['name']+'</td>'+
                '<td style="">'+products_json.products[j]['description']+'</td>'+
                '<td style="">'+products_json.products[j]['img']+'</td>'+
                '<td style="">'+products_json.products[j]['price']+'</td>'+
                '<td style="">'+obtener_categorias(products_json.products[j]['categories'])+'</td>'+
                '<td style="">'+((products_json.products[j]['available']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+((products_json.products[j]['best_seller']==true)?'YES':'NO')+'</td>'+
                '<td style="">'+btn_addCar+'</td></tr>';
            }
        }

        $('#lista').append(fila);
        $("#lista").dataTable({
        "bSort": false,
        "lengthMenu": [[10, 25, 50, 100, -1],[10, 25, 50, 100, "Todos"]],
        "scrollX": true
        });
    }

    function cambiar_filtro()
    {
        var option_filtro = $("#filtro option:selected").val();
        $("#orden").val("-1");
        $("#search").val("");
        
        switch (option_filtro)
        {
            case "1": categoria_drinks();
            break;

            case "2": categoria_lunch();
            break;

            case "3": categoria_food();
            break;

            case "4": categoria_sea();
            break;

            case "5": prod_disponibles();
            break;

            case "6": prod_agotados();
            break;

            case "7": prod_masVendidos();
            break;

            case "8": precio_mas30();
            break;

            case "9": precio_menos10();
            break;

            default: 
            mostrar_productos();
            break;

        }
    }

    var cant_carrito = 0;
    var array_carrito = new Array();
    //var array_carrito = [];

    //removeItemFromArr(cuadrilla, codoper);

    function agregar_al_carro(id,name,description,price)
    {
        var existe = array_carrito.includes(id);
        
        if(existe==false)
        {
            cant_carrito++
            array_carrito.push(id);

            var btn_deleteCar = '';
            var oTable = $("#carrito").DataTable();
            
            if(cant_carrito==1)
            {
                oTable.clear();
                oTable.draw();
                oTable.destroy();
            }
            
            var fila = '';
                                
            btn_deleteCar = '<a id="eliminar" role="button" class="btn btn-default btn-sm scrollup" onclick="eliminar_del_carro('+id+', this)" ><i class="fa fa-trash-o" aria-hidden="true"></i></a>';


            fila +='<tr id="'+id+'" ><td style="">'+name+'</td>'+
                    '<td style="">'+description+'</td>'+
                    '<td style="">'+price+'</td>'+
                    '<td style="">'+btn_deleteCar+'</td></tr>';

            $('#carrito').append(fila);

            swal({
                    title: "Se agregó el Producto "+name+" al carrito",
                    type: "success",
                    showConfirmButton: true,
                    allowOutsideClick: false,
                    closeOnConfirm: true
            });
        }
        else
        {
            swal({
                    title: "El Producto ya está en el carrito",
                    type: "warning",
                    showConfirmButton: true,
                    allowOutsideClick: false,
                    closeOnConfirm: true
            });
            return;
        }
        
    }
    

    function ver_carrito()
    {

        $('#modal_carrito').modal('show');        
    }

    function removeItemFromArr(arr, item ) 
    {
        var i = arr.indexOf(item);
     
        if(i!==-1) 
        {
            arr.splice( i, 1 );
        }
    }

    eliminar_del_carro =  function(id,objeto){
        
        var nodo_del_row = objeto.parentNode.parentNode;
        var index_del_row = nodo_del_row.rowIndex;
        var id = nodo_del_row.getAttribute('id');
        document.getElementById("carrito").deleteRow(index_del_row);

        removeItemFromArr(array_carrito, id);
        cant_carrito--;
    }

    

    $('#modal_carrito').on('hidden.bs.modal', function(){
        
    });

</script>