<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 29,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 30,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 31,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 32,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 33,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 34,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 35,
                'title' => 'case_study_create',
            ],
            [
                'id'    => 36,
                'title' => 'case_study_edit',
            ],
            [
                'id'    => 37,
                'title' => 'case_study_show',
            ],
            [
                'id'    => 38,
                'title' => 'case_study_delete',
            ],
            [
                'id'    => 39,
                'title' => 'case_study_access',
            ],
            [
                'id'    => 40,
                'title' => 'knowledge_management_access',
            ],
            [
                'id'    => 41,
                'title' => 'knowledge_create',
            ],
            [
                'id'    => 42,
                'title' => 'knowledge_edit',
            ],
            [
                'id'    => 43,
                'title' => 'knowledge_show',
            ],
            [
                'id'    => 44,
                'title' => 'knowledge_delete',
            ],
            [
                'id'    => 45,
                'title' => 'knowledge_access',
            ],
            [
                'id'    => 46,
                'title' => 'knowledge_category_create',
            ],
            [
                'id'    => 47,
                'title' => 'knowledge_category_edit',
            ],
            [
                'id'    => 48,
                'title' => 'knowledge_category_show',
            ],
            [
                'id'    => 49,
                'title' => 'knowledge_category_delete',
            ],
            [
                'id'    => 50,
                'title' => 'knowledge_category_access',
            ],
            [
                'id'    => 51,
                'title' => 'knowledge_tag_create',
            ],
            [
                'id'    => 52,
                'title' => 'knowledge_tag_edit',
            ],
            [
                'id'    => 53,
                'title' => 'knowledge_tag_show',
            ],
            [
                'id'    => 54,
                'title' => 'knowledge_tag_delete',
            ],
            [
                'id'    => 55,
                'title' => 'knowledge_tag_access',
            ],
            [
                'id'    => 56,
                'title' => 'navigationmenu_create',
            ],
            [
                'id'    => 57,
                'title' => 'navigationmenu_edit',
            ],
            [
                'id'    => 58,
                'title' => 'navigationmenu_show',
            ],
            [
                'id'    => 59,
                'title' => 'navigationmenu_delete',
            ],
            [
                'id'    => 60,
                'title' => 'navigationmenu_access',
            ],
            [
                'id'    => 61,
                'title' => 'menuitem_create',
            ],
            [
                'id'    => 62,
                'title' => 'menuitem_edit',
            ],
            [
                'id'    => 63,
                'title' => 'menuitem_show',
            ],
            [
                'id'    => 64,
                'title' => 'menuitem_delete',
            ],
            [
                'id'    => 65,
                'title' => 'menuitem_access',
            ],
            [
                'id'    => 66,
                'title' => 'slider_create',
            ],
            [
                'id'    => 67,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 68,
                'title' => 'slider_show',
            ],
            [
                'id'    => 69,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 70,
                'title' => 'slider_access',
            ],
            [
                'id'    => 71,
                'title' => 'slide_create',
            ],
            [
                'id'    => 72,
                'title' => 'slide_edit',
            ],
            [
                'id'    => 73,
                'title' => 'slide_show',
            ],
            [
                'id'    => 74,
                'title' => 'slide_delete',
            ],
            [
                'id'    => 75,
                'title' => 'slide_access',
            ],
            [
                'id'    => 76,
                'title' => 'setting_access',
            ],
            [
                'id'    => 77,
                'title' => 'team_member_create',
            ],
            [
                'id'    => 78,
                'title' => 'team_member_edit',
            ],
            [
                'id'    => 79,
                'title' => 'team_member_show',
            ],
            [
                'id'    => 80,
                'title' => 'team_member_delete',
            ],
            [
                'id'    => 81,
                'title' => 'team_member_access',
            ],
            [
                'id'    => 82,
                'title' => 'location_create',
            ],
            [
                'id'    => 83,
                'title' => 'location_edit',
            ],
            [
                'id'    => 84,
                'title' => 'location_show',
            ],
            [
                'id'    => 85,
                'title' => 'location_delete',
            ],
            [
                'id'    => 86,
                'title' => 'location_access',
            ],
            [
                'id'    => 87,
                'title' => 'company_create',
            ],
            [
                'id'    => 88,
                'title' => 'company_edit',
            ],
            [
                'id'    => 89,
                'title' => 'company_show',
            ],
            [
                'id'    => 90,
                'title' => 'company_delete',
            ],
            [
                'id'    => 91,
                'title' => 'company_access',
            ],
            [
                'id'    => 92,
                'title' => 'page_custom_field_create',
            ],
            [
                'id'    => 93,
                'title' => 'page_custom_field_edit',
            ],
            [
                'id'    => 94,
                'title' => 'page_custom_field_show',
            ],
            [
                'id'    => 95,
                'title' => 'page_custom_field_delete',
            ],
            [
                'id'    => 96,
                'title' => 'page_custom_field_access',
            ],
            [
                'id'    => 97,
                'title' => 'what_we_do_create',
            ],
            [
                'id'    => 98,
                'title' => 'what_we_do_edit',
            ],
            [
                'id'    => 99,
                'title' => 'what_we_do_show',
            ],
            [
                'id'    => 100,
                'title' => 'what_we_do_delete',
            ],
            [
                'id'    => 101,
                'title' => 'what_we_do_access',
            ],
            [
                'id'    => 102,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
