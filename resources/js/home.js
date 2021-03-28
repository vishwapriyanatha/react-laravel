import React from 'react';
import {MDBDataTable} from 'mdbreact';

export default class Home extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            organization: []
        };
        this.getOrganization()
    }

    getOrganization = () => {
        axios.get('/get/organization').then((response) => {
            this.setState({organization: response.data})
        });
    }

    render() {
        const data = {
            columns: [
                {
                    label: 'Name',
                    field: 'name',
                    sort: 'asc',
                    width: 150
                },
                {
                    label: 'Ticket',
                    field: 'subject',
                    sort: 'asc',
                    width: 150
                },
                {
                    label: 'User',
                    field: 'm_name',
                    sort: 'asc',
                    width: 100
                },
            ],
            rows: this.state.organization

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
