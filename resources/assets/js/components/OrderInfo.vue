<template>
    <div>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h3 class="display-3">Commande #{{order.id}}</h3>
            </div>
        </div>
        <div class="row orders-list" style="width: 90%;margin-left: 40px;">
            <div class="row" style="margin-bottom: 5px;">
                <div class="col-md-2"><strong>ID</strong></div>
                <div class="col-md-2"><strong>Création</strong></div>
                <div class="col-md-2"><strong>Total</strong></div>
                <div class="col-md-2"><strong>Status</strong></div>
            </div>
            <div class="row" style="margin-bottom: 5px;">
                <div class="col-md-2">{{order.id}}</div>
                <div class="col-md-2">{{order.created_at | formatDate}}</div>
                <div class="col-md-2">{{order.total}}</div>
                <div class="col-md-2">{{order.status}}</div>
            </div>

            <div class="row" style="margin-bottom: 5px;">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="col-sm-8">Produit</th>
                        <th class="col-sm-2">Prix</th>
                        <th class="col-sm-2">Quantité</th>
                    </tr>
                    </thead>

                    <tbody>
                        <tr v-for="product in order.order_data">
                            <td><a :href="productRoute + '/' + product.product_id">{{product.product.name}}</a></td>
                            <td>{{product.price}}</td>
                            <td>{{product.qty}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
    </div>

</template>

<script>
    export default {
        name: "OrderInfo",
        props: ['order', 'productRoute'],
    }
</script>

<style scoped>

</style>