<?php

return [

    'authentication' => [
        'title'          => 'Authentication',
        'title_singular' => 'User management',
    ],

    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'create'         => 'Create User',
        'edit'           => 'Edit User',
        'delete'           => 'Delete User',
        'delete_info'           => 'Are you sure you want to delete this User?',
        'info'           => 'Enter your User information',
        'type'           => 'Type Description',
        'login_info'         =>'Enter your login  details below:',
        'role_info'      =>'Select User Role',
        'profile_info'      =>'Profile Photo (Browser)',
        'print_info'     =>'Users Information List',
        'by_type'         =>'By Type',
        'general_info'    =>'General Information',
        'change_password' =>'Change Password',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'username'                     => 'Username',
            'name_en'                    => 'English Name',
            'name_ar'                    => 'Arabic Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'mobile'                    => 'Mobile',
            'mobile_helper'             => '',
            'type'                    => 'Type',
            'type_helper'             => '',
            'status'                    => 'Status',
            'status_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'new_password'             => 'New Password',
            're_new_password'          =>'Retype New Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',

        ],
    ],

    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'create'         => 'Create Permission',
        'edit'           => 'Edit Permission',
        'delete'           => 'Delete Permission',
        'delete_info'           => 'Are you sure you want to delete this permission?',
        'info'           => 'Enter your Permission information',
        'print_info'     =>'Permission Information List',
        'mass_info'      => 'Create Mass Permission',
        'mass'           => 'Create Mass',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name_en'             => 'Permission',
            'name_en_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],


    'role'     => [
        'title'          => 'Roles',
        'title_singular' => 'role',
        'create'         => 'Create Role',
        'edit'           => 'Edit Role',
        'delete'           => 'Delete Role',
        'delete_info'           => 'Are you sure you want to delete this role?',
        'info'           => 'Enter your Role information',

        'print_info'     =>'Role Information List',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name_en'             => 'Role',

            'name_en_helper'      => '',
            'assign'              => 'Assign Permission',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],


    'auditing'     => [
        'title'          => 'Auditing',
        'title_singular' => 'Audit',
        'create'         => 'Create auditing',
        'edit'           => 'Edit auditing',
        'delete'           => 'Delete auditing',
        'delete_info'           => 'Are you sure you want to delete this auditing?',
        'info'           => 'Enter your auditing information',

        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name_en'             => 'auditing',
            'name_en_helper'      => '',
            'event'            => 'Event',
            'url'            => 'URL',
            'module'            => 'Module',
            'record_no'            => 'Record No.',

            'old_value'            => 'Old Values',
            'new_values'            => 'New Values',
            'platForm'            => 'PlatForm|Browser',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],


    'setup' => [
        'title'          => 'Admin',
        'setting' => 'Setup',
    ],

    'appconfig'     => [
        'title'          => 'AppConfig',
        'title_singular' => 'AppConfig',
        'create'         => 'Create AppConfig',
        'edit'           => 'Edit AppConfig',
        'delete'           => 'Delete AppConfig',
        'delete_info'           => 'Are you sure you want to delete this AppConfig?',
        'info'           => 'Change company Basic info',
        'app' =>'App Information',
        'module_control' =>'Module Control',
        'hrm_module' =>'HRM Module',
        'item_module' =>'Item Module',
        'project_module' =>'Projects Module',
        'accounting_module' =>'Accounting Control',

        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name_en'             => 'System English Name',
            'name_en_helper'      => '',
            'name_ar'             => 'System Arabic Name',
            'name_ar_helper'      => '',
            'bname'             => 'Business Name',
            'bname_helper'      => '',
            'bname_email'             => 'Business E-mail',
            'bname_email_helper'      => '',
            'bname_mobile'             => 'Business Mobile',
            'bname_mobile_helper'      => '',
            'bname_address'             => 'Business Address',
            'bname_address_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],


    'type'     => [
        'title'          => 'Type',
        'title_singular' => 'Type',
        'create'         => 'Create Type',
        'edit'           => 'Edit Type',
        'delete'         => 'Delete Type',
        'delete_info'    => 'Are you sure you want to delete this Type?',
        'info'           => 'Create User Type',
        'edit_info'      =>'Edit User Type info',
        'print_info'               =>'Types Information List',

        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name_en'           => 'English Name',
            'name_ar'           =>'Arabic Name',
            'name_en_helper'    => '',
            'description'       =>'Description',

            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'edit_name_en'      =>'',
            'edit_name_ar'      =>'',


        ],
    ],

    'branch'     => [
        'title'          => 'Branches',
        'title_singular' => 'Branch',
        'create'         => 'Create Branch',
        'edit'           => 'Edit Branch',
        'delete'          => 'Delete Branch',
        'delete_info'           => 'Are you sure you want to delete this Branch?',
        'info'           => 'Create New Branch',
        'print_info'               =>'Branches Information List',
        'edit_info'      =>'Edit Branch Information',

        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Branch',
            'title_helper'      => '',
            'name_en'             => 'English Name',
            'name_en_helper'      => 'Branch English Name',
            'name_ar'             => 'Arabic Name',
            'name_ar_helper'      => 'Branch Arabic Name',
            'city'             => 'City',
            'city_helper'      => 'Choose City',
            'status'             => 'Status',
            'active_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],


    'country'     => [
        'title'          => 'Countries',
        'title_singular' => 'Country',
        'create'         => 'Create Country',
        'edit'           => 'Edit Country',
        'delete'           => 'Delete Country',
        'delete_info'           => 'Are you sure you want to delete this Country?',
        'info'           => 'Create New Country',
        'print_info'               =>'Countries Information List',
        'edit_info'      =>'Edit Country and Nationality Information',

        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name_en'             => 'English Country Name',
            'name_ar'             => 'Arabic Country Name',
            'na_name_en'             => 'English Nationality Name',
            'na_name_ar'             => 'Arabic Nationality Name',
            'na_code'              =>'Country Code',


            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'status'=>'Status',
        ],
    ],


    'city'     => [
        'title'          => 'Cities',
        'title_singular' => 'City',
        'create'         => 'Create City',
        'edit'           => 'Edit City',
        'delete'         => 'Delete City',
        'delete_info'    => 'Are you sure you want to delete this City?',
        'info'           => 'Create New City',
        'print_info'     =>'Cities Information List',
        'edit_info'      =>'Edit City Information',

        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name_en'             => 'City name in english',
            'name_ar'             => 'City name in Arabic',
            'name_en_helper'      => '',

            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'status'=>'Status',
        ],
    ],


    'documentation'     => [
        'title'          => 'Documentation',
        'title_singular' => 'Documentation',
        'create'         => 'Create Documentation',
        'edit'           => 'Edit Documentation',
        'delete'           => 'Delete Documentation',
        'delete_info'           => 'Are you sure you want to delete this Documentation?',
        'info'           => 'Create New Documentation',
        'print_info'               =>'Documentation Information List',
        'edit_info'      =>'Edit Documentation Information',

        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name_en'             => 'Documentation',
            'name_en_helper'      => '',


            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'status'=>'Status',
        ],
    ],

    'currency'     => [
        'title'          => 'Currencies',
        'title_singular' => 'Currency',
        'create'         => 'Create Currency',
        'edit'           => 'Edit Currency',
        'delete'           => 'Delete Currency',
        'delete_info'           => 'Are you sure you want to delete this Currency?',
        'info'           => 'Create New Currency',
        'print_info'               =>'Currencies Information List',
        'edit_info'      =>'Edit Currency Information',


        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name_en'             => 'Currency Name English',
            'name_ar'             => 'Currency Name Arabic',
            'name_en_helper'      => '',

            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'status'=>'Status'
        ],
    ],


    'tag'     => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'create'         => 'Create Tag',
        'edit'           => 'Edit Tag',
        'delete'           => 'Delete Tag',
        'delete_info'           => 'Are you sure you want to delete this Tag?',
        'info'           => 'Create New Tag',
        'edit_info'=>'Edit Tag Information',
        'print_info'=>'Tags Information List',

        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'text'              => 'Tag Name',
            'type'              =>'Type',
            'name_en_helper'      => '',

            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'menu'     => [
        'title'          => 'Menus',
        'title_singular' => 'Menu',
        'create'         => 'Create Menu',
        'edit'           => 'Edit Menu',
        'delete'           => 'Delete Menu',
        'delete_info'           => 'Are you sure you want to delete this Menu?',
        'info'           => 'Create New Menu',
        'edit_info'=>'Edit Menu Information',
        'print_info'=>'Menu Information List',

        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name_en'              => 'English Name',
            'name_ar'              => 'Arabic Name',
            'type'              =>'Type ',
            'name_en_helper'      => '',

            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],







];
