<?php require("config.php") ?>

<!doctype html>
<html class="no-js" lang="fr">

<head>
  <title>Ajout | DistricBasket</title>
  <meta name="description" content="Site de vente de chaussures de Sneakers (Basket de ville)">

  <?php include('header.php') ?>

  <?php
  ?>

  <form class="pt-5" action="verifadd.php" method="post" enctype="multipart/form-data">
    <label class="pt-5" for="name">Nom:</label>
    <input id="name" type="text" name="article_name" value=""><br>
    <label for="desc">Description:</label>
    <input id="desc" type="text" name="article_desc" value=""><br>
    <label for="price">Prix:</label>
    <input id="price" type="text" name="article_price" value=""><br>
    <label for="dispo">Dispo: (Oui / Non)</label>
    <input id="dispo" type="text" name="disposhoes" value=""><br>
    <label for="image">Image:</label>
    <input type="file" name="url_img"><br>
    <input type="submit" name="" value="Valider">
  </form>
  <?php include('footer.php') ?>
  <?php include('script.php') ?>
