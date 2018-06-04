<!doctype html>
<html>
<body>
<form method="post" action="/produits" enctype="multipart/form-data">
            {{ csrf_field() }}
<div class="row">
    <div class="col">
        <input id="titre" name="productName" type="text" class="form-control"
               placeholder="Nom du produit"
               required>
    </div>
    </div>
<br>
<div class="row">
    <div class="col">
        <textarea id=Description" name="productDescription" class="form-control" rows="3"
        placeholder="description" required></textarea>
    </div>
</div>
    </br>
    <div class="row">
        <div class="col">
            <input id="tarteornot" type="checkbox" name="tarteornot" value="1" required>
            <label for="tarteornot">Le Produit n'est pas une tarte flambée</label>
        </div>
    </div>
<br/>
<div class="row">
        <div class="col">
            <input id="Conseils_de_prep" type="text" name="Conseil de preparation" placeholder="Conseils_de_prep" required>
        </div>
</div>
    <br/>

<div class="row">
    <div class="col">
        <input id="link_img" type="text" name="link_img" placeholder="lien de l'image" required>
    </div>
</div>
    <br>
<div class="row">
        <div class="col">
            <input id="bio" type="checkbox" name="bio" value="1" required>
            <label for="bio">Le Produit fais parti de la gamme Bio</label>
        </div>
</div>
    </br>

<br>
<br>
<input type="submit"
       value="Ajouter un nouveau produit"
       class="btn btn-sm btn-secondary"/>
</form>
</body>
</html>