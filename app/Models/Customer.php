<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'customerId';

    protected $fillable = [
         'accountCode',
    'name',
    'arabicName',
    'category',
    'executive',
    'icdGroup',
    'accountOnHold',
    'useAlternateCode',
    'address',
    'buildingNo',
    'street',
    'city',
    'district',
    'postalCode',
    'phone',
    'fax',
    'email',
    'parent',

    'status',
    'companyName',
    'workingCompany',
    'mobileNo',
    'telephone',
    'website',

    'contactName',
    'contactGsm',
    'contactEmail',

    'tax',
    'registrationNo',
    'pan',
    'crNo',
    'taxExpiryDate',
    'registrationExpiryDate',
    'crExpiryDate',

    'modeOfPayment',
    'creditLimit',
    'creditDays',
    'currency',
    'discount',
    'paymentTerms',

    'classCode',
    'classDescription',
    'customerClassCode',
    'subCategoryCode',
    'testPrice',
    'classOnHold',
    'isPrivileged',

    'contractPolicyNo',
    'beginDate',
    'expiryDate',

    'freeConsultationCashDays',
    'freeConsultationCreditDays',
    'freeVisitCount',

    'singleEventAmountLimit',
    'maximumDaysBetweenFirstAndLastVisit',

    'allowFreeConsultationOtherSpecialities',
    'allowFreeConsultationSameSpeciality',

    'insurancePayment',
    'modifyRegistration',
    'deductibleAmount',
    'billItemGroupWise',
    'noMaximum',
    'grossAmount',

    'coInsurancePercentage',
    'billItemGroupCoIns',
    'overrideCoIns',
    'coInsuranceMaximumCollectibleAmount',
    'coInsuranceCalculationMethod',

    'insuranceCompany',
    'freeRegistration',
    'blockBilling',
    'validateEmployee',
    'workingCompanyMandatory',
    'blockSendingLabResult',
    'enableIdfInsurance',
    'idfSettings',

    'topUp',
    'viewPaymentModeType',
    ];

  public static function createCustomer($data)
{
    return self::create($data);
}

public static function getCustomers()
{
    return self::orderBy('customerId', 'desc')->get();
}

public static function getLastCustomer()
{
    return self::orderBy('customerId', 'desc')->first();
}
}
