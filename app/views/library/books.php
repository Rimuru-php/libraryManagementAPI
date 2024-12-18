<h1>Library Books</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
    </tr>
    <?php foreach ($books as $book): ?>
    <tr>
        <td><?= $book->id ?></td>
        <td><?= $book->title ?></td>
        <td><?= $book->author ?></td>
        <td><?= $book->isbn ?></td>
    </tr>
    <?php endforeach; ?>
</table>
