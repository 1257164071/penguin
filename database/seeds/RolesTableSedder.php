<?php

use Illuminate\Database\Seeder;

class RolesTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role_list = array(
            array('id' => '1', 'name' => '首页', 'class' => 'J_menuItem', 'url' => '#', 'icon' => 'fa fa-home', 'level' => '1', 'p_id' => '0'),

            array('id' => '2', 'name' => '系统管理', 'class' => '', 'url' => '#', 'icon' => '', 'level' => '1', 'p_id' => '0'),
            array('id' => '3', 'name' => '组织机构', 'class' => 'J_menuItem', 'url' => '#', 'icon' => '', 'level' => '2', 'p_id' => '2'),
            array('id' => '4', 'name' => '基础信息', 'class' => 'J_menuItem', 'url' => '#', 'icon' => '', 'level' => '2', 'p_id' => '2'),
            array('id' => '5', 'name' => '仓库管理', 'class' => 'J_menuItem', 'url' => '#', 'icon' => '', 'level' => '3', 'p_id' => '4'),
            array('id' => '6', 'name' => '物资管理', 'class' => 'J_menuItem', 'url' => '#', 'icon' => '', 'level' => '3', 'p_id' => '4'),
            array('id' => '7', 'name' => '分类管理', 'class' => 'J_menuItem', 'url' => '#', 'icon' => '', 'level' => '2', 'p_id' => '2'),

        );

        DB::table('roles')->insert($role_list);

    }
}
