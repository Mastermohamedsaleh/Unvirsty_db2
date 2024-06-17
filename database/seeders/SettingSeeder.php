<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;


use App\Models\Setting;


class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        
        DB::table('settings')->delete();
        $settings = [
            'unvirsty_name'=>'SmartEducation',
            'phone'=>'16324',
            'address'=>'Cairo',
            'logo'=>'logo2.png',
            'email'=>'Unvirsty@gmail.com',
            'link_facebook'=>'https://facebook.com/unvirsty',
            'link_linked_in'=>'https://linked_in.com/unvirsty',
            'link_twitter'=>'https://twitter.com/unvirsty',
        ];     
            Setting::create($settings);
          
    }
}
