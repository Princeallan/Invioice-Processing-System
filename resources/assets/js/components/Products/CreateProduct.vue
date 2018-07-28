<script>
    export default {
        data() {
            return {
                product: {
                    name:'',
                    description:'',
                    quantity:'',
                    unit_price:''
                },

                edit: false
            }
        },
        methods: {
            addProduct() {

                let vm = this;

                let data = vm.product;

                axios.post('/api/products/save', data).then(function (response) {

                    window.location.href = '/products';

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

    <div >
        <div class="row columns small-8">
            <h3>Add new Product</h3>
        </div>
        <div class="row columns small-8">
            <input type="text" v-model="product.name" placeholder="Product Name" required>
        </div>
        <div class="row columns small-8">
            <input type="text" v-model="product.description" placeholder="Description" required>
        </div>
        <div class="row columns small-8">
            <input type="number" v-model="product.quantity" placeholder="Quantity" required>
        </div>
        <div class="row columns small-8">
            <input type="number" v-model="product.unit_price" placeholder="Pricing" required>
        </div>
        <div class="row columns small-8">
            <button type="submit" class="success button pull-right" @click="addProduct">
                Submit
            </button>
        </div>
    </div>

</template>


