<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body style="background: url('http://127.0.0.1:8000/img/bois.jpg');background-size: cover ">
<div class="container" style="margin-top:12%;box-shadow: 7px 0 10px #555;padding: 0">
    <div class="card">
        <div class="row">
            <aside class="col-sm-5 border-right">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <div> <a href="#"><img src="{{$produit->link_img}}" style="max-height: 500px"></a></div>
                    </div>
                </article> <!-- gallery-wrap .end// -->
            </aside>
            <aside class="col-sm-7">
                <article class="card-body p-5">
                    <h3 class="title mb-3">{{$produit->titre}}</h3>

                    <p class="price-detail-wrap">
                        <!-- price-detail-wrap .// -->
                        <dl class="item-property">
                            <dt>Description</dt>
                            <dd><p>{{$produit->description}}</p></dd>
                    </dl>
                    <dl class="param param-feature">
                        <dt>Ingredient</dt>
                        <dd>liste des ingrédients</dd>
                    </dl>  <!-- item-property-hor .// -->

                    <dl class="param param-feature">
                        <dt>Conseil de preparation</dt>
                        <dd>{{$produit->Conseil_de_prep}}</dd>
                    </dl>  <!-- item-property-hor .// -->

                    <hr>
                    <div class="row">
                        <div class="col-sm-5">
                            <dl class="param param-inline">
                                <dt>Quantitée disponible: </dt>
                                <dd>par boite de 2 </dd>
                                <dd>par boite de 4</dd>
                            </dl>  <!-- item-property .// -->
                        </div> <!-- col.// -->
                    </div>
                </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->


</div>
<!--container.//-->
</body>
</html>