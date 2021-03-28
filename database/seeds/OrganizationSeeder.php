<?php

use Carbon\Carbon;
Use App\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('organizations')->delete();
        $json = \File::get("database/data/organizations.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Organization::create(array(
                'id' => $obj->_id,
                'url' => $obj->url,
                'external_id' => $obj->external_id,
                'name' => $obj->name,
                'domain_names' => json_encode($obj->domain_names),
                'details' => $obj->details,
                'shared_tickets' => $obj->shared_tickets,
                'tags' => json_encode($obj->tags),
                'created_at' => Carbon::parse($obj->created_at)->toDateTimeString(),
            ));
        }
    }
}
