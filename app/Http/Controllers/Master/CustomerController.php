<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
   public function index()
{
    $lastCustomer = Customer::getLastCustomer();

    if ($lastCustomer) {
        $number = (int) substr($lastCustomer->accountCode, 3);
        $customerCode = 'CUS' . str_pad($number + 1, 5, '0', STR_PAD_LEFT);
    } else {
        $customerCode = 'CUS00001';
    }

    $customers = Customer::getCustomers();

    return view('customers.index', compact('customerCode', 'customers'));
}

    public function store(Request $request)
{
    $data = $request->all();

    $lastCustomer = Customer::getLastCustomer();

    if ($lastCustomer) {
        $number = (int) substr($lastCustomer->accountCode, 3);
        $data['accountCode'] = 'CUS' . str_pad($number + 1, 5, '0', STR_PAD_LEFT);
    } else {
        $data['accountCode'] = 'CUS00001';
    }

    $checkboxes = [
        'accountOnHold',
        'useAlternateCode',
        'classOnHold',
        'isPrivileged',
        'allowFreeConsultationOtherSpecialities',
        'allowFreeConsultationSameSpeciality',
        'insurancePayment',
        'modifyRegistration',
        'billItemGroupWise',
        'noMaximum',
        'grossAmount',
        'billItemGroupCoIns',
        'overrideCoIns',
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

    foreach ($checkboxes as $field) {
        $data[$field] = $request->has($field);
    }

    Customer::createCustomer($data);

    return response()->json([
        'success' => true,
        'message' => 'Customer created successfully.'
    ]);
}

public function destroy($id)
{
    $customer = Customer::findOrFail($id);

    $customer->status = 'Inactive';
    $customer->save();

    return response()->json([
        'success' => true,
        'message' => 'Customer deleted successfully.'
    ]);
}

}
