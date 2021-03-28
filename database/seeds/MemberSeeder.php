<?php

use Carbon\Carbon;
use App\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('members')->delete();
        $json = \File::get("database/data/users.json");
        $data = json_decode($json);

        foreach ($data as $obj) {
            $insert = (array)$obj;
            $insert['id'] = $obj->_id;
            $insert['tags'] = json_encode($obj->tags);
            $insert['created_at'] = Carbon::parse($obj->created_at)->toDateTimeString();
            $insert['last_login_at'] = Carbon::parse($obj->last_login_at)->toDateTimeString();
            unset($insert['_id']);
            Member::create($insert);
        }
    }
}
