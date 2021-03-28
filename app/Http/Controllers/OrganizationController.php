<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    private $Ticket;

    public function __construct(Ticket $Ticket)
    {
        $this->Ticket = $Ticket;
    }

    public function getOrganizations(Request $request)
    {
        return $this->Ticket
            ->select('organizations.*', 'members.name as m_name', 'tickets.subject')
            ->leftJoin('organizations', 'organizations.id', 'tickets.organization_id')
            ->leftJoin('members', 'members.id', 'tickets.assignee_id')
            ->get();
    }
}
