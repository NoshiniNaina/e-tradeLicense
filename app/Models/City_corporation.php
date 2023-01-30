<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City_corporation extends Model
{
    use HasFactory;
    protected $fillable = [
        'issueDate',
        'issueDate',
        'issueTime',
        'license_No',
        'institution_Name',
        'owner_Name',
        'father_Name',
        'mother_Name',
        'business_Nature',
        'business_Type',
        'address',
        'area',
        'ward',
        'nid',
        'BNI_No',
        'email',
        'fiscal_year',
        //present address
        'holding_No',
        'road_No',
        'village',
        'postCard',
        'thana',
        'division',
        'district',
        //present address
        'holding_No_p',
        'road_No_p',
        'village_p',
        'postCard_p',
        'thana_p',
        'division_p',
        'district_p',
        
        'renewal_Fees',
        'signBoard_Tax',
        'fertilizer_Charges',
        'Vat',
        'tax',
        'book_Fee',
        'due',
        'form_Fee',
        'solution_Fee',
        'others_Fee',
        'total'
    ];
}
