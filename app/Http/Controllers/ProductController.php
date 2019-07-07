<?php

namespace App\Http\Controllers;

use App\EquipmentField;
use App\EventEquipment;
use App\Product;
use App\ProductCategory;
use App\ProductPicture;
use App\ProfessionalTool;
use App\Room;
use App\RoomType;
use App\Space;
use App\SpaceType;
use App\Storekeeper;
use App\Supplier;
use App\Vehicle;
use App\VehicleModel;
use App\VehicleType;
use App\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function store()
    {
        $productCategories = ProductCategory::all();
        $supplies = Supplier::all();
        $storekeepers = Storekeeper::all();
        $warehouses = Warehouse::all();
        $equipementField = EquipmentField::all();
        $roomtypes = RoomType::all();
        $spaceType = SpaceType::all();
        $vehiculeTypes = VehicleType::all();
        $vehiculemodels = VehicleModel::all();
        return view('backend/product/store', compact("vehiculeTypes","vehiculemodels","spaceType","roomtypes","equipementField","supplies", "warehouses", "storekeepers", "productCategories"));
    }

    public function index()
    {
        $eqyuipementEvents  = EventEquipment::all();
        $supplier = Supplier::all();
        return view('backend/product/index', compact("eqyuipementEvents","supplier"));
    }

    public function saveProduct(Request $request)
    {
        /******save product********/

        $message = [
            'code.required' => 'Entrer le code',
            'designationCode.required' => 'Entrer la designation du produit!',
            'rentalPrice.required' => 'rentalPrice',
            'damagePrice.required' => 'damagePrice',
            'minimumThreshold.required' => 'minimumThreshold!',
            'amountStored.required' => 'amountStored',
            'discount.required' => 'discount!',
            'categorieId.required' => 'categorieId!',
            'suppliers.required' => 'suppliers',
            'warehouses.required' => 'warehouses'
        ];
        $validator = Validator::make($request->all(), [
            'code' => 'bail|required|min:1|max:255',
            'designationCode' => 'bail|required|min:1|max:255',
            'rentalPrice' => 'bail|required|min:1|max:255',
            'damagePrice' => 'bail|required',
            'minimumThreshold' => 'bail|required',
            'amountStored' => 'bail|required',
            'discount' => 'bail|required',
            "categorieId" => 'bail|required',
            "suppliers" => 'bail|required',
            "warehouses" => 'bail|required',
        ], $message);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $errors = json_decode($errors);

            return response()->json([
                'success' => false,
                'message' => $errors
            ], 422);
        } else {
            $product = Product::create([
                "code" => $request->code,
                "designation" => $request->designationCode,
                "rental_price" => $request->rentalPrice,
                "damage_price" => $request->damagePrice,
                "minimum_threshold" => $request->minimumThreshold,
                "amount_stored" => $request->amountStored,
                "discount" => $request->discount,
                "category_id" => $request->categorieId,
                "supplier_id" => $request->suppliers,
                "warehouse_id" => $request->warehouses,
                "description" => $request->descriptionProduct,
            ]);

//            dd($product) ;

              if($request->hasFile('images')) {
              $image = $request->file('images');

                             foreach ($image as $imag) {
              $input['linkpicutre'] = uniqid().'.'. $imag->getClientOriginalExtension();
              $destinationPath = public_path('/pictures');
              $imag->move($destinationPath, $input['linkpicutre']);

              $imagee = ProductPicture::create([
              'link' => $input['linkpicutre'],
              'product_id'=>$product->id,
              "visible" => 1
              ]);
                             }
              }

            if ($request->productType == 1) {
                $message = [
                    'code.required' => 'Entrer le code',
                    'color.required' => 'Entrer la color',
                    'designation.required' => 'designation',
                    'dimension.required' => 'dimension',
                    'weight.required' => 'weight!',
                    'description.required' => 'description',

                ];
                $validator = Validator::make($request->all(), [
                    'codeequipment' => 'bail|required|min:1|max:255',
                    'colorEquipment' => 'bail|required|min:1|max:255',
                    'designationEquipmen' => 'bail|required|min:1|max:255',
                    'dimensionEquipm' => 'bail|required',
                    'weightEquipmt' => 'bail|required',
                    'descriptionEquipme' => 'bail|required',

                ], $message);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    $errors = json_decode($errors);

                    return response()->json([
                        'success' => false,
                        'message' => $errors
                    ], 422);
                } else {
                    EventEquipment::create([
                        'code' => $request->codeequipment,
                        'color' => $request->colorEquipment,
                        'designation' => $request->designationEquipmen,
                        'dimension' => $request->dimensionEquipm,
                        'weight' => $request->weightEquipmt,
                        'description' => $request->descriptionEquipme,
                        "product_id" => $product->id,
                        "visible"=>1,
                    ]);
                }

            }
            elseif ($request->productType == 2){
                $message = [
                    'codeProfessionTool.required' => 'Entrer le code',
                    'designationProfessionTool.required' => 'Entrer la color',
                    'weightProfessionTool.required' => 'designation',
                    'descriptionProfessionTool.required' => 'dimension',
                    'equipementfieldProfessionT.required' => 'weight!',

                ];
                $validator = Validator::make($request->all(), [
                    'codeProfessionTool' => 'bail|required|min:1|max:255',
                    'designationProfessionTool' => 'bail|required|min:1|max:255',
                    'weightProfessionTool' => 'bail|required|min:1|max:255',
                    'descriptionProfessionTool' => 'bail|required',
                    'equipementfieldProfessionT' => 'bail|required',

                ], $message);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    $errors = json_decode($errors);

                    return response()->json([
                        'success' => false,
                        'message' => $errors
                    ], 422);
                } else {
                    ProfessionalTool::create([
                        'code' => $request->codeProfessionTool,
                        'designation' => $request->designationProfessionTool,
                        'description' => $request->descriptionProfessionTool,
                        'weight' => $request->weightProfessionTool,
                        'field_id' => $request->equipementfieldProfessionT,
                        "product_id" => $product->id,
                        "visible"=>1,
                    ]);
                }
            }

            elseif ($request->productType == 3){
                $message = [
                    'codeRoom.required' => 'Entrer le code',
                    'nameRoom.required' => 'Entrer la color',
                    'localizationRoom.required' => 'designation',
                    'capacityRoom.required' => 'dimension',
                    'coordinatesRoom.required' => 'weight!',
                    'roomType.required' => 'weight!',


                ];
                $validator = Validator::make($request->all(), [
                    'codeRoom' => 'bail|required|min:1|max:255',
                    'nameRoom' => 'bail|required|min:1|max:255',
                    'localizationRoom' => 'bail|required|min:1|max:255',
                    'capacityRoom' => 'bail|required',
                    'coordinatesRoom' => 'bail|required',
                    'roomType' => 'bail|required',

                ], $message);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    $errors = json_decode($errors);

                    return response()->json([
                        'success' => false,
                        'message' => $errors
                    ], 422);
                } else {
                    Room::create([
                        'code' => $request->codeRoom,
                        'name' => $request->nameRoom,
                        'localization' => $request->localizationRoom,
                        'coordinates' => $request->coordinatesRoom,
                        'capacity' => $request->capacityRoom,
                        "description" =>$request->descriptionRoom,
                         "type_id" => $request->roomType,
                        "product_id" => $product->id,
                        "visible"=>1,
                    ]);
                }
            }
            elseif ($request->productType == 4){
                $message = [
                    'codeSpace.required' => 'Entrer le code',
                    'nameSpace.required' => 'Entrer la color',
                    'localizationSpace.required' => 'designation',
                    'areaSpace.required' => 'dimension',
                    'coordinatesSpace.required' => 'weight!',
                    'descriptionSpace.required' => 'weight!',
                    "spaceType.required"=>"spacetype"


                ];
                $validator = Validator::make($request->all(), [
                    'codeSpace' => 'bail|required|min:1|max:255',
                    'nameSpace' => 'bail|required|min:1|max:255',
                    'localizationSpace' => 'bail|required|min:1|max:255',
                    'areaSpace' => 'bail|required',
                    'coordinatesSpace' => 'bail|required',
                    'descriptionSpace' => 'bail|required',
                    'spaceType' => 'bail|required',

                ], $message);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    $errors = json_decode($errors);

                    return response()->json([
                        'success' => false,
                        'message' => $errors
                    ], 422);
                } else {
                    Space::create([
                        'code' => $request->codeSpace,
                        'name' => $request->nameSpace,
                        'localization' => $request->localizationSpace,
                        'coordinates' => $request->coordinatesSpace,
                        'area' => $request->areaSpace,
                        "description" =>$request->descriptionSpace,
                        "type_id" => $request->spaceType,
                        "product_id" => $product->id,
                        "visible"=>1,
                    ]);
                }
            }

            elseif ($request->productType == 5){
                $message = [
                    'codeVehicle.required' => 'Entrer le code',
                    'registration.required' => 'Entrer la color',
                    'chassis.required' => 'designation',
                    'color.required' => 'dimension',
                    'fuelName.required' => 'weight!',
                    'technicalVisit.required' => 'weight!',
                    "insurance.required"=>"spacetype",
                    "seat.required"=>"spacetype",
                "mileage.required"=>"spacetype",
                "fuelLevel.required"=>"spacetype",
                     "oilLevel.required"=>"spacetype",
                 "watterLevel.required"=>"spacetype",
                    "descriptionVehicule.required"=>"spacetype",
                    "vehicleModels.required"=>"spacetype",
                    "vehicleTypes.required"=>"spacetype",


                ];
                $validator = Validator::make($request->all(), [
                    'codeVehicle' => 'bail|required|min:1|max:255',
                    'registration' => 'bail|required|min:1|max:255',
                    'chassis' => 'bail|required|min:1|max:255',
                    'color' => 'bail|required',
                    'fuelName' => 'bail|required',
                    'technicalVisit' => 'bail|required',
                    'insurance' => 'bail|required',
                    'seat' => 'bail|required',
                    'mileage' => 'bail|required',
                    'fuelLevel' => 'bail|required',
                    'oilLevel' => 'bail|required',
                    'watterLevel' => 'bail|required',
                    'descriptionVehicule' => 'bail|required',
                    'vehicleModels' => 'bail|required',
                    'vehicleTypes' => 'bail|required',

                ], $message);

                if ($validator->fails()) {
                    $errors = $validator->errors();
                    $errors = json_decode($errors);

                    return response()->json([
                        'success' => false,
                        'message' => $errors
                    ], 422);
                } else {
                    Vehicle::create([
                        'code' => $request->codeVehicle,
                        'product_id' =>$product->id,
                        'model_id' => $request->vehicleModels,
                        'type_id' => $request->vehicleTypes,
                        'chassis' => $request->chassis,
                        "color" =>$request->color,
                        "description" => $request->descriptionVehicule,
                        "fuel_name" => $request->fuelName,
                        "fuel_level"=>$request->fuelLevel,
                        "insurance"=> $request->insurance,
                        "mileage"=>$request->mileage,
                        "registration"=>$request->registration,
                        "seat" =>$request->seat,
                        "technical_visit" => $request->technicalVisit,
                        "watter_level" => $request->watterLevel,
                        "visible" => 1,
                        "oil_level" => $request->oilLevel,
                    ]);
                }
            }


            return response()->json(['success' => 'enregistrement effectuer avec succes',]);



        }

    }


    public function searchProduct(Request $request) {
        $productType = $request->productType;
       $code = $request->code ;
       $suppliers = $request->suppliers;
       $prixminim = $request->prixminim;
       $prixmaxi = $request->prixmaxi ;

       if($productType and empty($code) and  empty($suppliers) and empty($prixminim) and empty($prixmaxi) )
       {
           /*******comparaison avec $productype*************/
           if($productType == 1)
           {
               $datas = EventEquipment::all();

               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 2)
           {
               $datas = ProfessionalTool::all();
               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 3)
           {
               $datas = Room::all();
               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 4)
           {
               $datas = Space::all();
               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 5)
           {
               $datas = Vehicle::all();
               return view("backend/product/include/search",compact("datas"));
           }

       }
       elseif($productType and $code and  empty($suppliers) and empty($prixminim) and empty($prixmaxi))
       {

           if($productType == 1)
           {
               $datas = EventEquipment::where('code',$code)->orderBy('id','DESC')->get();

               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 2)
           {
               $datas = ProfessionalTool::where('code',$code)->orderBy('id','DESC')->get();
               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 3)
           {
               $datas = Room::where('code',$code)->orderBy('id','DESC')->get();
               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 4)
           {
               $datas = Space::where('code',$code)->orderBy('id','DESC')->get();
               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 5)
           {
               $datas = Vehicle::where('code',$code)->orderBy('id','DESC')->get();
               return view("backend/product/include/search",compact("datas"));
           }

       }

       elseif($productType and $code and  $suppliers  and empty($prixminim) and empty($prixmaxi)){
           if($productType == 1)
           {
               $datas = EventEquipment::whereHas('product',function($q) use($suppliers) {
                   $supplier_id = $suppliers ;
                   $q->whereHas('supplier',function ($k) use($supplier_id){
                       $k->where('id',$supplier_id)->get();
                   }) ;
               })->orderBy('id','DESC')->get();

               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 2)
           {
               $datas = ProfessionalTool::all();
               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 3)
           {
               $datas = Room::all();
               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 4)
           {
               $datas = Space::all();
               return view("backend/product/include/search",compact("datas"));
           }
           elseif ($productType == 5)
           {
               $datas = Vehicle::all();
               return view("backend/product/include/search",compact("datas"));
           }
       }
          dd($request);
    }



//       return "1";
//        return  "1" ;

}
