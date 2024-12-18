<h1>Issued Loans</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Book ID</th>
        <th>Member ID</th>
        <th>Loan Date</th>
        <th>Return Date</th>
    </tr>
    <?php foreach ($loans as $loan): ?>
    <tr>
        <td><?= $loan->id ?></td>
        <td><?= $loan->bookId ?></td>
        <td><?= $loan->memberId ?></td>
        <td><?= $loan->loanDate ?></td>
        <td><?= $loan->returnDate ?: 'Not Returned' ?></td>
    </tr>
    <?php endforeach; ?>
</table>
