<template>

                    <table>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Invoice No.</th>
                            <th> Invoice Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td >
                                <button type="submit" class="warning button">Edit</button>
                                <button type="submit" class="alert button">Delete</button>
                            </td>
                        </tr>

                        </tbody>
                    </table>

</template>


<script>
    export default {
        name: 'invoices',

        data() {
            return {
                departments: [],
            }
        },

        methods: {
            getDepartments: function () {
                let vm = this;
                axios.get('/api/departments').then((response) => {
                    var data = response.data;
                    if (data) {
                        this.$set(this, 'departments', response.data.data);
                    }
                }, () => {
                    console.log('failed')
                });
            }
        },

        mounted() {
            this.getDepartments();
        },
        //
        // computed: {
        //     usersData() {
        //         let self = this;
        //         return self.usersData();
        //     }
        // }
    }
</script>
