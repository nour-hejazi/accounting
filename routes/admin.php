<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    App::setLocale('ar');
    Route::resources([
        'users' => 'UserController',
        'customers' => 'CustomerController',
        'vendors' => 'VendorController',
        'invoices' => 'InvoiceController',
        'bills' => 'BillController',
        'expenses' => 'ExpenseController',
        'services' => 'ServiceController',
    ]);

    Route::resource('items', 'ItemController')->middleware('accountant');


    Route::get('invoices/{id}/pdf', 'InvoiceController@invoicePDF')->name('invoices.invoicePdf');
    Route::get('debtors', 'StatisticsController@debtors')->name('debtors');


//    USERS ROUTES
    Route::get('users/{id}/bills', 'UserController@bills')->name('users.bills');

//    CUSTOMERS ROUTES
    Route::get('customers/{id}/debts', 'CustomerController@debts')->name('customers.debts');
    Route::get('customers/{id}/services', 'CustomerController@services')->name('customers.services');
    Route::get('customers/{id}/records', 'CustomerController@records')->name('customers.records');

//    PAYMENTS ROUTE
    Route::post('payments/create', 'PaymentController@addPayment')->name('payments.store');
    Route::delete('payments/{id}/destroy', 'PaymentController@destroy')->name('payments.destroy');

//    BILL PAYMENTS
    Route::post('bill_payments/create', 'BillPaymentController@addPayment')->name('bill_payments.store');
    Route::delete('bill_payments/{id}/destroy', 'BillPaymentController@destroy')->name('bill_payments.destroy');


//    EXPENSE TYPES ROUTES
    Route::get('expenses/{id}/paid', 'ExpenseController@paid')->name('expenses.paid');

    Route::get('box', 'BoxController@box')->name('box.index');

    // DASHBOARD ROUTE
    Route::get('/', 'DashboardController@dashboard');


//  SETTINGS
    Route::get('settings/edit', 'SettingController@edit')->name('settings.edit');
    Route::get('settings', 'SettingController@show')->name('settings.show');
    Route::post('settings', 'SettingController@store')->name('settings.store');

    // STATISTICS ROUTE
    Route::get('statistics', 'StatisticsController@index')->name('statistics.index');

    // DOCUMENTATION
    Route::get('documentation', 'DocumentationController@index')->name('documentation.index');

    // LOGIN LOGOUT
    Route::get('login', 'AdminAuthController@login');
    Route::post('login', 'AdminAuthController@doLogin');
    Route::any('logout', 'AdminAuthController@logout');



}); // ADMIN