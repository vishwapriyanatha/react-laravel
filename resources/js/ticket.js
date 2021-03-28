import React from 'react';
import {MDBDataTable} from 'mdbreact';

export default class Home extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            ticket: []
        };
        this.getOrganization()
    }

    getOrganization = () => {
        axios.get('/get/ticket').then((response) => {
            this.setState({ticket: response.data})
        });
    }

    render() {
        const data = {
            columns: [
                {
                    label: 'Subject',
                    field: 'subject',
                    sort: 'asc',
                    width: 150
                },
                {
                    label: 'Assignee',
                    field: 'assignee',
                    sort: 'asc',
                    width: 150
                },
                {
                    label: 'Submitter',
                    field: 'submitter',
                    sort: 'asc',
                    width: 100
                },
                {
                    label: 'Organization',
                    field: 'organization',
                    sort: 'asc',
                    width: 100
                }
            ],
            rows: this.state.ticket

        };

        return (
            <MDBDataTable
                striped
                bordered
                hover
                data={data}
            />
        );

    }
}
