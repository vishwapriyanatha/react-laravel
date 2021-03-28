<?php

use Carbon\Carbon;
use App\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tickets')->delete();
        $json = \File::get("database/data/tickets.json");
        $data = json_decode($json);
        foreach ($data as $obj) {

            Ticket::create(array(
                'id' => $obj->_id,
                'url' => $obj->url,
                'external_id' => $obj->external_id,
                'type' => isset($obj->type) ? $obj->type : null,
                'subject' => $obj->subject,
                'description' => (isset($obj->description)) ? $obj->description : null,
                'priority' => $obj->priority,
                'status' => $obj->status,
                'submitter_id' => isset($obj->submitter_id) ? $obj->submitter_id : null,
                'assignee_id' => isset($obj->assignee_id) ? $obj->assignee_id : null,
                'organization_id' => isset($obj->organization_id) ? $obj->organization_id : null,
                'has_incidents' => $obj->has_incidents,
                'via' => $obj->via,
                'tags' => json_encode($obj->tags),
                'created_at' => Carbon::parse($obj->created_at)->toDateTimeString(),
                'due_at' => (isset($obj->due_at)) ? Carbon::parse($obj->due_at)->toDateTimeString() : null,
            ));


        }
    }
}
