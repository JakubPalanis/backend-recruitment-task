<?php

$json_data = file_get_contents("dataset/users.json");
$users = json_decode($json_data, true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUser = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'address' => [
            'street' => $_POST['street'],
            'suite' => $_POST['suite'],
            'city' => $_POST['city'],
            'zipcode' => $_POST['zipcode'],
            'geo' => [
                'lat' => $_POST['lat'],
                'lng' => $_POST['lng']
            ]
        ],
        'phone' => $_POST['phone'],
        'website' => $_POST['website'],
        'company' => [
            'name' => $_POST['company'],
            'catchPhrase' => $_POST['catchPhrase'],
            'bs' => $_POST['bs']
        ]
    ];

    $users[] = $newUser;
    $json_data = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents("dataset/users.json", $json_data);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_GET['remove'])) {
    $userId = $_GET['remove'];

    foreach ($users as $key => $user) {
        if ($user['id'] == $userId) {
            unset($users[$key]);
            break;
        }
    }

    $json_data = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents("dataset/users.json", $json_data);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}


if (count($users) != 0) {
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Company</th>
            <th> </th>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['address']['street'] . ', <br />' . $user['address']['city'] . ', <br />' . $user['address']['zipcode']; ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td><?php echo $user['company']['name']; ?></td>
               <td><a href="?remove=<?php echo $user['id']; ?>"><button>Remove</button></a></td>
            </tr>
        <?php 
        } 
        ?>
    </table>
    <?php
}
?>
