<?php
  $books = [[
    'name' => 'Thora sa Aasman', 'author' => 'Umaira Ahmed'
],

['name' =>'Aangan','author' => 'Khadija Mastoor'],
 ['name' =>'Shahrzad', 'author' =>'Saima Akram CH'],
];
  ?>
  <ul>

  <?php foreach ($books as $book) : ?>
    <li><?= $book['name']; ?>
<a href="<?= $book['author'] ?>">






</a>
</li>
    <?php endforeach; ?>
  </ul>