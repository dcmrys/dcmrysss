<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            [
                'user_id'  => 'USR-001',
                'username' => 'admin.mc',
                'name'     => 'Maryclaire Jashley',
                'role'     => 'Administrator',
                'status'   => 'Active',
            ],
            [
                'user_id'  => 'USR-002',
                'username' => 'cashier.da',
                'name'     => 'Da Real',
                'role'     => 'Cashier',
                'status'   => 'Active',
            ],
            [
                'user_id'  => 'USR-003',
                'username' => 'cashier.micah',
                'name'     => 'Micah Arel',
                'role'     => 'Cashier',
                'status'   => 'Active',
            ],
            [
                'user_id'  => 'USR-004',
                'username' => 'manager.jash',
                'name'     => 'Jashley Sy',
                'role'     => 'Store Manager',
                'status'   => 'Active',
            ],
            [
                'user_id'  => 'USR-005',
                'username' => 'stock.kadi',
                'name'     => 'Kadi Sha',
                'role'     => 'Inventory Clerk',
                'status'   => 'Inactive',
            ],
        ];

        return view('users/index', [
            'title'      => 'User Accounts',
            'activePage' => 'users',
            'users'      => $users,
        ]);
    }
}
