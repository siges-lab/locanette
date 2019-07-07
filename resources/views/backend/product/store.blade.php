@section('title')Acceuil @endsection
@section('styles')
    <style>
       .libelle {
           font-size: medium;

       }
    </style>
@endsection
@extends('backend.layout.master')
@section('content')

<section class="section">
    <div class="section-header">
        <h1>Nouveau Produit</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Produit</a></div>

        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Formulaire d'enregistrement</h2>



        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form action="{{url('admin/product/searchProduct')}}"  id="equipForms"  method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label  style="font-size: medium;">Code</label>
                                <input type="text" name="code" class="form-control" placeholder="entrer le code"  >
                                <span class="text-danger" > </span>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label  style="font-size: medium;">designation</label>
                                <input type="text" name="designationCode" class="form-control" placeholder=" entrer designation" >
                                <span class="text-danger" > </span>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label  style="font-size: medium;">rentalPrice</label>
                                <input type="text" name="rentalPrice" class="form-control" placeholder=""   >


                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-size: medium;">damagePrice</label>
                                <input type="text" class="form-control" placeholder=" entrer "  name="damagePrice" >
                                <span class="text-danger" > </span>

                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-size: medium;">minimumThreshold</label>
                                <input type="text" class="form-control" placeholder=" entrer " name="minimumThreshold" >


                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-size: medium;">amountStored</label>
                                <input type="text" class="form-control" placeholder=" entrer " name="amountStored"  >
                                <span class="text-danger" > </span>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-size: medium;">discount</label>
                                <input type="text" name="discount" class="form-control" placeholder=" entrer "  >


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-size: medium;">Categorie</label>
                                <select  class="form-control" name="categorieId">
                                    <option value selected disabled>Choissisez une </option>
                                    @forelse($productCategories as $key=>$productCategorie)
                                        <option value="{{$productCategorie->id}}">{{strtoupper($productCategorie->label)}}</option>
                                    @empty
                                        <option value disabled>Aucune categorie</option>
                                    @endforelse

                                </select>


                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-size: medium;">Fournisseurs</label>

                                <select  class="form-control" name="suppliers">
                                    @forelse($supplies as $key=>$supplie)
                                        <option value="{{$supplie->id}}">{{strtoupper($supplie->name)}}</option>
                                    @empty
                                        <option value disabled>Aucune Fournisseurs</option>
                                    @endforelse
                                </select>



                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-size: medium;">Entrepôt</label>



                                <select  class="form-control" name="warehouses">
                                    @forelse($warehouses as $key=>$warehouse)
                                        <option value="{{$warehouse->id}}">{{strtoupper($warehouse->label)}}</option>
                                    @empty
                                        <option value disabled>Aucun Entrepot</option>
                                    @endforelse
                                </select>


                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="font-size: medium;">Product type</label>

                                <select  onchange="productType(this)"    class="form-control productype" name="productType">
                                    <option value="" selected>choisir</option>
                                    <option value="1">EventEquipment</option>
                                    <option value="2">ProfessionalTool</option>
                                    <option value="3">Room</option>
                                    <option value="4">Space</option>
                                    <option value="5">Vehicle</option>
                                </select>


                            </div>

                        </div>
                    </div>

                    <div class="row" id="EevntEquipmt">
                        <div style="width: 100%;border-bottom: 2px solid #3f6280">

                        </div>
                        <br>
                        <div class="col-md-12 text-center " style="margin-top: 20px">
                            <span> <strong class="btn btn-info text-capitalize"> <strong style="font-size: medium;color: #0a001f">EventEquipment</strong> </strong></span>
                        </div>
                        <div class="col-md-12" style="margin-top: 15px">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">code</label>
                                        <input type="text" name="codeequipment" class="form-control" placeholder=""   >

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">designation</label>
                                        <input type="text" name="designationEquipmen" class="form-control" placeholder=" entrer " >

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">dimension</label>
                                        <input type="text" name="dimensionEquipm" class="form-control" placeholder=" entrer "  >

                                    </div>
                                </div>

                            </div>

                            <div class="row" >
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">weight</label>
                                        <input type="text" name="weightEquipmt" class="form-control" placeholder=""   >

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">description</label>
                                        <input type="text" name="descriptionEquipme" class="form-control" placeholder=" entrer " >

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">color</label>
                                        <input type="text" name="colorEquipment" class="form-control" placeholder=" entrer " >

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row" id="profesionalTool">
                        <div style="width: 100%;border-bottom: 2px solid #3f6280">

                        </div>

                        <div class="col-md-12 text-center">

                            <span> <strong class="btn btn-info text-capitalize"> <strong style="font-size: medium;color: #0a001f">ProfessionalTool</strong> </strong></span>

                        </div>
                        <div class="col-md-12" style="margin-top: 15px">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">code</label>
                                        <input type="text" name="codeProfessionTool" class="form-control" placeholder=""   >

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">designation</label>
                                        <input type="text" name="designationProfessionTool" class="form-control" placeholder=" entrer " >

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">weight</label>
                                        <input type="text" name="weightProfessionTool" class="form-control" placeholder=" entrer "  >

                                    </div>
                                </div>

                            </div>

                            <div class="row" >
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="font-size: medium;">description</label>
                                        <input type="text" name="descriptionProfessionTool" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="font-size: medium;">EquipementField</label>

                                        <select  class="form-control" name="equipementfieldProfessionT">

                                            @forelse($equipementField as $key=>$equipementFiel)
                                                <option value="{{$equipementFiel->id}}">{{strtoupper($equipementFiel->label)}}</option>
                                            @empty
                                                <option value disabled>Aucun EquipementField</option>
                                            @endforelse

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="Room">
                        <div style="width: 100%;border-bottom: 2px solid #3f6280">

                        </div>

                        <div class="col-md-12 text-center" style="margin-top: 10px">

                            <span> <strong class="btn btn-info text-capitalize"> <strong style="font-size: medium;color: #0a001f">Room</strong> </strong></span>

                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">code</label>
                                        <input type="text" name="codeRoom" class="form-control" placeholder=""   >

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">name</label>
                                        <input type="text" name="nameRoom" class="form-control" placeholder=" entrer " >

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">localization</label>
                                        <input type="text" name="localizationRoom" class="form-control" placeholder=" entrer "  >

                                    </div>
                                </div>

                            </div>

                            <div class="row" >
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">capacity</label>
                                        <input type="text" name="capacityRoom" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">coordinates</label>
                                        <input type="text" name="coordinatesRoom" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">description</label>
                                        <input type="text" name="descriptionRoom" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">RoomType</label>

                                        <select  class="form-control" name="roomType">

                                            @forelse($roomtypes as $key=>$roomtype)
                                                <option value="{{$roomtype->id}}">{{strtoupper($roomtype->label)}}</option>
                                            @empty
                                                <option value disabled>Aucun RoomType</option>
                                            @endforelse

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="Space">
                        <div style="width: 100%;border-bottom: 2px solid #3f6280">

                        </div>
                        <div class="col-md-12 text-center" style="margin-top: 10px">


                            <span> <strong class="btn btn-success text-capitalize"> <strong style="font-size: medium;color: #0a001f">Space</strong> </strong></span>

                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">code</label>
                                        <input type="text" name="codeSpace" class="form-control" placeholder=""   >

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">name</label>
                                        <input type="text" name="nameSpace" class="form-control" placeholder=" entrer " >

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">localization</label>
                                        <input type="text" name="localizationSpace" class="form-control" placeholder=" entrer "  >

                                    </div>
                                </div>

                            </div>

                            <div class="row" >
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">area</label>
                                        <input type="text" name="areaSpace" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label style="font-size: medium;">coordinates</label>
                                        <input type="text" name="coordinatesSpace" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label style="font-size: medium;">description</label>
                                        <input type="text" name="descriptionSpace" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">SpaceType</label>

                                        <select  class="form-control" name="spaceType">


                                            @forelse($spaceType as $key=>$spaceTyp)
                                                <option value="{{$spaceTyp->id}}">{{strtoupper($spaceTyp->label)}}</option>
                                            @empty
                                                <option value disabled>Aucune SpaceType</option>
                                            @endforelse

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="Vehicle">
                        <div style="width: 100%;border-bottom: 2px solid #3f6280">

                        </div>
                        <div class="col-md-12 text-center" style="margin-top: 10px">

                            <span> <strong class="btn btn-danger text-capitalize"> <strong style="font-size: medium;color: #0a001f">Vehicle</strong> </strong></span>

                        </div>
                        <div class="col-md-12" style="margin-top: 10px">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">code</label>
                                        <input type="text" name="codeVehicle" class="form-control" placeholder=""   >

                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">registration</label>
                                        <input type="text" name="registration" class="form-control" placeholder=" entrer " >

                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">chassis</label>
                                        <input type="text" name="chassis" class="form-control" placeholder=" entrer "  >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">color</label>
                                        <input type="text" name="color" class="form-control" placeholder=" entrer "  >

                                    </div>
                                </div>

                            </div>

                            <div class="row" >
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">fuelName</label>
                                        <input type="text" name="fuelName" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">technicalVisit</label>
                                        <input type="text" name="technicalVisit" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">insurance</label>
                                        <input type="text" name="insurance" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">seat</label>
                                        <input type="text" name="seat" class="form-control" placeholder=""   >

                                    </div>
                                </div>

                            </div>
                            <div class="row" >
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">mileage</label>
                                        <input type="text" name="mileage" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">fuelLevel</label>
                                        <input type="text" name="fuelLevel" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">oilLevel</label>
                                        <input type="text" name="oilLevel" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">watterLevel</label>
                                        <input type="text" name="watterLevel" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">description</label>
                                        <input type="text" name="descriptionVehicule" class="form-control" placeholder=""   >

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">vehicleModels</label>

                                        <select  class="form-control" name="vehicleModels">
                                            @forelse($vehiculemodels as $key=>$vehiculemodel)
                                                <option value="{{$vehiculemodel->id}}">{{strtoupper($vehiculemodel->label)}}</option>
                                            @empty
                                                <option value disabled>Aucune vehicule model</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label style="font-size: medium;">vehicleTypes</label>

                                        <select  class="form-control" name="vehicleTypes">


                                            @forelse($vehiculeTypes as $key=>$vehiculeType)
                                                <option value="{{$vehiculeType->id}}">{{strtoupper($vehiculeType->label)}}</option>
                                            @empty
                                                <option value disabled>Aucune vehicule tupe</option>
                                            @endforelse

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label style="font-size: medium;">Message</label>
                            <textarea class="form-control" required="" name="descriptionProduct"></textarea>

                        </div>
                        <div class="col-md-6">
                            <div class="clsbox-1" runat="server">
                                <input placeholder="deposer ici"   type="file" name="images[]">
                            </div>
                        </div>

                        <div class="col-md-3 text-right">
                            <div class="row" style="margin-top: 40px">
                                <div class="col-md-6">
                                    <button type="submit" id="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                                <div class="col-md-6">
                                    <button id="aqzert" class="btn btn-danger">Annuler</button>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!--                           </div>-->
                </form>


            </div>

        </div>


    </div>
