import React from 'react';
import {MDBDataTable} from 'mdbreact';

export default class Home extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            member: []
        };
        this.getMember()
    }

    getMember = () => {
        axios.get('/get/member').then((response) => {
            this.setState({member: response.data})
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
                }
            ],
            rows: this.state.member

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
