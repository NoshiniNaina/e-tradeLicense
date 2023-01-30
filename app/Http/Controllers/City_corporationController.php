<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City_corporation;
class City_corporationController extends Controller
{
    public function city_corporation(){
        return view('create.city_corporation');
    }

    public function store(Request $request){
        $this->validate($request,[
            'issueDate' =>'nullable',
            'issueDate'=> 'nullable',
            'issueTime'=> 'nullable',
            'license_No'=> 'nullable',
            'institution_Name'=> 'nullable',
            'owner_Name'=> 'nullable',
            'father_Name'=> 'nullable',
            'mother_Name'=> 'nullable',
            'business_Nature'=> 'nullable',
            'business_Type'=> 'nullable',
            'address'=> 'nullable',
            'area'=> 'nullable',
            'ward'=> 'nullable',
            'nid'=> 'nullable',
            'BNI_No'=> 'nullable',
            'email'=> 'nullable',
            'fiscal_year'=> 'nullable',
            //present address
            'holding_No'=> 'nullable',
            'road_No'=> 'nullable',
            'village'=> 'nullable',
            'postCard'=> 'nullable',
            'thana'=> 'nullable',
            'division'=> 'nullable',
            'district'=> 'nullable',
            //present address
            'holding_No_p'=> 'nullable',
            'road_No_p'=> 'nullable',
            'village_p'=> 'nullable',
            'postCard_p'=> 'nullable',
            'thana_p'=> 'nullable',
            'division_p'=> 'nullable',
            'district_p'=> 'nullable',
            
            'renewal_Fees'=> 'nullable',
            'signBoard_Tax'=> 'nullable',
            'fertilizer_Charges'=> 'nullable',
            'Vat'=> 'nullable',
            'tax'=> 'nullable',
            'book_Fee'=> 'nullable',
            'due'=> 'nullable',
            'form_Fee'=> 'nullable',
            'solution_Fee'=> 'nullable',
            'others_Fee'=> 'nullable',
            'total'=> 'nullable'
        ]);
        City_corporation::create($request->all());
    }
}
