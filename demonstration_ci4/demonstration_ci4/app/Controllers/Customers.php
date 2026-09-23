<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            [
                'account_no' => 'VVV-1001',
                'name'       => 'Trina Marie',
                'email'      => 'trina.marie@example.com',
                'phone'      => '+63 917 123 4567',
                'status'     => 'Active',
            ],
            [
                'account_no' => 'VVV-1002',
                'name'       => 'Mark Ben',
                'email'      => 'mark.ben@example.com',
                'phone'      => '+63 918 234 5678',
                'status'     => 'Active',
            ],
            [
                'account_no' => 'VVV-1003',
                'name'       => 'Jovs France',
                'email'      => 'jovs.france@example.com',
                'phone'      => '+63 919 345 6789',
                'status'     => 'Pending',
            ],
            [
                'account_no' => 'VVV-1004',
                'name'       => 'Andrew Mateo',
                'email'      => 'andrew.mateo@example.com',
                'phone'      => '+63 920 456 7890',
                'status'     => 'Active',
            ],
            [
                'account_no' => 'VVV-1005',
                'name'       => 'Ivan Jam',
                'email'      => 'ivan.jam@example.com',
                'phone'      => '+63 921 567 8901',
                'status'     => 'Inactive',
            ],
        ];

        return view('customers/index', [
            'title'      => 'Customer Accounts',
            'activePage' => 'customers',
            'customers'  => $customers,
        ]);
    }
}
