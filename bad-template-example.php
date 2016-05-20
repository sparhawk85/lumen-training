<table cellspacing="0" cellpadding="0">
    <thead>
    <tr>
        <th class="w80 first ttnormal">Zawartość: <?= $nameProw[$cat]; ?></th>
        <th class="w20 last">
            <a href="<?= ADMIN; ?><?= this_page(); ?>/content_add/<?= $cat; ?>/"
               class="margin-right-20 ttnormal fright">dodaj wpis</a>
        </th>
    </tr>
    </thead>
    <tbody>
    <?

    $rowsQuery = $db->prepare("SELECT `id`, `title` FROM `articles` WHERE `provider`=:cat ORDER BY `id` DESC");
    $rowsQuery->bindParam(':cat', $cat, PDO::PARAM_STR);
    $rowsQuery->execute();
    $rows = $rowsQuery->fetchAll(PDO::FETCH_ASSOC);
    $rowsQuery->closeCursor();

    $rows = ent_quotes($rows);

    if (count($rows)) {
        $iR = 1;
        foreach ($rows as $row) {
            ?>
            <tr class="bg-<?= ($iR % 2 ? 'a' : 'b'); ?>">
                <td><?= $row['title']; ?></td>
                <td>
                    <a href="#" title="Edytuj" class="OIcon OIcon-Edytuj"
                       onclick="return buttonOption({ 'type': 'goTo', 'href': '<?= ADMIN; ?><?= this_page(
                       ); ?>/content_edytuj/<?= $cat; ?>/<?= $row['id']; ?>/' });"></a>
                    <a href="#" title="Usuń" class="OIcon OIcon-Usun"
                       onclick="return buttonOption({ 'type': 'extend', 'mode': 'goTo', 'href': '<?= ADMIN; ?>potwierdzenie/?url=<?= urlencode(
                           ADMIN . this_page() . '/content/' . $cat . '/usun/' . $row['id'] . '/'
                       ); ?>', 'q': 'Wpis zostanie całkowicie usunięty z systemu! Kontynuować?' });"></a>
                </td>
            </tr>
            <?
            $iR++;
        }
    } else {
        ?>
        <tr>
            <td colspan="2" class="padding0">brak elementów</td>
        </tr>
        <?
    }
    ?>
    </tbody>
</table>