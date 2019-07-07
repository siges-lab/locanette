
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
    <div class=" row section-header">

        <div class="col-md-12 text-center section-title">  <h1> <u style="color: #2379c6">Recherche des equipements</u> <i class="fa fa-search"></i> </h1></div>

    </div>

    <div class="section-body">



        <div class="row">
            <div class="col-12 col-md-3 col-lg-3" >
                <div class="card">
                    <form id="searchFormss" method="post" action="{{route("searchproduct")}}">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <h4> <u>Parametre</u>  </h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>
                                    <div class="row">
                                     <div class="col-md-10">
                                         <Strong style="font-size: 15px">Type equipement</Strong>
                                     </div>
                                        <div class="col-md-2 text-right" >
                                            <a   class="btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" >  <span style="font-size: 15px"> <i style="color: #0a001f" class="fa fa-plus "></i></span> </a>

                                        </div>
                                    </div>


                                </label>
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <select  onchange="productType(this)"    class="form-control productype" id="productType" name="productType">
                                        <option value="1">EventEquipment</option>
                                        <option value="2">ProfessionalTool</option>
                                        <option value="3">Room</option>
                                        <option value="4">Space</option>
                                        <option value="5">Vehicle</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="row">
                                    <div class="col-md-10">
                                        <strong style="font-size: 15px">Code</strong>
                                    </div>
                                    <div class="col-md-2">

                                        <a class=" btn-primary" data-toggle="collapse" href="#searchCode" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><span style="font-size: 15px"> <span style="font-size: 15px"> <i style="color: #0a001f" class="fa fa-plus "></i></span> </span></a>

                                    </div>

                                </label>
                                <div class="collapse multi-collapse" id="searchCode">
                                    <input type="text" class="form-control" id="code" name="code">
                                </div>

                            </div>
                            <div class="form-group">

                                <label class="row">
                                    <div class="col-md-10">
                                        <strong  style="font-size: 15px">Fournisseur </strong>
                                    </div>
                                    <div class="col-md-2">

                                        <a class=" btn-primary" data-toggle="collapse" href="#searchpoduit" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><span style="font-size: 15px">
                                                 <span style="font-size: 15px"> <i style="color: #0a001f" class="fa fa-plus "></i></span>
                                            </span></a>

                                    </div>
                                </label>
                                <div class="collapse multi-collapse" id="searchpoduit">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select   class="form-control productype" id="productType" name="suppliers">
                                                <option value selected disabled>Choissisez une </option>
                                                @forelse($supplier as $key=>$supplie)
                                                    <option value="{{$supplie->id}}">{{strtoupper($supplie->name)}}</option>
                                                @empty
                                                    <option value disabled>Aucune categorie</option>
                                                @endforelse
                                            </select>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="form-group">

                                <label class="row">
                                    <div class="col-md-10">

                                        <strong style="font-size: 15px"> Prix </strong>

                                    </div>
                                    <div class="col-md-2">
                                        <a class=" btn-primary" data-toggle="collapse" href="#searchDesignation" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><span style="font-size: 15px">
                                                 <span style="font-size: 15px"> <i style="color: #0a001f" class="fa fa-plus "></i></span>
                                            </span></a>

                                    </div>
                                </label>
                                <div class=" row collapse multi-collapse" id="searchDesignation">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="prixminim" name="prixminim" placeholder="min">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="prixmaxi" name="prixmaxi" placeholder="max">
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">rechercher </button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-12 col-md- col-lg-9">
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Liste des equipements</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table-1">
                                            <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Code</th>
                                                <th>Designation</th>
                                                <th>Prix </th>
                                                <th>quantite</th>
                                                <th>Categorie</th>
                                                <th>Fournisseurs</th>
                                                 <th>Etat</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($eqyuipementEvents as $key=> $eqyuipementEvent)
                                            <tr >
                                                <td > {{$key + 1}}</td>
                                                <td >{{$eqyuipementEvent->code}}</td>
                                                <td >{{$eqyuipementEvent->designation}}</td>
                                                <td >{{$eqyuipementEvent->product->rental_price}}</td>
                                                <td >{{$eqyuipementEvent->product->amount_stored}}</td>
                                                <td >{{$eqyuipementEvent->product->product_category->label}}</td>
                                                <td >{{$eqyuipementEvent->product->supplier->name}}</td>
                                                <td> @if($eqyuipementEvent->visible) activer @else desactiver @endif  </td>
                                                <td > Action</td>
                                                <td></td>
                                            </tr>
                                             @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


@endsection

@section("script")
    <script>
        $(document).ready(
            function() {

                var token = $("meta[name='_csrf']").attr("content");
                var header = $("meta[name='_csrf_header']").attr("content");
                // SUBMIT FORM
                $("#searchForm").submit(function(event) {
                    // Prevent the form from submitting via the browser.
                    event.preventDefault();
                    ajaxPost();
                });

                function ajaxPost() {

                    // PREPARE FORM DATA
                    var formData = {
                        bookId : $("#bookId").val(),
                        bookName : $("#bookName").val(),
                        author : $("#author").val() ,
                        token : token
                    }
                    /**
                     * drecueprer les valeurs
                     */
                    $productType = $('#productType').val();
                    $produit = $('#produit').val();
                    $code = $("#code").val();
                    $designation = $("#designation").val();
                    $prixminim = $('#prixminim').val();
                    $prixmaxi = $('#prixmaxi').val();

                    alert($prixminim);

                    // DO POST
                    $.ajax({
                        type : "GET",
                        contentType : "application/json",
                        url : "/api/search",
                        // data : JSON.stringify(formData),
                        data:'productType=' + $productType + "&produit=" + $produit + "&code=" + $code + "&designation= "+ $designation  + "&prixminim= "+ $prixminim + "&prixmaxi= "+ $prixmaxi ,
                        dataType : 'json',
                        headers:
                            {
                                'X-CSRF-TOKEN': $("meta[name='_csrf']").attr('content')
                            },
                        success : function(result) {
                            if (result.status == "success") {
                                $("#postResultDiv").html(
                                    "" + result.data.bookName
                                    + "Post Successfully! <br>"
                                    + "---> Congrats !!" + "</p>");
                            } else {
                                $("#postResultDiv").html("<strong>Error</strong>");
                            }
                            console.log(result);
                        },
                        error : function(e) {
                            alert("Error!")
                            console.log("ERROR: ", e);
                        }
                    });

                }

            })
    </script>
@endsection