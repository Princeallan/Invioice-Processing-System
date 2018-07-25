<template>
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Invoice</span>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="medium-12">
                    <div class="form-group">
                        <label>Customer</label>
                        <!--<typeahead :url="customerURL" :initialize="form.customer"-->
                                   <!--@input="onCustomer" />-->
                        <small class="error-control" >

                        </small>
                    </div>
                </div>
                <div class="medium-6">
                    <div class="form-group">
                        <label>
                            Number
                            <small>Auto Generated</small>
                        </label>
                        <span class="form-control"></span>
                    </div>
                </div>
                <div class="medium-6">
                    <div class="form-group">
                        <label>Reference
                            <small>Optional</small>
                        </label>
                        <input type="text" class="form-control" >
                        <small class="error-control" >

                        </small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="medium-6">
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" class="form-control" >
                        <small class="error-control" >

                        </small>
                    </div>
                </div>
                <div class="medium-6">
                    <div class="form-group">
                        <label>Due Date</label>
                        <input type="date" class="form-control" >
                        <small class="error-control" >

                        </small>
                    </div>
                </div>
            </div>
            <hr>
            <table class="form-table">
                <thead>
                <tr>
                    <th>Item Description</th>
                    <th>Unit Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <tr >
                    <td class="w-14">
                        <!--<typeahead :url="productURL" :initialize="item.product"-->
                                   <!--@input="onProduct(index, $event)" />-->
                        <small class="error-control" >
                        </small>
                    </td>
                    <td class="w-4">
                        <input type="text" class="form-control" >
                        <small class="error-control">
                        </small>
                    </td>
                    <td class="w-2">
                        <input type="text" class="form-control" >
                        <small class="error-control" >
                        </small>
                    </td>
                    <td class="w-4">
                            <span class="form-control">
                            </span>
                    </td>
                    <td>
                        <span class="form-remove" >&times;</span>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="2">
                        <button class="btn btn-sm"
                              >Add New Line</button>
                    </td>
                    <td class="form-summary">Sub Total</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" class="form-summary">Discount</td>
                    <td>
                        <input type="text" class="form-control" >
                        <small class="form-control" >

                        </small>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="form-summary">Grand Total</td>
                    <td></td>
                </tr>
                </tfoot>
            </table>
            <hr>
            <div class="row">
                <div class="medium-12">
                    <div class="form-group">
                        <label>Terms and Conditions</label>
                        <textarea class="form-control" ></textarea>
                        <small class="error-control" >

                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer flex-end">
            <div>
                <button class="btn btn-primary" >Save</button>
                <button class="btn"  >Cancel</button>
            </div>
        </div>
    </div>
</template>
