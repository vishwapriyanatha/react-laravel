<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketController extends Controller
{
    private $Ticket;

    public function __construct(Ticket $Ticket)
    {
        $this->Ticket = $Ticket;
    }

    public function getTicket()
    {
        return $this->Ticket
            ->select('tickets.*', 'a.name as assignee', 's.name as submitter', 'organizations.name as organization')
            ->join('members as a', 'a.id', 'tickets.assignee_id')
            ->join('members as s', 's.id', 'tickets.submitter_id')
            ->join('organizations', 'organizations.id', 'tickets.organization_id')
            ->get();
    }
}
