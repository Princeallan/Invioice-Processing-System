
<script>

    export default {
        // props: ['departments'],
        data() {
            return {
                departments: [],
            }
        },

        methods: {
            getDepartments: function () {
                let vm = this;

                axios.get('/api/departments').then((response) => {
                    var data = response.data.data;
                    if (data) {
                        // vm.$set(this, 'departments', response.data.data);
                        vm.departments = data;
                    }
                }, () => {
                    console.log('failed')
                });
            }
        },

        mounted() {
            this.getDepartments();
        },

        computed: {
            // departments() {
            //     let self = this;
            //     return self.department();
            // }
        }
    }
</script>

<template>

                    <table>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Department </th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr v-for="department in departments">
                            <td>1</td>
                            <td>{{department.name}}</td>
                            <td>{{department.description}}</td>
                            <td >
                                <button type="submit" class="warning button">Edit</button>
                                <button type="submit" class="alert button">Delete</button>
                            </td>
                        </tr>

                        </tbody>
                    </table>

</template>

