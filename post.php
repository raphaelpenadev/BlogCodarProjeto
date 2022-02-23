<?php

include_once("templates/header.php");

if (isset($_GET['id'])) {
  $postId = $_GET['id'];

  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}

?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quo ducimus perferendis aspernatur cupiditate sint earum? Illum vero sint libero, dolores cumque architecto quam consectetur accusantium enim iusto ipsa non!
      Veniam amet laboriosam fuga incidunt illum recusandae excepturi culpa, quis atque vero odit nobis eos quod reiciendis nisi. Iure vitae facilis optio, hic omnis illum est. Nostrum ipsa officiis quisquam!
      Pariatur molestias iste quibusdam eius ea mollitia aperiam accusantium, repellendus aliquam fugit consequuntur vitae necessitatibus explicabo corporis officia ab amet dicta sint cumque? Blanditiis iusto possimus hic eaque corporis perspiciatis!
      Corrupti nisi eum ducimus facere eaque fugit nihil amet unde ipsa commodi hic dolore maxime alias, repudiandae vitae, labore enim quos voluptate aperiam? Amet fugit harum repellendus qui quasi eum.
      Nostrum, aliquid. Ullam consequuntur delectus beatae quis cum distinctio magni sequi, eius numquam repudiandae ratione ab expedita illo corrupti quo eligendi nisi molestias doloremque recusandae neque esse facere explicabo! Minus?</p>
    <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quo ducimus perferendis aspernatur cupiditate sint earum? Illum vero sint libero, dolores cumque architecto quam consectetur accusantium enim iusto ipsa non!
      Veniam amet laboriosam fuga incidunt illum recusandae excepturi culpa, quis atque vero odit nobis eos quod reiciendis nisi. Iure vitae facilis optio, hic omnis illum est. Nostrum ipsa officiis quisquam!
      Pariatur molestias iste quibusdam eius ea mollitia aperiam accusantium, repellendus aliquam fugit consequuntur vitae necessitatibus explicabo corporis officia ab amet dicta sint cumque? Blanditiis iusto possimus hic eaque corporis perspiciatis!
      Corrupti nisi eum ducimus facere eaque fugit nihil amet unde ipsa commodi hic dolore maxime alias, repudiandae vitae, labore enim quos voluptate aperiam? Amet fugit harum repellendus qui quasi eum.
      Nostrum, aliquid. Ullam consequuntur delectus beatae quis cum distinctio magni sequi, eius numquam repudiandae ratione ab expedita illo corrupti quo eligendi nisi molestias doloremque recusandae neque esse facere explicabo! Minus?</p>
    <p class="post-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quo ducimus perferendis aspernatur cupiditate sint earum? Illum vero sint libero, dolores cumque architecto quam consectetur accusantium enim iusto ipsa non!
      Veniam amet laboriosam fuga incidunt illum recusandae excepturi culpa, quis atque vero odit nobis eos quod reiciendis nisi. Iure vitae facilis optio, hic omnis illum est. Nostrum ipsa officiis quisquam!
      Pariatur molestias iste quibusdam eius ea mollitia aperiam accusantium, repellendus aliquam fugit consequuntur vitae necessitatibus explicabo corporis officia ab amet dicta sint cumque? Blanditiis iusto possimus hic eaque corporis perspiciatis!
      Corrupti nisi eum ducimus facere eaque fugit nihil amet unde ipsa commodi hic dolore maxime alias, repudiandae vitae, labore enim quos voluptate aperiam? Amet fugit harum repellendus qui quasi eum.
      Nostrum, aliquid. Ullam consequuntur delectus beatae quis cum distinctio magni sequi, eius numquam repudiandae ratione ab expedita illo corrupti quo eligendi nisi molestias doloremque recusandae neque esse facere explicabo! Minus?</p>
  </div>

  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag) : ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category) : ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>


<?php

include_once('templates/footer.php');

?>