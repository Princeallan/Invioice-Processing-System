<script>
    export default {
        name: 'invoice',

        data() {
            return {
                invoice: {

                }
            }
        },
        methods: {
            addInvoices() {

                let vm = this;

                let data = vm.invoice;
                console.log(data);

                axios.post('/api/invoices/save', data   ).then(function (response) {

                    window.location.href = '/invoices';

                    vm.$notify({
                        title: 'Success',
                        message: response.data,
                        type: 'success'
                    });

                });
            }

        },

        watch:{
            "invoice.quantity":function (valueInvoice) {
                this.invoice.total=Number(valueInvoice) * Number(this.invoice.unit_price)
            },
            "invoice.discount":function (valueInvoice) {
                this.invoice.grand_total=Number(this.invoice.total) - Number(valueInvoice)
            }
        },
        computed: {
            // 'invoice.total': function(){
            //     return this((invoice.quantity) * parseFloat(invoice.unit_price))
            // },
            //
            // grandTotal: function() {
            //     return this.total - parseFloat(this.invoice.discount);
            // }
        }

    }
</script>