</section>

@endsection


@section("script")
    <script type="text/javascript">



        $("#EevntEquipmt").hide()
        $("#profesionalTool").hide()
        $("#Room").hide()
        $("#Space").hide()
        $("#Vehicle").hide()

        $form = $("#equipForms");

        $('.productype').on('change',function () {

            var   $val = this.value ;
            if($val==1)
            {
                $("#EevntEquipmt").show();
                ("#Room").hide() ;
                $("#profesionalTool").hide();
                $("#Space").hide()
                $("#Vehicle").hide()
            }
            if($val==2){
                $("#profesionalTool").show() ;
                ("#Room").hide() ;
                $("#EevntEquipmt").hide();
                $("#Space").hide()
                $("#Vehicle").hide()
            }
            if($val==3) {
                $("#Room").show() ;
                $("#profesionalTool").hide() ;
                $("#EevntEquipmt").hide();
                $("#Space").hide()
                $("#Vehicle").hide()
            }

            if ($val==4){
                $("#Space").show() ;
                $("#profesionalTool").hide() ;
                $("#EevntEquipmt").hide();
                $("#Room").hide()
                $("#Vehicle").hide()
            }
            if($val==5) {
                $("#Vehicle").show()
                $("#Space").hide() ;
                $("#profesionalTool").hide() ;
                $("#EevntEquipmt").hide();
                $("#Room").hide()
            }
        })

  /***Image multuple upload**/

        $(document).ready(function() {

            // enable fileuploader plugin
            $('input[name="images[]"]').fileuploader({
                extensions: ['jpg', 'jpeg', 'png', 'gif', 'bmp'],
                changeInput: ' ',
                theme: 'thumbnails',
                enableApi: true,
                addMore: true,
                thumbnails: {
                    box: '<div  class="fileuploader-items"  >' +
                        '<ul class="fileuploader-items-list">' +
                        '<li class="fileuploader-thumbnails-input"><div class="fileuploader-thumbnails-input-inner" style="width: 300px;height: 110px" style="font-size: 10px">image</div></li>' +
                        '</ul>' +
                        '</div>',
                    item: '<li class="fileuploader-item" >' +
                        '<div class="fileuploader-item-inner" >' +
                        '<div class="thumbnail-holder" >${image}</div>' +
                        '<div class="actions-holder" >' +
                        '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>' +
                        '</div>' +
                        '<div class="progress-holder">${progressBar}</div>' +
                        '</div>' +
                        '</li>',
                    item2: '<li class="fileuploader-item"   >' +
                        '<div class="fileuploader-item-inner" >' +
                        '<div class="thumbnail-holder" >${image}</div>' +
                        '<div class="actions-holder">' +
                        '<a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>' +
                        '</div>' +
                        '</div>' +
                        '</li>',
                    startImageRenderer: true,
                    canvasImage: false,
                    _selectors: {
                        list: '.fileuploader-items-list',
                        item: '.fileuploader-item',
                        start: '.fileuploader-action-start',
                        retry: '.fileuploader-action-retry',
                        remove: '.fileuploader-action-remove'
                    },
                    onItemShow: function(item, listEl) {
                        var plusInput = listEl.find('.fileuploader-thumbnails-input');

                        plusInput.insertAfter(item.html);

                        if(item.format == 'image') {
                            item.html.find('.fileuploader-item-icon').hide();
                        }
                    }
                },
                afterRender: function(listEl, parentEl, newInputEl, inputEl) {
                    var plusInput = listEl.find('.fileuploader-thumbnails-input'),
                        api = $.fileuploader.getInstance(inputEl.get(0));

                    plusInput.on('click', function() {
                        api.open();
                    });
                },
            });

        });

       /******ajax******/
        $form.on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0]);
            //   var formData = $(this).serialize();
            var $this = $('#submit');
            $this.button({loadingText: '<i class="fa fa-spinner fa-spin"></i>&nbsp;Traitement en cours...'});
            $this.button('loading');
            $.ajax({
                url: '{{route('saveproduct')}}',
                type: 'post',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {

                    iziToast.show({
                        title: 'Enregistrement effectuer avec success!',
                        position: 'topCenter',
                        color:"blue"
                    });
                    $form.trigger('reset');

                    $this.button('reset');
                },
                error: function (jqXhr) {
                    if (jqXhr.status === 401)
                        window.location.href = "/";
                    if (jqXhr.status === 422) {
                        var errors = jqXhr.responseJSON.message;
                        var errorsHtml = '';
                        $.each(errors, function (key, value) {
                            errorsHtml += value[0] + '</br>';
                        });
                        $this.button('reset');
                        // swal(
                        //     'Oops...',
                        //     errorsHtml,
                        //     'error'
                        // )
                        iziToast.warning({
                                title: 'Erreur',
                            message: errorsHtml ,
                            position: 'topRight'
                        });
                    } else {
                        alert("Une erreur s'est produite, Recharger la page, puis réesayer SVP \nSi l'erreur persiste veullez contactez l'administrateur \nErreur: " + jqXhr.statusText);
                        $this.button('reset');
                    }
                }
            });
        });


    </script>
@endsection