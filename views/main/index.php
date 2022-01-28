<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= CSS . "/style.css" ?> ">
    <title>Document</title>
</head>

<body>
    <?php
/*     if (EXECUTION_FLOW)
        echo "<p>Consult view</p>"; */
    

    require VIEWS . '/header.php';
    ?>
    <div id="main">
        <h1 class="center">Consult content</h1>

        <table width="100%" border="1">
            <thead>
                <th class="tg-0pky">Name</th>
                <th class="tg-0lax">Email</th>
                <th class="tg-0lax">Gender</th>
                <th class="tg-0lax">City</th>
                <th class="tg-0lax">Age</th>
                <th class="tg-0lax">Phone Number</th>
                <th class="tg-0lax">Actions</th>
            </thead>
            <tbody id="tbody-contents">
                <?php
                include_once(ENTITIES . '/Content.php');
                foreach ($this->contents as $row) {
                    $content = new Content();
                    $content = $row;
                ?>
                    <tr id="<?php echo 'row-' . $content->id; ?>">
                        <td class="tg-0lax"><?php echo $content->name; ?></td>
                        <td class="tg-0lax"><?php echo $content->email; ?></td>
                        <td class="tg-0lax"><?php echo $content->gender_id; ?></td>
                        <td class="tg-0lax"><?php echo $content->city; ?></td>
                        <td class="tg-0lax"><?php echo $content->age; ?></td>
                        <td class="tg-0lax"><?php echo $content->phone_number; ?></td>

                        <td><a href="<?php echo BASE_URL . 'content/consult/' . $content->id; ?>">Detail</a></td>
                        <td><a href="<?php echo BASE_URL . 'content/delete/' . $content->id; ?>">Delete</a></td>
                        <!-- <td><button class="btnDelete" data-content_id="<?php echo  $content->id; ?>">Delete</button></td> -->
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div id="responseContent" class="center"><?php if (isset($this->message)) echo $this->message; ?></div>

    </div>
    <?php
    require VIEWS . '/footer.php';
    ?>
    <script src="<?php echo JS; ?>/main.js"></script>
</body>

</html>