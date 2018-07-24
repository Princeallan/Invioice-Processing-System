<template>

    <div class="row">
        <div class="grid-container">
            <div class="grid-x">
                <div class="medium-offset-1 medium-10">
                    <div class="form-group">
                        <a class="button primary" href="">Add New Invoice</a>
                    </div>
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
                            <td>
                                <button type="submit" class="warning button">Edit</button>
                                <button type="submit" class="alert button">Delete</button>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</template>


<script>
    export default {
        name: 'invoices',
    }
</script>