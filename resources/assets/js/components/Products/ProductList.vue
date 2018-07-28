
<script>

    export default {
        data() {
            return {
                products: [],
            }
        },

        methods: {

            getProducts: function () {

                let vm = this;

                axios.get('/api/products').then((response) => {
                    var data = response.data.data;

                    if (data) {

                        vm.products = data;
                    }
                }, () => {

                    console.log('failed')

                });
            }
        },

        mounted() {
            this.getProducts();
        },

    }
</script>

<template>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Product </th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        <tr v-for="product in products">
            <td>1</td>
            <td>{{product.name}}</td>
            <td>{{product.description}}</td>
            <td>{{product.quantity}}</td>
            <td>{{product.unit_price}}</td>
            <td >
                <button type="submit" class="warning button"><i class="fa fa-edit"></i></button>

                <button type="submit" class="alert button"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>

        </tbody>
    </table>

</template>

