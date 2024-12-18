<h1>Library Members</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php foreach ($members as $member): ?>
    <tr>
        <td><?= $member->id ?></td>
        <td><?= $member->name ?></td>
        <td><?= $member->email ?></td>
    </tr>
    <?php endforeach; ?>
</table>
