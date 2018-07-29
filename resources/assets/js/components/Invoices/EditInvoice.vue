<script>

    export default {
            name: 'editinvoice',
        data(){
            return {

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

    }

</script>