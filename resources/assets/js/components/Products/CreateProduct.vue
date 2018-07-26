<script>
    export default {
        // props: ['userId'],
        data() {
            return {
                product: {
                    name: '',
                    description: '',
                },

                edit: false
            }
        },
        methods: {
            addDepartment() {

                let vm = this;

                let data = vm.department;

                axios.post('/api/departments/save', data).then(function (response) {

                    window.location.href = '/departments';

                    vm.$notify({
                        title: 'Success',
                        message: response.data,
                        type: 'success'
                    });

                });
            }
        }
    }

</script>
<template>

    <div>
        <div class="form-group">
            <label>Name </label>
            <input type="text" name="title" v-model="department.name">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea placeholder="Describe the board..." name="description" v-model="department.description"></textarea>
        </div>
        <div class="form-group">
            <button class="button primary" type="submit" @click="addDepartment">Add Department</button>
        </div>
    </div>

</template>


